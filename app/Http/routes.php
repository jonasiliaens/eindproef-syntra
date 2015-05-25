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

Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');

Route::get('/trainingen', 'PagesController@trainingen');
Route::get('/trainingen/kidz-mix', 'ClassesController@kidzmix');
Route::get('/trainingen/condition', 'ClassesController@condition');
Route::get('/trainingen/muaythai', 'ClassesController@muaythai');
Route::get('/trainingen/techniek', 'ClassesController@techniek');
Route::get('/trainingen/privétraining', 'ClassesController@privetraining');

Route::get('/about-us', 'PagesController@about');
Route::get('/about-us/bio-tim', 'PagesController@biotim');
Route::get('/about-us/bio-wim', 'PagesController@biowim');

Route::get('/contact', 'PagesController@contact');
Route::post('/contact', 'PagesController@processcontact');

Route::get('/admin', 'PagesController@admin');

Route::get('producten/delete/{id}', 'ProductsController@delete');
Route::resource('producten', 'ProductsController');

Route::resource('profiel', 'ProfileController');

Route::get('/winkelmandje', 'WinkelmandController@basket');

Route::get('/test', function()
{
	$image = Image::make(file_get_contents('http://bloemennederland.nl/wp-content/uploads/2009/10/Waterlelie.jpg'));

	$image->widen(400);

	return $image->response();
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);