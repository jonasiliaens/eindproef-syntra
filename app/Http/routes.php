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

Route::get('gebruiker/delete/{id}', 'UsersController@delete');
Route::resource('gebruikers', 'UsersController');

Route::get('producten/delete/{id}', 'ProductsController@delete');
Route::get('productlist', 'ProductsController@productlist');
Route::resource('producten', 'ProductsController');

Route::get('specifications', 'ProductsController@specifications');
Route::get('specifications/{id}', 'ProductsController@specifications');

Route::resource('profiel', 'ProfileController');

Route::get('/bestellingen', 'OrdersController@orders');

Route::get('/winkelmandje', 'OrdersController@shoppingcart');
Route::get('/winkelmandje/add/{id}', 'OrdersController@addToShoppingcart');
Route::get('/winkelmandje/delete/all', 'OrdersController@deleteAllFromShoppingcart');
Route::get('/winkelmandje/delete/{id}', 'OrdersController@deleteFromShoppingcart');
Route::post('bestellingfinaliseren', 'OrdersController@finalizeOrder');
Route::get('/terugnaarwinkelmandje/{id}', 'OrdersController@backToShoppingcart');
Route::get('/betalingbevestigen/{id}', 'OrdersController@confirmPay');
Route::get('/bestellingbetalen/{id}', 'OrdersController@payOrder');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);