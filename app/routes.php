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


	Route::get('korlap', 'SiteController@showKorlap');

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
	
	//show problems
        Route::get('problems','SiteController@showProblems');	

	//capi
	Route::get('capi-se','CapiController@showListCapiSE');
	Route::get('capi-se-{nks}={page}','CapiController@showCapiSE');
	        Route::get('capi-sk','CapiController@showListCapiSK');
        Route::get('capi-sk-{nks}={page}','CapiController@showCapiSK');
        Route::post('capi-sk-submit','CapiController@submitCapiSK');


	Route::get('tabulasi-se','SiteController@indexTabulasi');
	Route::get('tabulasi-sk','SiteController@tabulasiSK');

	//progress
	Route::get('progres', array('as' => 'progres', 'uses' => 'ProgressController@getProgress'));

	//changepassword
	Route::get('password/change','PasswordController@getChangePassword');
	Route::post('password/change','PasswordController@postChangePassword');


});


// admin routes
Route::group(array('prefix' => 'admin', 'before' => array('auth|admin')), function()
{
	// admin routes here...
	Route::get('/','AdminController@showDashboard');

	Route::get('calendar','AdminController@getCalendar');
	Route::get('user',array('as'=>'users', 'uses'=>'AdminController@getUser'));

	Route::get('logout', 'SiteController@getLogout');

	Route::get('api/users', array('as'=>'api.users', 'uses'=>'AdminController@getDatatable'));
});



// Authentication
Route::get('login', array('as' => 'login', 'uses' => 'SiteController@showLogin'));
Route::post('login', 'SiteController@postLogin');

Route::get('register', array('as' => 'register', 'uses' => 'SiteController@showRegister'));
Route::post('register', 'SiteController@postRegister');

//password recovery
Route::post('forgot','RemindersController@postRemind');
Route::get('forgot','RemindersController@getRemind');

//Reset Password Get Controller
Route::get('password/reset/{hash}', array(
    'uses' => 'RemindersController@getReset',
    'as' => 'password.reset',
));

//Reset Password Post Controller
Route::post('password/reset/', [
        'as' => 'password/reset',
        'uses' => 'RemindersController@postReset'
]);


Route::get('mail',function(){
	Mail::send('mail/welcome', array('username'=>Input::get('username')), function($message){
                $message->to('12.7012@stis.ac.id', 'thosan')->subject('Welcome to WEB Monitoring PKL54!');
            });
});