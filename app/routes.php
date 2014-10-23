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


Route::get('/', function()
{
	return View::make('hello');
});

*/
// Display Main Page
Route::get('/', function() 
{
	return View::make('_master');
});

// Display Paragraph Generator Page
Route::get('/paragraph/{number?}', function($number = null)
{
	if ($number == null) {
		return 'You must input a number from 1 to 99.';
	} elseif ($number >= 1 && <= 99) {
		return View::make('paragraph');
	} else {
		return 'Only numbers between 1 to 99 are accepted.';
	}
});

//Display results from paragraph form
Route::get('/paragraph/result', function() 
{
	return 'Paragraph Results';
});

//Display User Generator Page
Route::get('/user', function()
{
	return View::make('user');
});

//Display results from user form
Route::get('/user/result', function()
{
	return 'User Results';
});