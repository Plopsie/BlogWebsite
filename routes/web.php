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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test', function(){
    return view('test');
});

Route::get('/profile', function(){
    return view('profile', [
      'posts' => App\Post::take(3)->latest()->get()
    ]);
});
Route::get('/comments/create', 'CommentController@create');
Route::post('/comments','CommentController@store');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts','PostController@store');
Route::get('/posts/{post}','PostController@show');
Route::get('/posts', 'PostController@index');
Route::get('/posts/{post}/edit','PostController@edit');
Route::put('/posts/{post}', 'PostController@update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
