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
//Route::get('/', function () {
//    return view('index');
//});
//Route::resource('views/contacto', function(){
//	return view('contact');
//});
//Route::get('contact', function(){
//	return view('contacto.contact');
//});
//Route::get('layouts', function(){
//	return view('layouts.contact');
//});

Route::get('/', 'FrontController@index');
Route::get('contact', 'FrontController@contacto'); 
Route::get('nosotros', 'FrontController@nosotros'); 

//Route::get('')