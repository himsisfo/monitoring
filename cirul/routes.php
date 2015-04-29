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
// Secure-Routes
Route::group(array('before' => 'auth'), function()
{
	Route::get('','SiteController@welcome');
	Route::get('logout', 'SiteController@getLogout');

	Route::get('korwil', 'SiteController@showKorwil');
	//Route::get('korwil?name={q}', 'SiteController@searchKorwil');
	Route::get('kortim', 'SiteController@showKortim');
	Route::get('dosen', 'SiteController@showDosen');

	//route untuk progress
	Route::get('listing','ProgressController@showListing');
	Route::get('pencacahan','ProgressController@showPencacahan');

	//route untuk show profile
	Route::get('profile={id}','SiteController@showProfile');
	Route::get('profile','SiteController@showMyProfile');	
	Route::post('profile','SiteController@updateProfile');
	

	//game
	Route::get('game','GameController@showGame');
});


// Authentication
Route::get('login', array('as' => 'login', 'uses' => 'SiteController@showLogin'));
Route::post('login', 'SiteController@postLogin');

Route::get('register', array('as' => 'register', 'uses' => 'SiteController@showRegister'));
Route::post('register', 'SiteController@postRegister');

Route::get('progres', array('as' => 'progres', 'uses' => 'ProgressController@getProgress'));


