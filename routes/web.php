<?php

use App\Http\Controllers\Badge\BadgeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use LaravelQRCode\Facades\QRCode;

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
    
    Route::get('/create', [BadgeController::class, 'create'])->name('create');

    Route::get('/show', [BadgeController::class, 'show'])->name('show');
    
    Route::get('/qr-code', [BadgeController::class, 'showQrCode'])->name('code');
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
