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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/admin' , 'backend\AdminController@index');

Auth::routes();

Route::middleware(['auth','admin'])->group(function (){

    Route::prefix('admin')->group(function () {
        Route::get('/' , 'frontend\SiteController@home')->name('admin');
        Route::resource('/cars' , 'backend\CarInfosController');
        Route::resource('/country' , 'backend\CountryController');
        Route::resource('/region' , 'backend\RegionController');
        Route::resource('/marque' , 'backend\MarqueController');
        Route::get('/users' , 'backend\UsersController@index')->name('users.index');
        Route::get('/users/{user}/profile' , 'backend\UsersController@profile')->name('users.profile');
        Route::get('/users/{user}/edit' , 'backend\UsersController@edit')->name('users.edit');
        Route::post('/users/{user}/update' , 'backend\UsersController@update')->name('users.update');
        Route::post('/users/{user}/make-admin' , 'backend\UsersController@makeAdmin')->name('users.make-admin');
    });

});




