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
Route::get('about', function () {
    return view('about');
});

//svu 20170424 persons route to view persons.blade.php; passing data array to the view via "compact"
Route::get('persons', function () {

	$people_list=['Joan','Stein','Yves','Jérémie'];
	//$people_list=[];

    return view('persons', compact('people_list'));
});

//svu 20170424 persons2 route to view persons2.blade.php; passing data array to the view via "with"
Route::get('persons2', function () {

	$people_list=['Joan2','Stein2','Yves2','Jérémie2'];
	//$people_list=[];

    return view('persons2')->with('people',$people_list);	//with notation instead of compact
});


//svu 20170424 list route to view list.blade.php in /views/pages/
Route::get('list', function () {

    return view('pages.list'); // dot notation to find list view in pages dir
});

//svu 20170424 list2 route to PagesController controller using method 'list2'
Route::get('list2', 'PagesController@list2');


//svu 20170424 
Route::get('layouttest1', 'PagesController@testlayout01');

//svu 20170424 
Route::get('layouttest2', 'PagesController@testlayout02');


//svu 20170424 
Route::get('testpage1', 'PagesController@test1');
