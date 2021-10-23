<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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
