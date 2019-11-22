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

Route::get('/', "homeController@home");

Route::get('/kitchens', "kitchensController@kitchens");

Route::get('/living', "livingController@living");

Route::get('/project-at-s-house', "projectatshouseController@projectatshouse");

Route::get('/kitchen-detail', "projectatshouseController@projectatshouse");

Route::get('/book', "bookController@book");
