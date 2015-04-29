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
          <input style="margin-top:50px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r77}}" disabled>
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r78}}" disabled>
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r79}}" disabled>
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r80}}" disabled>
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r81}}" disabled>
          
          <input style="margin-top:17px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r82}}" disabled>
          <input style="margin-top:15px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r83}}" disabled>
          <input style="margin-top:25px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r84}}" disabled>
          <input style="margin-top:25px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r85}}" disabled>
          <input style="margin-top:17px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r86}}" disabled>
          <input style="margin-top:17px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r87}}" disabled>
          
          <input style="margin-top:18px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r88}}" disabled>
          <input style="margin-top:16px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r89}}" disabled>
          <input style="margin-top:18px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r90}}" disabled>
          <input style="margin-top:17px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b4r91}}" disabled>
          </div>
         <img src="assets/img/kues-sk/page6.png" style="width:800px; margin-left: 170px;"></img>
         <br>
         <div class="span4 offset4 text-center"> 
          <a href="capi-sk-{{$data->nksb4}}=5"><button class="btn">prev</button></a>
          <a href="capi-sk-{{$data->nksb4}}=7"><button class="btn">next</button></a>
         </div>
      </div>

      
     </div>
    </div>
  </section>
</section>
@stop

