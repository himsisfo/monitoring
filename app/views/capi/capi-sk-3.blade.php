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

.inputleft-1{
  margin-left:933px;
}


.boxkues-1{
  width:27px;
  height:28px; 
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
          <input style="margin-top:145px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r1}}" disabled>
          <input style="margin-top:8px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r2}}" disabled>
          <input style="margin-top:8px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r3}}" disabled>
          <input style="margin-top:8px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r4}}" disabled>
          <input style="margin-top:8px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r5}}" disabled>
          <input style="margin-top:9px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r6}}" disabled>
          <input style="margin-top:8px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r7}}" disabled>
          <input style="margin-top:3px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r8}}" disabled>
          <input style="margin-top:2px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r9}}" disabled>
          
          <input style="margin-top:4px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r10}}" disabled>
          <input style="margin-top:8px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r11}}" disabled>
          <input style="margin-top:8px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r12}}" disabled>
          <input style="margin-top:8px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r13}}" disabled>
          
          <input style="margin-top:6px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r14}}" disabled>
          <input style="margin-top:8px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r15}}" disabled>
          <input style="margin-top:5px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r16}}" disabled>
          <input style="margin-top:8px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r17}}" disabled>
          
          <input style="margin-top:8px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r18}}" disabled>
          <input style="margin-top:8px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r19}}" disabled>
          <input style="margin-top:8px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r20}}" disabled>
          <input style="margin-top:8px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r21}}" disabled>
          
          <input style="margin-top:16px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r22}}" disabled>
          <input style="margin-top:18px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r23}}" disabled>
          <input style="margin-top:8px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r24}}" disabled>
          <input style="margin-top:8px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r25}}" disabled>
          
          <input style="margin-top:8px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r26}}" disabled>
          <input style="margin-top:16px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b4r27}}" disabled>
          
         </div>
         <img src="assets/img/kues-sk/page3.png" style="width:800px; margin-left: 170px"></img>
         <br>
         <div class="span4 offset4 text-center"> 
          <a href="capi-sk-{{$data->nksb4}}=2"><button class="btn">prev</button></a>
          <a href="capi-sk-{{$data->nksb4}}=4"><button class="btn">next</button></a>
         </div>
      </div>

      
     </div>
    </div>
  </section>
</section>
@stop

