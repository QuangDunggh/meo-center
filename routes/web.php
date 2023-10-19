<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/query', [HomeController::class, 'getData'])->name('get-data');

Route::get('/login/wordpress', [LoginController::class,'redirectToWordPress'])->name('redirectToWordPress');
Route::get('/login/wordpress/callback', [LoginController::class,'handleWordPressCallback'])->name('handleWordPressCallback');
