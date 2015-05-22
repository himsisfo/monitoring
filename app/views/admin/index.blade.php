@extends('layouts.templateWTSidebar')

@section('title')
@parent
:: Home
@stop

@section('content')

  <section class="wrapper site-min-height">
  	<ul class="nav nav-pills">
  		<li><a href="{{URL::route('users')}}">User</a></li>
  		<li><a href="calendar">Calendar</a></li>
  		<li><a href="notifikasi">Notifikasi</a></li>
  	</ul>
  </section><! --/wrapper -->


@stop
