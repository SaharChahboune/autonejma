<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::post('/signup', [UserController::class, 'store'])->name('signup');
Route::get('/signup', function(){
    return view('register');
})->name('signup.request');

Route::get('/csrf-token', function () {
    return csrf_token();
});
Route::get('/', function () {
    return view('index');
})->name('index');;
Route::get('/app', function () {
    return view('autonejma');
})->name('autonejma');;
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
