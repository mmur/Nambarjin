@extends('layout')

@section('content')
			<legend>Бүртгэлийн Хуудас</legend>
			{{ HTML::ul($errors->all(), array('class'=>'errors'))}}
			{{ Form::open(array('url' => 'register')) }}
			{{ Form::text('username', '', array('placeholder' => 'Нэвтрэх Нэр')) }}<br>
			{{ Form::text('email', '', array('placeholder' => 'Э-майл хаяг')) }}<br>
			{{ Form::password('password', array('placeholder' => 'Нууц Үг')) }}<br>
			{{ Form::submit('Бүртгүүлэх')}}
			{{ HTML::link('login', 'Болих') }}
			{{ Form::close() }}
@stop