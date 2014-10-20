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

Route::get('/', function() 
{
	return 'Developers Best Friend';
});

Route::post('/paragraph', function()
{
	return 'Paragraph Generator';
});

Route::get('/paragraph/result', function() 
{
	return 'Paragraph Results';
});

Route::post('/user', function()
{
	return 'User Generator';
});

Route::get('/user/result', function()
{
	return 'User Results';
});