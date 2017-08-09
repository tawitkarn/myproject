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
Route::get('/hello', function(){
  return "hello";
});
Route::get('/', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}' , 'PostController@show');

Route::get('/home', 'PostsController@index');
Route::get('/test', 'MyController@test');
Route::resource('articles','ArticlesController');
