@extends('layouts.template')

@section('title')
@parent
:: Home
@stop

@section('styles')
.bgimage {
background-image: url('assets/img/kues-se/1.png') no-repeat center center fixed;
background-size:100% auto;
}

.bgimage-inside {
padding-top: 37.36%; /* this is actually (426/1140)*100 */
}

.inputleft{
  margin-left:995px;
}

.inputleft-2{
  margin-left:1030px;
}

.inputleft-3{
  margin-left:962px;
}

.inputleft-4{
  margin-left:928px;
}

.inputleft-nama{
  margin-left:420px;
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


.boxkues-nama{
  width:643px;
  height:36px; 
}

input{
  font-size:20px;
  color:red;
  text-align:right;
}

@stop


<?php
  if(!isset($data)){
    $data=array();
  }
?>

@section('content')
<section id="main-content">
  <section class="wrapper site-min-height">
    <div class="container">
     <div class="row">
      <div class="col-md-12">

         <div style="position:absolute">
          <!-- left -->
          <input style="margin-top:317px" class="inputleft boxkues-1" type="text" value="{{$data->b1r1}}" disabled>
          <br>
          <input style="margin-top:8px" class="inputleft boxkues-1" type="text" value="{{$data->b1r2}}" disabled>
          <br>
          <input style="margin-top:8px" class="inputleft-3 boxkues-3" type="text" value="{{$data->b1r3}}" disabled>
          <br>
          <input style="margin-top:8px" class="inputleft-3 boxkues-3" type="text" value="{{$data->b1r4}}" disabled>
          <br>
          <input style="margin-top:8px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b1r5}}" disabled>
          <br>
          <input style="margin-top:10px" class="inputleft-4 boxkues-4" type="text" value="{{$data->b1r6}}" disabled>
          <br>
          <input style="margin-top:11px" class="inputleft-3 boxkues-3" type="text" value="{{$data->b1r7}}" disabled>
          <br>
          <input style="margin-top:8px" class="inputleft-3 boxkues-3" type="text" value="{{$data->b1r8}}" disabled>
          <br>
          <input style="margin-top:8px" class="inputleft-3 boxkues-3" type="text" value="{{$data->b1r9}}" disabled>
          <br>
          <input style="margin-top:9px" class="inputleft boxkues-1" type="text" value="{{$data->b1r10}}" disabled>
          <br>
          <input style="margin-top:8px" class="inputleft-nama boxkues-nama" type="text" value="{{$data->b1r11}}" disabled>
          <br>
          <input style="margin-top:9px" class="inputleft-nama boxkues-nama" type="text" value="{{$data->b1r12}}" disabled>
          <br>
          <input style="margin-top:9px" class="inputleft-nama boxkues-nama" type="text" value="{{$data->b1r13}}" disabled>
          <br>
         </div>
         <img src="assets/img/kues-se/1.png" style="width:1100px"></img>
         <br>
         <div class="span4 offset4 text-center"> 
          <a href="capi-se-{{$data->nks}}=2"><button class="btn">next</button></a>
         </div>
      </div>

      
     </div>
    </div>
  </section>
</section>
@stop

