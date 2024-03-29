<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Models\EventType;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $events = ['events'=>EventType::all()];
    return view('welcome')->with($events);
})->name('/');


Route::get('auth.complete-verification', [MainController::class, 'completeVerification'])->name('complete-verification');
Route::get('auth.login', [MainController::class, 'login'])->name('login');
Route::get('auth.register', [MainController::class, 'register'])->name('register');
Route::post('/do-register', [MainController::class, 'doRegister'])->name('do-register');
Route::post('/do-login', [MainController::class, 'doLogin'])->name('do-login');
Route::get('/choose_event', [MainController::class, 'choose_event'])->name('choose_event');
Route::get('/invitation_detail', [MainController::class, 'invitation_detail'])->name('invitation_detail');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [MainController::class, 'logout'])->name('logout');
    Route::get('/profile', [MainController::class, 'profile'])->name('profile');
    Route::post('/update_profile', [MainController::class, 'update_profile'])->name('update_profile');
    Route::post('/change_password', [MainController::class, 'change_password'])->name('change_password');
    Route::get('/start_creating/{no_of_celebrant}', [MainController::class, 'start_creating'])->name('start_creating');
    Route::get('/create_invite', [MainController::class, 'create_invite'])->name('create_invite');
    Route::post('/create_now', [MainController::class, 'create_now'])->name('create_now');
    Route::post('/save_invite', [MainController::class, 'save_invite'])->name('save_invite');
    Route::post('/upload_temp', [MainController::class, 'upload_temp'])->name('upload_temp');
    Route::get('/select_design', [MainController::class, 'select_design'])->name('select_design');
    Route::get('/all_saves', [MainController::class, 'all_saves'])->name('all_saves');
    Route::get('/delete_invite/{invite_id}', [MainController::class, 'delete_invite'])->name('delete_invite');
    Route::get('/preview_invite/{invite_id}', [MainController::class, 'preview_invite'])->name('preview_invite');
    Route::get('/edit_invite/{invite_id}', [MainController::class, 'edit_invite'])->name('edit_invite');
    Route::get('/change_temp', [MainController::class, 'change_temp'])->name('change_temp');
});

// AdminController routes
Route::group(['middleware' => ['is_admin']], function () {
    Route::get('admin.dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('admin.save_temp', [AdminController::class, 'save_temp'])->name('save_temp');
    Route::post('/save_now', [AdminController::class, 'save_now'])->name('save_now');
});

// Routes for forgot and reset password
Route::get('/password.request', function () {
    return view('auth.forgot');
})->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
    $email = $request->email;
    $checkEmail = User::where('email', $email)->first();
    if (!$checkEmail) {
        return back()->with('invalid', "This email address is not Registered on this Platform");
    } else {
        $status = Password::sendResetLink(
            $request->only('email')
        );
        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }
})->name('password.email');

Route::get('auth.reset-password/{token}', function (Request $request, $token) {
    $bnn = ['token' => $token];
    $email = ['email' => $request->email];
    return view('auth.reset-password')->with($bnn)->with($email);
})->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
    $checkEmail = User::where('email', $request->email)->first();
    if (!$checkEmail) {
        return back()->with('invalid', "Invalid Email Address");
    } else {
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                    // 'password' => $password
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
})->name('password.update');
