@extends('layouts.master')

@section('title')
@parent
:: Daftar Kepo
@stop



@section('content')


<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Daftar Pertanyaan Kepo untuk kamu</h3>
  </div>
@if(count($question))
@foreach($question as $quest)
  <div class="panel-body">
  	<div class="row">
    	<div class="col-md-10">
    		<p><b>{{ $quest->question }}</b></p>
    		<p><i>tanggal : {{$quest->created_at}}</i></p>
    	</div>
    	<div class="col-md-2 text-right">

    		<a href="questans/{{$quest->id}}"><span class="glyphicon glyphicon-ok" style="vertical-align:middle"></span></a>
    		<a href="#" onClick="show_confirm('delete','{{$quest->id}}')"><span class="glyphicon glyphicon-remove" style="vertical-align:middle"></span></a>
    	</div>
  	</div>
  </div>
@endforeach
@else
  <p class="text-center">Saat ini, tidak ada yang berminat kepoin kamu.</p>
@endif
</div>




@stop
