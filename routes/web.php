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
Route::middleware('auth')->prefix('admin')->group(function (){

    Route::get('', [\App\Http\Controllers\AdminController::class,'index'])->name('admin');
    Route::get('about', [\App\Http\Controllers\AboutController::class,'index'])->name('admin.about');

    Route::resource('users', \App\Http\Controllers\UserController::class);

});
Route::prefix('admin')->group(function (){

    Auth::routes();

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
