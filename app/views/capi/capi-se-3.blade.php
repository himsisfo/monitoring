@extends('layouts.template')

@section('title')
@parent
:: Home
@stop

@section('styles')
.bgimage {
background-image: url('assets/img/kues-se/blok III.png') no-repeat center center fixed;
background-size:100% auto;
}

.bgimage-inside {
padding-top: 37.36%; /* this is actually (426/1140)*100 */
}

.inputleft{
  margin-left:470px;
}

.inputleft-2{
  margin-left:504px;
}

.inputright{
  margin-left:1019px;
}

.inputright-2{
  margin-left:1054px;
}


.inputright-3{
  margin-left:994px;
}

.inputright-4{
  margin-left:952px;
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

input{
  font-size:20px;
  color:red;
  text-align:right;
}

@stop

<?php
  $url=URL::current();
  $urlsplit = explode("=",$url);
  $urlcurrent = $urlsplit[0];
  $page = (int)$urlsplit[1];

?>

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
      <div class="col-md-12 bgimage">

       <div style="position:absolute">
        <!-- left -->
        <input style="margin-top:110px" class="inputleft boxkues-1" type="text" value="{{$data['b3ar1']}}">
        <br>
        <input style="margin-top:30px" class="inputleft-2 boxkues-2" type="text"  value="{{$data['b3ar2']}}">
        <br>
        <input style="margin-top:50px" class="inputleft-2 boxkues-2" type="text" value="{{$data['b3ar3']}}">
        <br>
        <input style="margin-top:104px" class="inputleft-2 boxkues-2" type="text" value="{{$data['b3ar4']}}">
        <br>
        <input style="margin-top:98px" class="inputleft-2 boxkues-2" type="text" value="{{$data['b3ar5']}}">
        <br>
        <input style="margin-top:105px" class="inputleft-2 boxkues-2" type="text" value="{{$data['b3ar6']}}">
        <br>
        <input style="margin-top:94px" class="inputleft-2 boxkues-2" type="text" value="{{$data['b3ar7s1']}}">
        <br>
        <input style="margin-top:108px" class="inputleft-2 boxkues-2" type="text" value="{{$data['b3ar7s2']}}">
        <br>
        <input style="margin-top:95px" class="inputleft-2 boxkues-2" type="text" value="{{$data['b3ar7s3']}}">
        <br>
        <input style="margin-top:60px" class="inputleft boxkues-1" type="text" value="{{$data['b3ar8s1']}}">
        <br>
       </div>

       <div  style="clear:both;position:absolute">
        <!-- right-->
        <input style="margin-top:63px" class="inputright-2 boxkues-2" type="text" value="{{$data['b3ar8s2']}}">
        <br>
        <input style="margin-top:40px" class="inputright-2 boxkues-2" type="text" value="{{$data['b3ar8s3']}}">
        <br>
        <input style="margin-top:43px" class="inputright-3 boxkues-3" type="text" value="{{$data['b3ar8s4']}}">
        <br>
        <input style="margin-top:66px" class="inputright-2 boxkues-2" type="text" value="{{$data['b3ar9s1']}}">
        <br>
        <input style="margin-top:85px" class="inputright boxkues-1" type="text" value="{{$data['b3ar9s2']}}">
        <br>
        <input style="margin-top:84px" class="inputright-2 boxkues-2" type="text" value="{{$data['b3ar10s1']}}">
        <br>
        <input style="margin-top:90px" class="inputright boxkues-1" type="text" value="{{$data['b3ar10s2']}}">
        <br>
        <input style="margin-top:106px" class="inputright-2 boxkues-2" type="text" value="{{$data['b3br11']}}">
        <br>
        <input style="margin-top:90px" class="inputright-4 boxkues-4" type="text" value="{{$data['b3br12']}}">
        <br>
        <input style="margin-top:73px" class="inputright-2 boxkues-2" type="text" value="{{$data['b3br13']}}">
        <br>
        <input style="margin-top:73px" class="inputright boxkues-1" type="text" value="{{$data['b3br14']}}">
        <br>
       </div>
       <img src="assets/img/kues-se/2.png" style="width:1100px"></img>

       <br>
       
         <div class="span4 offset4 text-center"> 
          <a href="{{$urlcurrent.'='.($page-1)}}"><button class="btn">before</button></a>
          <a href="{{$urlcurrent.'='.($page+1)}}"><button class="btn">next</button></a>
         </div>

      </div>
     </div
    </div>
  </section>
</section>
@stop

