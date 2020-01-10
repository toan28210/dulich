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
    return view('auth.login');
});

Route::group(['prefix'=> 'admin'],function(){
    Route::get('/',function(){
        return view('admin.pages.index');
    });
    Route::resource('tour','TourController');
    Route::resource('hotel','HotelController');
    Route::resource('diadiem','DiadiemController');
    Route::resource('customer','CustomerController');
    Route::get('deltour/{id}','TourController@destroy');
    Route::get('uptour/{id}','TourController@edit');
    Route::post('updtour/{id}','TourController@update');
    Route::get('delhotel/{id}','HotelController@destroy');
    Route::get('uphotel/{id}','HotelController@edit');
    Route::post('updhotel/{id}','HotelController@update');
    Route::get('deldd/{id}','DiadiemController@destroy');
    Route::get('updatedd/{id}','DiadiemController@edit');
    Route::post('updd/{id}','DiadiemController@update');
});

Route::group(['prefix'=> 'client'],function(){
    Route::get('/','HomePageController@getIndex');
    Route::get('chitiet/{id}','HomePageController@getDetail');
    Route::post('dem','HomePageController@dem');
    Route::post('comment','BinhluanController@comment');
    Route::get('hotel','HomePageController@hotel');
    Route::get('tour','HomePageController@tour');
    Route::get('search','HomePageController@getSearch');
    Route::get('searchtour','HomePageController@getSearchTour');
    Route::get('seahotel','HomePageController@getSearchHotel');
    Route::get('contact','HomePageController@getcontact');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
