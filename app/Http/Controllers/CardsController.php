<?php

namespace App\Http\Controllers;

//add App Card namespace:
use App\Card;

use Illuminate\Http\Request;

class CardsController extends Controller
{
    //
    public function index(){


    	$cards = Card::all();

    	return view ('cards.index', compact('cards')); //in cards dir get index view
    }

    public function show($id){


    	$card = Card::find($id);	//find expects the id of the row you want

    	//return $card; //if you return a record straight from controller without a view it will display in JSON

    	return view ('cards.show', compact('card')); //load view show and pass card
    }

    public function show2(Card $card){


    //	$card = Card::find($id);	//find expects the id of the row you want

    	return $card; //if you return a record straight from controller without a view it will display in JSON

   // 	return view ('cards.show', compact('card')); //load view show and pass card
    }

}
