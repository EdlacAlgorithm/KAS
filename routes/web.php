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

Route::auth();

Route::get('/home',function(){ return redirect('/');});

Route::group(['namespace'=>'Frontend'],function(){
	Route::get('/','HomeController@index');
	Route::get('product/listing','ListingController@index');
    Route::get('product/detail/{shisha}','HomeController@show');
});

Route::group(['namespace'=>'Backend','middleware'=>['auth']],function(){
	Route::get('/dashboard','DashboardController@index')->name('dashboard');
	Route::post('/slider/toggle/{slider}','SliderController@onOff');
    Route::resource('/product','ProductController');
    Route::resource('/category','CategoryController');
	Route::resource('/testimonial','TestimonialController');
	Route::resource('/slider','SliderController');
});
