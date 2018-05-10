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

Route::get('/', "HomeController@index");


Route::get("/single/{id}", "PagesController@single");


Route::get("/admin", "AdminController@index");


/* Admin news */
Route::get("/admin/news", "AdminNewsController@index");
Route::get("/admin/news/new", "AdminNewsController@create");
Route::post("/admin/news", "AdminNewsController@store");
Route::delete("admin/news/delete/{id}", "AdminNewsController@destroy");
