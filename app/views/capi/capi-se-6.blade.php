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
        <input style="margin-top:113px" class="inputright-2 boxkues-2" type="text" value="{{$data['b4dr16']}}">
        <br>
        <input style="margin-top:70px" class="inputright-2 boxkues-2" type="text" value="{{$data['b4dr17s1']}}">
        <br>
        <input style="margin-top:60px" class="inputright-2 boxkues-2" type="text" value="{{$data['b4dr17s2']}}">
        <br>

        <table style="margin-top:239px">
          <tr>
            <td><input style="margin-top:8px; margin-left:402px" class="boxkues-3" type="text" value="{{$data['b4er18s1d1t1']}}"></td>
            <td><input style="margin-top:8px; margin-left:20px" class="boxkues-6" type="text" value="{{$data['b4er18s1d1t2']}}"></td> 
            <td><input style="margin-top:8px; margin-left:18px" class="boxkues-3" type="text" value="{{$data['b4er18s1d2t1']}}"></td>
            <td><input style="margin-top:8px; margin-left:20px" class="boxkues-6" type="text" value="{{$data['b4er18s1d2t2']}}"></td>
          </tr>
          <tr>
            <td><input style="margin-top:8px; margin-left:402px" class="boxkues-3" type="text" value="{{$data['b4er18s2d1t1']}}"></td>
            <td><input style="margin-top:8px; margin-left:20px" class="boxkues-6" type="text" value="{{$data['b4er18s2d1t2']}}"></td> 
            <td><input style="margin-top:8px; margin-left:18px" class="boxkues-3" type="text" value="{{$data['b4er18s2d2t1']}}"></td>
            <td><input style="margin-top:8px; margin-left:20px" class="boxkues-6" type="text" value="{{$data['b4er18s2d2t2']}}"></td>
          </tr>
        </table>

        <table style="margin-top:138px">
          <tr>
            <td><input style="margin-top:8px; margin-left:320px" class="boxkues-4" type="text" value="{{$data['b4er19as1d1t1']}}"></td>
            <td><input style="margin-top:8px; margin-left:20px" class="boxkues-4" type="text" value="{{$data['b4er19as1d1t2']}}"></td> 
            <td><input style="margin-top:8px; margin-left:18px" class="boxkues-5" type="text" value="{{$data['b4er19as1d1t3']}}"></td>
            <td><input style="margin-top:8px; margin-left:40px" class="boxkues-7" type="text" value="{{$data['b4er19as1d2']}}"></td>
          </tr>
          <tr>
            <td><input style="margin-top:22px; margin-left:320px" class="boxkues-4" type="text" value="{{$data['b4er19as2d1t1']}}"></td>
            <td><input style="margin-top:22px; margin-left:20px" class="boxkues-4" type="text" value="{{$data['b4er19as2d1t2']}}"></td> 
            <td><input style="margin-top:22px; margin-left:18px" class="boxkues-5" type="text" value="{{$data['b4er19as2d1t3']}}"></td>
            <td><input style="margin-top:22px; margin-left:40px" class="boxkues-7" type="text" value="{{$data['b4er19as2d2']}}"></td>
          </tr>
          <tr>
            <td><input style="margin-top:22px; margin-left:320px" class="boxkues-4" type="text" value="{{$data['b4er19as3d1t1']}}"></td>
            <td><input style="margin-top:22px; margin-left:20px" class="boxkues-4" type="text" value="{{$data['b4er19as3d1t2']}}"></td> 
            <td><input style="margin-top:22px; margin-left:18px" class="boxkues-5" type="text" value="{{$data['b4er19as3d1t3']}}"></td>
            <td><input style="margin-top:22px; margin-left:40px" class="boxkues-7" type="text" value="{{$data['b4er19as3d2']}}"></td>
          </tr>
          <tr>
            <td><input style="margin-top:22px; margin-left:320px" class="boxkues-4" type="text" value="{{$data['b4er19as4d1t1']}}"></td>
            <td><input style="margin-top:22px; margin-left:20px" class="boxkues-4" type="text" value="{{$data['b4er19as4d1t2']}}"></td> 
            <td><input style="margin-top:22px; margin-left:18px" class="boxkues-5" type="text" value="{{$data['b4er19as4d1t3']}}"></td>
            <td><input style="margin-top:22px; margin-left:40px" class="boxkues-7" type="text" value="{{$data['b4er19as4d2']}}"></td>
          </tr>
          <tr>
            <td><input style="margin-top:22px; margin-left:320px" class="boxkues-4" type="text" value="{{$data['b4er19as5d1t1']}}"></td>
            <td><input style="margin-top:22px; margin-left:20px" class="boxkues-4" type="text" value="{{$data['b4er19as5d1t2']}}"></td> 
            <td><input style="margin-top:22px; margin-left:18px" class="boxkues-5" type="text" value="{{$data['b4er19as5d1t3']}}"></td>
            <td><input style="margin-top:22px; margin-left:40px" class="boxkues-7" type="text" value="{{$data['b4er19as5d2']}}"></td>
          </tr>
          <tr>
            <td><input style="margin-top:22px; margin-left:320px" class="boxkues-4" type="text" value="{{$data['b4er19as6d1t1']}}"></td>
            <td><input style="margin-top:22px; margin-left:20px" class="boxkues-4" type="text" value="{{$data['b4er19as6d1t2']}}"></td> 
            <td><input style="margin-top:22px; margin-left:18px" class="boxkues-5" type="text" value="{{$data['b4er19as6d1t3']}}"></td>
            <td><input style="margin-top:22px; margin-left:40px" class="boxkues-7" type="text" value="{{$data['b4er19as6d2']}}"></td>
          </tr>
          <tr>
            <td><input style="margin-top:22px; margin-left:320px" class="boxkues-4" type="text" value="{{$data['b4er19as7d1t1']}}"></td>
            <td><input style="margin-top:22px; margin-left:20px" class="boxkues-4" type="text" value="{{$data['b4er19as7d1t2']}}"></td> 
            <td><input style="margin-top:22px; margin-left:18px" class="boxkues-5" type="text" value="{{$data['b4er19as7d1t3']}}"></td>
            <td><input style="margin-top:22px; margin-left:40px" class="boxkues-7" type="text" value="{{$data['b4er19as7d2']}}"></td>
          </tr>
          <tr>
            <td style="margin-top:22px; margin-left:320px"></td>
            <td style="margin-top:22px; margin-left:20px"></td> 
            <td style="margin-top:22px; margin-left:18px"></td>
            <td><input style="margin-top:22px; margin-left:40px" class="boxkues-7" type="text" value="{{$data['b4er19as8d2']}}"></td>
          </tr>


          <tr>
            <td style="margin-top:22px; margin-left:320px"></td>
            <td style="margin-top:22px; margin-left:20px"></td> 
            <td style="margin-top:22px; margin-left:18px"></td>
            <td><input style="margin-top:22px; margin-left:40px" class="boxkues-7" type="text" value="{{$data['b4er19as9d2']}}"></td>
          </tr>

          <tr>
            <td style="margin-top:22px; margin-left:320px"></td>
            <td style="margin-top:22px; margin-left:20px"></td> 
            <td style="margin-top:22px; margin-left:18px"></td>
            <td><input style="margin-top:22px; margin-left:40px" class="boxkues-7" type="text" value="{{$data['b4er19as10d2']}}"></td>
          </tr>
          <tr>
            <td style="margin-top:22px; margin-left:320px"></td>
            <td style="margin-top:22px; margin-left:20px"></td> 
            <td style="margin-top:22px; margin-left:18px"></td>
            <td><input style="margin-top:22px; margin-left:40px" class="boxkues-7" type="text" value="{{$data['b4er19as11d2']}}"></td>
          </tr>
          <tr>
            <td style="margin-top:22px; margin-left:320px"></td>
            <td style="margin-top:22px; margin-left:20px"></td> 
            <td style="margin-top:22px; margin-left:18px"></td>
            <td><input style="margin-top:22px; margin-left:40px" class="boxkues-7" type="text" value="{{$data['b4er19as12d2']}}"></td>
          </tr>

        </table>

       </div>
       <img src="assets/img/kues-se/5.png" style="width:1100px"></img>

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

