<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	@section('head')
	<link rel="stylesheet" href="css/style.css"/>
	@show
	<title>
		@yield('title')
	</title>
</head>
<body>
	<div class="title">
	<h1>P3 - Paragraph and User Generators</h1>
	<h4>The application produces paragraphs or random users depending on the quantity requested.
		The paragraphs are written in Latin in a text called Lorem Ipsum. It is used to divert attention 
		away from the content of a website, so that the focus is on the design and structure. The User Generator displays random users for 
		similar purposes to the Paragraph Generator.</h4>
	</div>
	<div class="menu">
		<a href="/" class="home">Homepage</a>
		<a href="/paragraph" class="para">Paragraph Generator</a>
		<a href="/user" class="user">User Generator</a>
		<a href="https://github.com/michaelklimek/p3" class="git">View on GitHub</a>
	</div>
	<div class="content">
		@yield('body')
	</div>
</body>
</html>