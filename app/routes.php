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
	return 'Developers Best Friend';
});

// Display Paragraph Generator Page
Route::post('/paragraph', function()
{
	return 'Paragraph Generator';
});

//Display results from paragraph form
Route::get('/paragraph/result', function() 
{
	return 'Paragraph Results';
});

//Display User Generator Page
Route::post('/user', function()
{
	return 'User Generator';
});

//Display results from user form
Route::get('/user/result', function()
{
	return 'User Results';
});