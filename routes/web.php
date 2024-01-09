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
|a
*/

Auth::routes();

Route::get('/', "BerandaController@home")->name("home");
Route::get('/about', "BerandaController@about")->name("about");
Route::get('/pricing', "BerandaController@pricing")->name("pricing");
Route::get('/contact', "BerandaController@contact")->name("contact");

Route::get('/home', 'HomeController@index')->name('home');
