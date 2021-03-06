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
Route::view('/', 'welcome')->name('welcome');;
Route::view('/Legal', 'welcome');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/recipes/add', 'HomeController@index')->name('recipesAdd');
Route::get('/recipes/view', 'HomeController@index')->name('recipesView');
