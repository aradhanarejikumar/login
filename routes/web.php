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

Route::get('/',[App\Http\Controllers\LoginController::class,'home'])->name('home');
Route::get('/register',[App\Http\Controllers\LoginController::class,'register'])->name('register');
Route::post('/register',[App\Http\Controllers\LoginController::class,'reg'])->name('reg');

Route::get('/login',[App\Http\Controllers\LoginController::class,'login'])->name('login');
Route::post('/login',[App\Http\Controllers\LoginController::class,'submithome'])->name('submithome');

Route::group(['middleware' =>['auth']],function(){
Route::group(['prefix' =>'dashboard','as'=>'dashboard.'],function(){
Route::get('/',[App\Http\Controllers\Dashboard\DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/logout',[App\Http\Controllers\Dashboard\DashboardController::class,'logout'])->name('logout');

    });
});
