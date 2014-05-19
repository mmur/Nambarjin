@extends('layout')

@section('content')
			<legend>Нэвтрэх Хэсэг</legend>
			{{ HTML::ul($errors->all(), array('class'=>'errors'))}}
			{{ Form::open(array('url' => 'login')) }}
			{{ Form::text('email', '', array('placeholder' => 'Э-майл хаяг')) }}<br>
			{{ Form::password('password', array('placeholder' => 'Нууц Үг')) }}<br>
			{{ Form::submit('Login', array('placeholder' => 'Нэвтрэх')) }}
			{{ HTML::link('register', 'Бүртгүүлэх') }}
			{{ Form::close() }}
@stop