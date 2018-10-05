<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('api')->get('/posts/{id?}', 'PostsController@index');
Route::middleware('api')->get('/comments/{id?}', 'CommentsController@index');


/** POSTS */
Route::get('posts/add', 'PostsController@store');
Route::resource('posts/add','PostsController');

Route::get('posts/delete/{id}', 'PostsController@destroy');
Route::resource('posts/delete','PostsController');

Route::get('posts/update/{id}', 'PostsController@update');
Route::resource('posts/update','PostsController');

/** COMMENTS */
Route::get('comments/add', 'CommentsController@store');
Route::resource('comments/add','CommentsController');





Route::group(['prefix' => 'auth'], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

