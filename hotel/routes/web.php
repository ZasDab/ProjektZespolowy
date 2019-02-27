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

Route::get('/', function(){
	return view('welcome');
});

//Route::get('/room/{id}
//', function($id));

Route::get('/room', 'PokojController@index');

Route::get('/InfoHotele', 'HotelController@InfoHotele');

Route::get('/InfoPokoje', 'HotelController@InfoPokoje');

Route::get('/Logowanie', array('uses' => 'HotelController@Logowanie'));

Route::post('/Logowanie', array('uses' => 'HotelController@doLogowanie'));

Route::get('/Rejestracja', 'HotelController@Rejestracja');

Route::get('/RezerwacjeNiezalogowany', 'HotelController@RezerwacjeNiezalogowany');

Route::get('/RezerwacjeZalogowany', 'HotelController@RezerwacjeZalogowany');

Route::get('/ZmianaHasla', 'HotelController@ZmianaHasla');

Route::get('/index', 'HotelController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
