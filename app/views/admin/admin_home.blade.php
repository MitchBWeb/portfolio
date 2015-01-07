@extends('layouts.default')

@section('title')
	<title>Mitch's ePortfolio | Blog</title>
@stop

@section('content')
	<h2>Admin</h2>
	{{ Form::open() }}
		<div>
			{{ Form::label('email','Email:') }}
			{{ Form::text('email') }}
			{{ $errors->first('email', '<span class="error">:message</span>') }}
		</div>
		<div>
			{{ Form::label('password','Password:') }}
			{{ Form::text('password') }}
			{{ $errors->first('password', '<span class="error">:message</span>') }}
		</div>
		<div>
			{{ Form::submit('Login') }}
		</div>
	{{ Form::close() }}
@stop