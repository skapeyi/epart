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

#Route::get('/', function () {
#    return view('welcome');
#});



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


/*
|---------------------------------------------------------
| The Comment controller
|---------------------------------------------------------
*/

Route::resource('comment','CommentController');