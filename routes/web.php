<?php

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


Route::get('/','testingpage@frontpage');
Route::get('/contact','testingpage@contact');
Route::get('/about','testingpage@about');
Route::get('/services','testingpage@services');

Route::resource('/post','postscontroller');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
