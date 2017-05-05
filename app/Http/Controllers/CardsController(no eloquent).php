<?php

namespace App\Http\Controllers;

//add DB namespace:
use DB;

use Illuminate\Http\Request;

class CardsController extends Controller
{
    //
    public function index(){

    	//quick and dirty namespace fix for DB class
    	//$cards = \DB::table('cards')->get();
    	
    	$cards = \DB::table('cards')->get();

    	return view ('cards.index', compact('cards')); //in cards dir get index view
    }
}
