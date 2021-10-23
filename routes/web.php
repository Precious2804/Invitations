<?php

use App\Http\Controllers\MainController;
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
    return view('welcome');
})->name('/');


Route::get('auth.complete-verification', [MainController::class, 'completeVerification'])->name('complete-verification');
Route::get('auth.login', [MainController::class, 'login'])->name('login');
Route::get('auth.register', [MainController::class, 'register'])->name('register');
Route::post('/do-register', [MainController::class, 'doRegister'])->name('do-register');
Route::post('/do-login', [MainController::class, 'doLogin'])->name('do-login');



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
    $email = ['email'=> $request->email];
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

