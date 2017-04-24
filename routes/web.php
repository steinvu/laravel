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
    return view('welcome');
});

//svu 20170424 simple about route to view about.blade.php
Route::get('/about', function () {
    return view('about');
});

//svu 20170424 simple persons route to view persons.blade.php; passing data array to the view
Route::get('/persons', function () {

	$people_list=['Joan','Stein','Yves','Jérémie'];
	//$people_list=[];

    return view('persons', compact('people_list'));
});
