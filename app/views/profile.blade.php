@extends('layouts.master')

@section('title')
@parent
:: Profile
@stop
 
@section('content')

<?php
$user = $data['user'];
$replies = $data['replies'];
$count = count($replies);

?>



<div style="padding:25px">
	<div class="row">
		<div class="col-md-2">
			<img src="http://farm3.staticflickr.com/2923/14022918660_49b3a64e26.jpg" alt="mandes" class="img-circular">
		</div>
		<div class="col-md-6">
			<h3>{{ $user->username }}</h3>
			<p>{{ $user->address }}</p>
			<p><a href="">update profile</a></p>
		</div>
		<div class="col-md-4 text-right">
			<h3>Kepoers : {{ $user->subscriber_count }}</h3>
			<h4>Jawaban : {{ $count }}</h4>
			@if ($data['flag'])
				@if (!$data['follow'])				
					<a href="follow/{{Auth::user()->id}}/{{$user->id}}"><button type="submit" class="btn btn-default">Follow</button></a>
				@else
					<h4>Followed</h4>
				@endif
			@endif
		</div>
	</div>
</div>

<!-- ask kepo -->
<div class="well"> 
	{{ Form::open(array('url' => 'profile', 'class' => 'form-horizontal')) }}

		<input type="hidden" name="user_id" value="{{ $user->id }}">
    	
		<input type="hidden" name="asker_id" value="{{ Auth::user()->id }}">
    	

    	<h4>Mau Kepoin apa?</h4>
        	<div class="form-group" style="padding:14px;">
                <textarea class="form-control" name="question_text"></textarea>
            </div>
        <div class="form-group">
		    <div class="col-sm-1">
		      	<!-- Login button -->
			    <div class="control-group">
			        <div class="controls">
			            {{ Form::submit('Kepo', array('class' => 'btn btn-success')) }}
			        </div>
			    </div>
		    </div>
		    <div class="col-sm-6">
		    	<div class="checkbox">
			        <label>
			          <input type="checkbox" name="anonim"> Tanyakan sebagai anonim
			        </label>
			    </div>
		    </div>
		</div>
    </form>
</div>
<!--tutup ask kepo-->

<br>

<div class="panel panel-default">
@foreach($replies as $reply)
<?php 
$question_id = $reply->question_id; 
$question = Question::find($question_id);
$user = User::find($question->asker_id);
?>
	<div class="panel-heading">
		<div class="row">
			@if($question->flag_id==1)
				<div class="col-md-9"><h3 class="panel-title"><a href="profile/{{$user->id}}">Kepoers : {{ $user->username }}</a></h3></div>
			@else
				<div class="col-md-9"><h3 class="panel-title">Kepoers : anonim</h3></div>
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
@stop