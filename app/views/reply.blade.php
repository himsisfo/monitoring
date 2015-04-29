@extends('layouts.master')

@section('title')
@parent
:: Daftar Kepo
@stop


@section('content')

<div class="panel panel-default">
  
  <div class="panel-body">
  	<div class="row">
    	<div class="col-md-6 text-right">
        <div class="panel-heading">
          <h3 class="panel-title">Pertanyaan</h3>
        </div>
        <div class="text-right">
      		<p><b>{{ $quest->question }}</b></p>
      		<p><i>tanggal : {{$quest->created_at}}</i></p>
        </div>
    	</div>
      <div class="col-md-6">
        <div class="panel-heading">
          <h3 class="panel-title">Jawaban</h3>
        </div>
        {{ Form::open(array('url' => 'questans', 'class' => 'form-horizontal')) }}
          <input type="hidden" name="question_id" value="{{ $quest->id }}">
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
      
          <div class="control-group">
            <div class="controls">
              <textarea class="form-control" name="answer"></textarea>
            </div>
          </div>
          <br>
          {{ Form::submit('Jawab', array('class' => 'btn btn-success')) }}
              
        </form>
      </div>
  	</div>
  </div>
</div>
@stop
