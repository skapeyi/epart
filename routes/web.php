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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home','HomeController@index');
Route::get('/', 'Auth\LoginController@showLoginForm');

/*
|--------------------------------------------------------------------------
| All access pages routes
|--------------------------------------------------------------------------
*/
Route::get('/contact','PagesController@contact');
Route::get('/faq','PagesController@faq');
Route::get('/privacy','PagesController@privacy');
Route::get('/terms','PagesController@terms');


/*
|---------------------------------------------------------
| The topics controller
|---------------------------------------------------------
*/
Route::resource('topics','TopicController');
Route::get('topic/sample','TopicController@sample');

/*
|---------------------------------------------------------
| Administrator controller
|---------------------------------------------------------
*/
Route::get('/admin','AdministratorController@users');
Route::get('/admin/users', 'AdministratorController@users');
Route::get('/admin/topics', 'AdministratorController@topics');
Route::get('/admin/comments', 'AdministratorController@comments');