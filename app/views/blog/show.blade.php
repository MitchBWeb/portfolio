@extends('layouts.default')

@section('title')
	<title>Mitch's ePortfolio | Blog</title>
@stop

@section('content')
	<h2>{{ $blog->blog_title }}</h2>
	<p>{{ $blog->blog_content }}</p>
@stop