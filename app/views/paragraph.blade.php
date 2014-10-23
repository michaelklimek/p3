@extends('_master')

@section('title')
	Paragraph Generator
@stop

@section('body')
	<h1>Paragraph Generator</h1>
	<p>Select how many paragraphs you would like to generate</p>
	{{ Form::open(array(
		'url' => 'paragraph',
		'method' => 'GET')) }}
		{{ Form::label('number_paragraph', 'Number of Paragraphs to Generate (Max 99): ') }}
		{{ Form::text('paragraphs') }}
		{{ Form::submit('Generate') }}
	{{ Form::close() }}
@stop