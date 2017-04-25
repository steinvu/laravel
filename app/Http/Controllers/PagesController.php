<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function list2(){

    	$mylist = ['item1','item2','item3','item4'];

    	return view('pages.list2', compact('mylist')); // dot notation to find list2 view in pages dir, passing the $mylist array

    }

    public function testlayout01(){

    	return view('pages.layoutfile1'); 

    }

    public function testlayout02(){

    	return view('pages.layoutfile2'); 

    }

    public function test1(){
    	$list=['first','second','third'];
    	return view('pages.test1', compact('list')); 

    }




}
