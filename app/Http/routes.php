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


//Route::get('complain/all', 'Complain\ComplainController');

// complains route
Route::group([
		'prefix' => 'complain',
		'namespace' => 'Complain',
		//'middleware' => 'oauth'
	],
	function () {
		Route::get('all',[
			'uses' => 'ComplainController@allComplain',
			'as'   => 'all-complains'
		]);
		Route::get('inprocess',[
			'uses' => 'ComplainController@inprocessComplain',
			'as'   => 'inprocess'
		]);
		Route::get('incomplete',[
			'uses' => 'ComplainController@incompleteComplain',
			'as'   => 'incomplete'
		]);
		Route::get('completed',[
			'uses' => 'ComplainController@completedComplain',
			'as'   => 'completed'
		]);
		Route::get('find/{id}',[
			'uses' => 'ComplainController@getIndividualComplain',
			'as'   => 'individual'
		]);
		Route::patch('change',[
			'uses' => 'ComplainController@updateStatusChangeInfo',
			'as'   => 'update-status'
		]);
	}
);

// API route
Route::group([
	    'prefix' => 'API/V1.1',
	    'namespace' => 'API\V1',
	    //'middleware' => 'oauth'
	],
    function () {
        Route::get('complain/{id}', 'ComplainController@show');
		Route::post('complain/vat', 'ComplainController@vatComplain');
		Route::post('complain/general', 'ComplainController@generalComplain');
    }
);


Route::get('login',[

	'uses' => 'UserController@login',
	'as'   => 'Login',
	'middleware' => ['guest']

]);

Route::post('postLogin',[

	'uses' => 'UserController@postLogin',
	'as'   => 'postLogin',
	'middleware' => ['guest']

]);

Route::get('logout',[

	'uses' => 'UserController@logout',
	'as'   => 'Logout',
	'middleware' => ['guest']

]);

Route::get('dashboard', [

	'uses' => 'DashboardController@dashboard',
	'as'   => 'Dashboard',
	'middleware' => ['auth']

]);

Route::get('profile/{nid}',[

	'uses' => 'UserController@profile',
	'as'   => 'Profile',
	'middleware' => ['auth']
]);

Route::get('search',[

	'uses' => 'UserController@search',
	'as'   => 'Search',
	'middleware' => ['auth']
]);


