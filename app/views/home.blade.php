@extends('layouts.master')

@section('title')
@parent
:: Home
@stop


@section('content')
<h1>Welcome To Kepoers!</h1>
<p>Jangan takut kepo! malu kepo sesat di jalan.</p>

@if(!Auth::guest())
<?php
	$replies = $data['replies'];
?>
<div class="row"> 
	<a href="#" class="btn btn-lg btn-block btn-success" data-toggle="modal" data-target="#kepoModal">Mulai Kepo</a>
</div>
<div class="panel panel-default">
@foreach($replies as $reply)
	<?php 
		$question = $reply->question; 
		$asker = User::find($question->asker_id);
		$user = User::find($question->user_id);
		if($question->flag_id==2){
			$user->username="anonim";
		}
	?>


	<div class="panel-heading">
		<div class="row">
			@if($user->username!="anonim")
				<div class="col-md-9"><h3 class="panel-title"><a href="profile/{{$user->id}}">{{$user->username}}</a> <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> <a href="profile/{{$asker->id}}">{{$asker->username}}</a></h3></div>
			@else
				<div class="col-md-9"><h3 class="panel-title">{{$user->username}} <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> <a href="profile/{{$asker->id}}">{{$asker->username}}</a></h3></div>
			@endif
			<div class="col-md-3 text-right">{{ $question->updated_at }}</div>
		</div>
		
	</div>
	<div class="panel-body">
		<div class="row text-center">
			<div class="col-md-6 text-right">
				<div class="panel-heading">
		          <h4 class="panel-title">Pertanyaan</h4>
		        </div>
				{{ $question->question }}
			</div>
			<div class="col-md-6 text-left" style="color : red">
				<div class="panel-heading">
		          <h4 class="panel-title">Jawaban</h4>
		        </div>
				{{ $reply->reply }}
			</div>
		</div>
	</div>
@endforeach
</div>
@endif

	<div class="modal fade" id="kepoModal" tabindex="-1" role="form" aria-labelledby="kepoModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Ajukan Pertanyaan</h4>
          </div>
          <div class="modal-body">
            {{ Form::open(array('url' => 'addquest', 'class' => 'form-horizontal')) }}
            	 <div class="form-group">
            	 		<label class="control-label col-md-1" for="user"></label>
	                    <div class="col-md-10 input-group">
	                    	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                    	<input type="text" class="form-control" id="user" name="user" placeholder="User"/>
	                    </div>
					
                </div>
                <div class="form-group">
                	<label class="control-label col-md-1" for="user"></label>
                	<div class="col-md-10 input-group">
                		<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                   		<textarea class="form-control" rows="6" name="question_text"></textarea>
                	</div>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-success">Kepo</button>
          </div>
        </div>
      </div>
    </div>

@stop