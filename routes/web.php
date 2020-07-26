<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/' , 'frontend\SiteController@index')->name('main');

Route::get('/result_car' , 'frontend\ResultCarController@result_page')->name('result_page');
Route::post('/result_car' , 'frontend\ResultCarController@search_result')->name('result_car');

Route::get('/result_car_by_marque' , 'frontend\ResultCarController@result_marque_page')->name('result_car_by_marque_page');
Route::post('/result_car_by_marque' , 'frontend\ResultCarController@search_by_marque')->name('result_car_by_marque');

Route::get('/result_car_by_country' , 'frontend\ResultCarController@result_country_page')->name('result_car_by_country_page');
Route::post('/result_car_by_country' , 'frontend\ResultCarController@search_by_country')->name('result_car_by_country');

Route::get('/country/{country}' , 'frontend\ResultCarController@result_country_page')->name('cat_car_by_country_page');
Route::post('/country' , 'frontend\ResultCarController@search_by_country')->name('cat_car_by_country');

Route::get('/city/{city}' , 'frontend\ResultCarController@result_city_page')->name('cat_car_by_city_page');
Route::post('/city' , 'frontend\ResultCarController@search_by_city')->name('cat_car_by_city');

// search route
Route::get('/search' , 'frontend\ResultCarController@search')->name('search');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
