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
//Route trang user
Route::group([
	'as' => 'user.'
], function(){
	Route::get('/home', 'HomeController@index')->name('home');

});
Route::get('/categories', 'CategoryController@index');
//show form contact
Route::get('/contact-us', 'ContactController@index')->name('form-contact');
//send mail contact
Route::post('/contact-us', 'ContactController@sendContact')->name('send-contact');

//route trang admin
Route::group([
	'middleware' => 'isAdmin',
	'namespace' => 'Admin',
	'as' => 'admin.',
	'prefix' => 'admin'
], function(){
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
