<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>
		@yield('title')
	</title>
</head>
<body>
	<h1>P3 - Paragraph and User Generators</h1>
	<p>The application produces paragraphs or random users depending on the quantity requested.
		The paragraphs are written in Latin in a text called Lorem Ipsum. It is used to divert attention 
		away from the content of a website, so that the focus is on the design and structure. The User Generator displays random users for 
		similar purposes to the Paragraph Generator.</p>
	<a href="/">Home</a>
	<a href="/paragraph">Paragraph Generator</a>
	<a href="/user">User Generator</a>
	<a href="https://github.com/michaelklimek/p3">View on GitHub</a>
	@yield('body')
</body>
</html>