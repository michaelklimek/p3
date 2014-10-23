@extends('_master')

@section('title')
	User Generator
@stop

@section('body')
	<h1>User Generator</h1>
	<p>Select how many users you would like to generate</p>
	{{ Form::open(array(
		'url' => 'user',
		'method' => 'GET')) }}
		{{ Form::label('number_user', 'Number of Users to Generate (Max 99): ') }}
		{{ Form::number('users', '', array('min' => '1', 'max' => 99)) }}
		{{ Form::submit('Generate') }}
	{{ Form::close() }}

<?php
	require_once '/path/to/Faker/src/autoload.php';
	$query = Input::get('users');

	for ($i=0; $i < $query; $i++) {
 		echo $faker->name, "\n";
	}
?>

@stop