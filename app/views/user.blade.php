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
		{{ Form::text('users') }}
		{{ Form::submit('Generate') }}
	{{ Form::close() }}

@stop