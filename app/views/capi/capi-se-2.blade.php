@extends('layouts.template')

@section('title')
@parent
:: Home
@stop

@section('styles')
.inputleft{
  margin-left:995px;
}

.inputleft-2{
  margin-left:1043px;
}

.inputleft-3{
  margin-left:962px;
}

.inputleft-4{
  margin-left:928px;
}

.inputleft-7{
  margin-left:425px;
}

.inputright-7{
  margin-left:838px;
}

.inputleft-nama{
  margin-left:323px;
}

.inputleft-nama-2{
  margin-left:736px;
}


.boxkues-1{
  width:68px;
  height:36px; 
}


.boxkues-2{
  width:34px;
  height:36px; 
}

.boxkues-3{
  width:102px;
  height:36px; 
}

.boxkues-4{
  width:136px;
  height:36px; 
}

.boxkues-7{
  width:238px;
  height:36px; 
}


.boxkues-nama-2{
  width:340px;
  height:36px; 
}

input{
  font-size:20px;
  color:red;
  text-align:right;
}
@stop 


@section('content')

<?php
  $url=URL::current();
  $urlsplit = explode("=",$url);
  $urlcurrent = $urlsplit[0];
  $page = (int)$urlsplit[1];

?>



<section id="main-content">
  <section class="wrapper site-min-height">
    <div class="container">
     <div class="row">
      
      <div class="col-md-12">
         

       <div style="position:absolute">
        <!-- left -->
        <input style="margin-top:128px" class="inputleft-nama boxkues-nama-2" type="text" value="{{$data['b2r1s1']}}" disabled>
        <br>
        <input style="margin-top:2px" class="inputleft-7 boxkues-7" type="text" value="{{$data['b2r2s1']}}" disabled>
        <br>
        <input style="margin-top:6px" class="inputleft-nama boxkues-nama-2" type="text" value="{{$data['b2r3s1']}}" disabled>
        <br>
       </div>

        <div  style="clear:both;position:absolute">

          <input style="margin-top:128px" class="inputleft-nama-2 boxkues-nama-2" type="text" value="{{$data['b2r1s2']}}">
          <br>
          <input style="margin-top:2px" class="inputright-7 boxkues-7" type="text" value="{{$data['b2r2s2']}}">
          <br>
          <input style="margin-top:6px" class="inputleft-nama-2 boxkues-nama-2" type="text" value="{{$data['b2r3s2']}}">
          <br>
          <input style="margin-top:147px" class="inputleft-2 boxkues-2" type="text" value="{{$data['b2r5']}}">
          <br>
        </div>

       <img src="assets/img/kues-se/1-2.png" style="width:1100px"></img>

       <br>
       @if($data['b2r5']==1)
        <div class="span4 offset4 text-center"> 
          <a href="{{$urlcurrent.'='.($page-1)}}"><button class="btn">before</button></a>

          <a href="{{$urlcurrent.'='.($page+1)}}"><button class="btn">next</button></a>
         </div>
       @else
         <div class="span4 offset4 text-center"> 
          <a href="{{$urlcurrent.'='.($page-1)}}"><button class="btn">before</button></a>

          <a href="{{$urlcurrent.'=11'}}"><button class="btn">CATATAN</button></a>
         </div>
       @endif
         
      
      </div>
     </div>
    </div>
  </section>
</section>
@stop

