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

Route::get('/', 'PageController@home')->name('pages.home');

Route::get('/posts', 'PostController@index')->name('post.index');

Route::get('/news', 'NewsController@index')->name('news.index');

Route::get('/soft', 'SoftController@index')->name('soft.index');

Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::post('/answers', 'AnswerController@store')->name('answers.store');
});

Auth::routes();
