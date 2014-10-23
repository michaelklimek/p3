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
Route::get('/paragraph', function()
{
	return View::make('paragraph');
});

//Display User Generator Page
Route::get('/user', function()
{
	return View::make('user');
});