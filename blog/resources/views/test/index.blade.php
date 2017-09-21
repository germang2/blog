<!DOCTYPE html>
<html>
<head>
	<title>{{ $article->title }}</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
</head>
<body>
	<h2>Article</h2>
	<br><br>
	<hr>
	<p>{{ $article->content }}</p>
	<hr>
	{{ $article->user->name }} | {{ $article->category->name }}

	@foreach($article->tags as $tag)
		{{ $tag->tag }}
	@endforeach
</body>
</html>