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
//前端群组
Route::group([],function ()
{
	Route::get('/', function () {
	    return view('frontend.index');
	});
	Route::get('/services', function () {
	    return view('frontend.services');
	});
	Route::get('/portfolio', function () {
	    return view('frontend.portfolio');
	});
	Route::get('/testimonial', function () {
	    return view('frontend.testimonial');
	});
	Route::get('/contact', function () {
	    return view('frontend.contact');
	});
});

