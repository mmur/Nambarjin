@extends('layout')

@section('content')
			<legend>Login</legend>
			{{ HTML::ul($errors->all(), array('class'=>'errors'))}}
			{{ Form::open(array('url' => 'login')) }}
			{{ Form::text('email', '', array('placeholder' => 'Email')) }}<br>
			{{ Form::password('password', array('placeholder' => 'Password')) }}<br>
			{{ Form::submit('Login') }}
			{{ HTML::link('register', 'Register') }}
			{{ Form::close() }}
@stop