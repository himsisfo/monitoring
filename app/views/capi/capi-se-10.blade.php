@extends('layouts.template')

@section('title')
@parent
:: Home
@stop

@section('styles')

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
  margin-left:985px;
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

.boxkues-5{
  width:170px;
  height:36px; 
}

.boxkues-7{
  width:238px;
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


@section('content')
<section id="main-content">
  <section class="wrapper site-min-height">
    <div class="container">
     <div class="row">
      <div class="col-md-12 bgimage">

       <div  style="clear:both;position:absolute">
        <!-- right-->
        <textarea style="margin-top:42px;margin-left:7px" type="text" rows="44" cols="178">{{$data->catatan}}</textarea>
        <br>
        
       </div>
       <img src="assets/img/kues-se/9.png" style="width:1100px"></img>

       <br>
       
         <div class="span4 offset4 text-center"> 
          <a href="{{$urlcurrent.'='.($page-1)}}"><button class="btn">before</button></a>
          <!--<a href="{{$urlcurrent.'='.($page+1)}}"><button class="btn">next</button></a>-->
         </div>

      </div>
     </div
    </div>
  </section>
</section>
@stop

