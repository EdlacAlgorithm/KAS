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
use Illuminate\Http\Request;

use App\Model\Shisha;
use App\Model\Category;
use App\Model\Slider;
use App\Model\Testimonial;
use Intervention\Image\Facades\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;



Route::get('test/{item?}',function($item=0,Request $request,Faker\Generator $faker){ 
	//return strpos("product/detail/you","product/detail");
	$file = UploadedFile::fake()->image('category.png', 600, 600);
	
	$file->store('categories', ['disk' => 'public']);
	dd($file);
	//return Slider::get(['status']);
});

Route::auth();

Route::get('/home',function(){ return redirect('/');});

Route::group(['namespace'=>'Frontend'],function(){
	Route::get('/','HomeController@index');
	Route::get('product/listing','ListingController@index');
    Route::get('product/detail/{shisha}','HomeController@show');
});
Route::group(['namespace'=>'Backend','middleware'=>['auth']],function(){
	//Route::delete('/shisha/{shisha}',function(Shisha $shisha){return $shisha; exit;});
	//Route::delete('/product/{shisha}',function(Shisha $shisha){return '$shisha'; exit;});
	Route::post('/slider/toggle/{slider}','SliderController@onOff');
    Route::resource('/product','ProductController');
    Route::resource('/category','CategoryController');
	Route::resource('/testimonial','TestimonialController');
	Route::resource('/slider','SliderController');
});
