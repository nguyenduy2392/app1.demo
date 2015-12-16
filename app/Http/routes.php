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

Route::get('home', 'PicturesController@index');

Route::get('/', 'Auth\AuthController@getLogin');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('/auth/login', ['uses' => 'Auth\AuthController@getLogin']);

Route::get('/auth/register', ['uses' => 'Auth\AuthController@getLogin']);

Route::post('/upload', ['uses' => 'ImagesController@upload']);
/*--picture--*/
Route::get('/make-new-picture', ['uses' => 'PicturesController@newUpload']);

/*--user--*/
Route::get('/user/{id}', ['uses' => 'UsersController@allPictures']);