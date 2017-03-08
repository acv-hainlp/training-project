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

Route::get('/', 'PostsController@index')->name('home');
Route::get('home', 'PostsController@index')->name('home');

Route::get('/register','RegisterController@create');
Route::post('/register','RegisterController@store');

Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy');

//post controller

Route::get('/posts','PostsController@index');
Route::get('/posts/create','PostsController@create');
Route::post('/posts/create','PostsController@store');

Route::get('/posts/{id}','PostsController@show');
Route::post('/posts/{id}/edit','PostsController@update');
Route::get('/posts/{id}/delete','PostsController@destroy');

//Comment Controller

Route::post('/comments/create','CommentsController@store');
Route::get('/comments/{id}/delete','CommentsController@destroy');

//admin Controller
Route::get('/admin','AdminController@index');

Route::get('/admin/users','AdminController@users');
Route::get('/admin/usersdata','AdminController@usersData');

Route::get('/admin/posts','AdminController@posts');
Route::get('/admin/postsdata','AdminController@postsData');

Route::get('/admin/comments','AdminController@comments');
Route::get('/admin/commentsdata','AdminController@commentsData');



