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
          <input style="margin-top:260px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r57}}" disabled>
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r58}}" disabled>
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r59}}" disabled>
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r60}}" disabled>
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r61}}" disabled>
          
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r62}}" disabled>
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r63}}" disabled>
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r64}}" disabled>
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r65}}" disabled>
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r66}}" disabled>
          <input style="margin-top:30px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r67}}" disabled>
          
          <input style="margin-top:18px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r68}}" disabled>
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r69}}" disabled>
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r70}}" disabled>
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r71}}" disabled>
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r72}}" disabled>
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r73}}" disabled>
          
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r74}}" disabled>
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r75}}" disabled>
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r76}}" disabled>
          </div>
         <img src="assets/img/kues-sk/page5.png" style="width:800px; margin-left: 170px;"></img>
         <br>
         <div class="span4 offset4 text-center"> 
          <a href="capi-sk-{{$data->nksb4}}=4"><button class="btn">prev</button></a>
          <a href="capi-sk-{{$data->nksb4}}=6"><button class="btn">next</button></a>
         </div>
      </div>

      
     </div>
    </div>
  </section>
</section>
@stop

