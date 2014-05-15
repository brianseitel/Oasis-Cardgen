<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/cards', function() {
	$characters = Card::where('type', '=', 'character')->get();
	$actions    = Card::where('type', '=', 'action')->get();
	$proofs     = Card::where('type', 'LIKE', '%proof%')->get();

	return View::make('cards')->with('characters', $characters)->with('actions', $actions)->with('proofs', $proofs);
});