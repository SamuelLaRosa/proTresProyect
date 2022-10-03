<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterCotroller;
use App\Http\Controllers\SessionController;

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
    return view('form');
});

Route::get('/register', [RegisterCotroller::class, 'create'])->name('register.index');
Route::get('/login', [SessionController::class, 'create'])->name('login.index');
