<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::view('/', 'home')->name('home');
Route::view('about', 'about') ->name('about');
Route::View('addemployee','addemployee')->name('addemployee');
Route::get('users',[UsersController::class,'index']) ->name('users.index');
Route::get('/users/{id}',[UsersController::class,'show']) ->name('users.show');
Route::post('users',[UsersController::class,'store'])->name('users.store');
Route::delete('users/{id}',[UsersController::class,'destroy'])->name('users.destroy');
Route::put('/users/{id}',[UsersController::class,'update'])->name('users.update');