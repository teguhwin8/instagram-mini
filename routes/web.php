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

Auth::routes(['verify' => true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/search', 'HomeController@search');
Route::get('/upload', 'HomeController@upload');
Route::get('/shop', 'HomeController@shop');
Route::get('/notification', 'HomeController@notification');
Route::get('/message', 'HomeController@message');

Route::get('/{username}', 'UserController@show');
