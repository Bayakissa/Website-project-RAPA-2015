<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', 'HomeController@showWelcome');
Route::get('/', 'RobotController@Robot');
Route::when( '*', 'csrf', array( 'post' ) );

// Login / Inscription / Contact
Route::controller('auth', 'AuthController');

Route::get('login', array('as' => 'login', 'uses' => 'AuthController@showLogin'));
Route::post('login', array('uses' => 'AuthController@postLogin'));

Route::get('inscription', array('as' => 'inscription', 'uses' => 'AuthController@getInscription'));
Route::post('inscription', 'AuthController@postInscription');

Route::get('comment', array('as' => 'comment', 'uses' => 'AuthController@getComment'));
Route::post('comment', 'AuthController@postComment');

Route::get('contact', array('as' => 'contact', 'uses' => 'AuthController@getContact'));


// Secure-Routes
Route::group(array('before' => 'auth'), function()
{
    Route::get('secret', 'HomeController@showSecret');
});


Route::resource('auth/inscription', 'AuthController',
                array('only' => array('index', 'show')));



Route::group(array('before' => 'auth'), function()
{
	Route::get('logout', 'HomeController@doLogout');

});

Route::filter('auth', function()
{
    if (Auth::guest()) return Redirect::guest('login');
}); 


