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

Route::get('/', 'PagesController@index');
Route::get('/home','HomeController@index');
Route::get('/dashboard', 'HomeController@dashboard')->middleware('auth');
Auth::routes();

#Route::get('/', 'Auth\LoginController@showLoginForm');

/*
|--------------------------------------------------------------------------
| All access pages routes
|--------------------------------------------------------------------------
*/

Route::get('/contact','PagesController@contact');
Route::get('/faq','PagesController@faq');
Route::get('/privacy','PagesController@privacy');
Route::get('/terms','PagesController@terms');
Route::get('/sample','PagesController@sample');
Route::get('/sms-participation','PagesController@smsparticipation');


/*
|---------------------------------------------------------
| The Discussion controller
|---------------------------------------------------------
*/
Route::resource('discussions','DiscussionController');
Route::get('discussions/sample','DiscussionController@sample');

/*
|---------------------------------------------------------
| The Information controller
|---------------------------------------------------------
*/

Route::resource('information','InformationController');


/*
|---------------------------------------------------------
| Administrator controller
|---------------------------------------------------------
*/
Route::get('/admin','AdministratorController@users');
Route::get('/admin/users', 'AdministratorController@users');
Route::get('/admin/discussions', 'AdministratorController@discussions');
Route::get('/admin/information', 'AdministratorController@information');
Route::get('/admin/sms','AdministratorController@sms');


/*
|---------------------------------------------------------
| The Comment controller
|---------------------------------------------------------
*/

Route::resource('comment','CommentController');


/*
|---------------------------------------------------------
| The Radio routes
|---------------------------------------------------------
*/

Route::get('/radiotopics','RadioController@radioTopics')->middleware('auth');
Route::get('/addradiotopic','RadioController@addRadiotopic')->middleware('auth');
Route::get('radiotopics/{id}','RadioController@retrieveRadiotopic')->middleware('auth');
Route::post('/radiotopics','RadioController@storeRadiotopic')->middleware('auth');;
Route::post('/radiotopicresponse','RadioController@storeRadioresponse')->middleware('auth');

/*
|---------------------------------------------------------
| Africa's talking
|---------------------------------------------------------
*/
Route::resource('sms','SmsController');
Route::post('/retrieve_shortcode_messages','SmsController@store');

/*
|---------------------------------------------------------
| Social media controller
|---------------------------------------------------------
*/
Route::get('/social-media','SocialmediaController@index');
