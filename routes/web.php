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


Route::get('/auth/redirect', [\App\Http\Controllers\Auth\LoginController::class,'redirectToProvider']);
Route::get('/auth/callback', [\App\Http\Controllers\Auth\LoginController::class,'handleProviderCallback']);

Route::get('/logout',[\App\Http\Controllers\Auth\LoginController::class,'logout']);
Route::get('/',[\App\Http\Controllers\Auth\LoginController::class,'formLogin']);
//route for cafe
Route::get('/cafe',function (){
    return view('layout.cafe');
});
