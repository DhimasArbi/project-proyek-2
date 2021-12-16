<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BatikController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
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

Route::get('/', [BatikController::class, 'index'])->name('batik.index');
Route::get('/input', [BatikController::class, 'create'])->name('batik.create');
Route::resource('batik', BatikController::class);
Route::get('/about', function () {
    return view('about');
});

Route::group(['middleware' => ['guest']], function () {
    Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');
    Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
});

Route::group(['middleware' => ['auth']], function () {
    /**
     * Logout Routes
     */
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
});
