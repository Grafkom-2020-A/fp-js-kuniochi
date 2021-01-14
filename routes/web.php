<?php

use App\Http\Controllers\Auth\LoginController;
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
});

Route::get('/auth/{provider}', [App\Http\Controllers\Auth\LoginController::class, 'mengalihkanLayanan'])->name('auth-google');
Route::get('/auth/{provider}/callback', [App\Http\Controllers\Auth\LoginController::class, 'memanggilLayanan'])->name('google-callback');


Route::middleware('auth')->group(function () {
    Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/tari-coba', 'App\Http\Controllers\DashboardController@tariCoba');

    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');
    Route::post('/dashboard/create', 'App\Http\Controllers\DashboardController@create');
    Route::get('/dashboard/edit', 'App\Http\Controllers\BookController@edit');

    Route::resource('/dashboard', 'App\Http\Controllers\DashboardController');
});
