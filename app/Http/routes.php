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

Route::get('/', function () {
    return view('welcome');
});


	// API route
Route::group([
	    'prefix' => 'API/V1.1',
	    'namespace' => 'API\V1',
	    //'middleware' => 'oauth'
	],
    function () {
        Route::resource('complain', 'ComplainController');
    }
);


Route::get('/login',[

	'uses' => 'UserController@login',
	'as'   => 'Login',
	'middleware' => ['guest']

]);

Route::post('/postLogin',[

	'uses' => 'UserController@postLogin',
	'as'   => 'postLogin',
	'middleware' => ['guest']

]);

Route::get('/dashboard', [

	'uses' => 'UserController@dashboard',
	'as'   => 'Dashboard',
	'middleware' => ['auth']

]);