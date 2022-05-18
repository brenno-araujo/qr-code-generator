<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('badge.create');
    });
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/cracha', function () {
        return view('badge.show');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
