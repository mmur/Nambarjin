@extends('layout')

@section('content')
			<legend>Please Register</legend>
			{{ HTML::ul($errors->all(), array('class'=>'errors'))}}
			{{ Form::open(array('url' => 'register')) }}
			{{ Form::text('username', '', array('placeholder' => 'Username')) }}<br>
			{{ Form::text('email', '', array('placeholder' => 'Email')) }}<br>
			{{ Form::password('password', array('placeholder' => 'Password')) }}<br>
			{{ Form::submit('Register')}}
			{{ Form::close() }}
@stop