@extends('layouts.default')

@section('title')
	<title>Mitch's ePortfolio | Blog</title>
@stop

@section('content')
	<div id="blog-holder">
		<h2>Blog</h2>
		<div id="article-holder">
			@foreach($blogs as $blog)
				<div class="blog-info">
					<h3>{{ link_to("/blog/{$blog->blog_title}", $blog->blog_title) }}</h3>
					<p style="margin-top:0;">{{ $blog->blog_desc }}</p>
					<p style="margin-top:0;">{{ $blog->date_published }}</p>
				</div>
			@endforeach
		</div>
	</div>
@stop