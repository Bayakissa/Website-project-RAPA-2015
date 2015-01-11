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

// Connexion 
Route::controller('auth', 'AuthController');

Route::get('login', array('as' => 'login', 'uses' => 'AuthController@showLogin'));
Route::post('login', array('uses' => 'AuthController@postLogin'));

// Inscription 
Route::get('inscription', array('as' => 'inscription', 'uses' => 'AuthController@getInscription'));
Route::post('inscription', 'AuthController@postInscription');

// Livre d'or
Route::get('comment', array('as' => 'comment', 'uses' => 'AuthController@getComment'));
//Route::post('comment', 'AuthController@postComment');
Route::post('comment', array('uses' => 'AuthController@postComment'));

// Contact
Route::get('contact', array('as' => 'contact', 'uses' => 'AuthController@getContact'));
    Route::get('logout', 'HomeController@doLogout');



