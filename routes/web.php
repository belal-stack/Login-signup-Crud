<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/view-profile', [App\Http\Controllers\HomeController::class, 'viewProfile'])->name('view.profile');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::post('/update-profile', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('update.profile');
Route::get('/change-password', [App\Http\Controllers\HomeController::class, 'changePassword'])->name('change.password');
Route::post('/update-password', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('update.password');
