<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('vue1');
});

Route::get('article/{n}', function($n) { 
    return view('article')->with('numero', $n); 
})->where('n', '[0-9]+');
*/

//Route::get('/', 'WelcomeController@index');

//Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+');

//Route::get('users', 'UsersController@getInfos');
//Route::post('users', 'UsersController@postInfos');

//Route::get('contact', 'ContactController@getForm');
//Route::post('contact', 'UsersController@postForm');

//Route::get('photo', 'PhotoController@getForm');
//Route::post('photo', 'PhotoController@postForm');

//Route::get('email', 'EmailController@getForm');
//Route::post('email', ['uses' => 'EmailController@postForm', 'as' => 'storeEmail']);

//Route::resource('user', 'UserController');
//Route::auth();

//Route::get('/home', 'HomeController@index');

Route::auth();
Route::get('/', 'HomeController@index');
Route::resource('post', 'PostController', ['except' => ['show', 'edit', 'update']]);
Route::get('post/tag/{tag}', 'PostController@indexTag');
