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

.inputleft-2{
  margin-left:912px;
}

.boxkues-2{
  width:50px;
  height:25px; 
  letter-spacing: 8px;
}

input{
  font-size:20px;
  color:red;
  text-align:right;
}

@stop


@section('content')
<section id="main-content">
  <section class="wrapper site-min-height">
    <div class="container">
     <div class="row">
      <div class="col-md-12">

         <div style="position:absolute">
          <!-- left -->
          <input style="margin-top:326px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r28}}" disabled>
          <input style="margin-top:0px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r29}}" disabled>
          <input style="margin-top:0px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r30}}" disabled>
          <input style="margin-top:-1px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r31}}" disabled>
          <input style="margin-top:-1px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r32}}" disabled>
          
          <input style="margin-top:0px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r33}}" disabled>
          <input style="margin-top:-1px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r34}}" disabled>
          <input style="margin-top:-1px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r35}}" disabled>
          <input style="margin-top:0px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r36}}" disabled>
          <input style="margin-top:-1px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r37}}" disabled>
          <input style="margin-top:-1px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r38}}" disabled>
          
          <input style="margin-top:0px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r39}}" disabled>
          <input style="margin-top:-1px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r40}}" disabled>
          <input style="margin-top:-1px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r41}}" disabled>
          <input style="margin-top:0px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r42}}" disabled>
          <input style="margin-top:-1px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r43}}" disabled>
          <input style="margin-top:-1px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r44}}" disabled>
          
          <input style="margin-top:0px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r45}}" disabled>
          <input style="margin-top:-1px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r46}}" disabled>
          <input style="margin-top:-1px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r47}}" disabled>
          <input style="margin-top:3px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r48}}" disabled>
          <input style="margin-top:4px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r49}}" disabled>
          <input style="margin-top:2px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r50}}" disabled>
          
          <input style="margin-top:0px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r51}}" disabled>
          <input style="margin-top:1px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r52}}" disabled>
          <input style="margin-top:0px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r53}}" disabled>
          <input style="margin-top:0px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r54}}" disabled>
          <input style="margin-top:-1px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r55}}" disabled>
          <input style="margin-top:-1px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r56}}" disabled>
         </div>
         <img src="assets/img/kues-sk/page4.png" style="width:800px; margin-left: 170px"></img>
         <br>
         <div class="span4 offset4 text-center"> 
          <a href="capi-sk-{{$data->nksb4}}=3"><button class="btn">prev</button></a>
          <a href="capi-sk-{{$data->nksb4}}=5"><button class="btn">next</button></a>
         </div>
      </div>

      
     </div>
    </div>
  </section>
</section>
@stop

