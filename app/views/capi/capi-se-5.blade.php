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

       <div  style="clear:both;position:absolute">
        <!-- right-->
        <table style="margin-top:102px">
          <tr>
            <td><input style="margin-top:13px; margin-left:340px" class="boxkues-2" type="text" value="{{$data['b4br10s1']}}"></td>
            <td><input style="margin-top:13px; margin-left:300px" class="boxkues-2" type="text" value="{{$data['b4br10s4']}}"></td> 
            <td><input style="margin-top:13px; margin-left:300px" class="boxkues-2" type="text" value="{{$data['b4br10s7']}}"></td>            
          </tr>
          <tr>
            <td><input style="margin-top:20px; margin-left:340px" class="boxkues-2" type="text" value="{{$data['b4br10s2']}}"></td>
            <td><input style="margin-top:20px; margin-left:300px" class="boxkues-2" type="text" value="{{$data['b4br10s5']}}"></td> 
            <td><input style="margin-top:20px; margin-left:300px" class="boxkues-2" type="text" value="{{$data['b4br10s8']}}"></td>            
          </tr>
          <tr>
            <td><input style="margin-top:20px; margin-left:340px" class="boxkues-2" type="text" value="{{$data['b4br10s3']}}"></td>
            <td><input style="margin-top:20px; margin-left:300px" class="boxkues-2" type="text" value="{{$data['b4br10s6']}}"></td> 
          </tr>
        </table>

        <input style="margin-top:43px" class="inputright-2 boxkues-2" type="text" value="{{$data['b4br11s1']}}">
        <b4br11s2r>
        <input style="margin-top:40px" class="inputright boxkues-1" type="text" value="{{$data['b4br11s2']}}">
        <br>
        <input style="margin-top:68px" class="inputright-3 boxkues-3" type="text" value="{{$data['b4cr12']}}">
        <br>

        <table style="margin-top:135px">
          <tr>
            <?php
            
              if($data['b4cr13s1d1']!='5199') $ikan1 = Kodejenisikan::where('Kode','=',$data['b4cr13s1d1'])->first()['Keterangan'];
              else $ikan1=$data['ikanlainnya1'];
              if($data['b4cr13s2d1']!='5199') $ikan2 = Kodejenisikan::where('Kode','=',$data['b4cr13s2d1'])->first()['Keterangan'];
              else $ikan2=$data['ikanlainnya2'];
              if($data['b4cr13s3d1']!='5199') $ikan3 = Kodejenisikan::where('Kode','=',$data['b4cr13s3d1'])->first()['Keterangan'];
              else $ikan3=$data['ikanlainnya3'];
              if($data['b4cr13s4d1']!='5199') $ikan4 = Kodejenisikan::where('Kode','=',$data['b4cr13s4d1'])->first()['Keterangan'];
              else $ikan4=$data['ikanlainnya4'];
              if($data['b4cr13s5d1']!='5199') $ikan5 = Kodejenisikan::where('Kode','=',$data['b4cr13s5d1'])->first()['Keterangan'];
              else $ikan5=$data['ikanlainnya5'];
              
            ?>
            <td><input style="margin-top:13px; margin-left:140px" class="boxkues-7" type="text" value="{{$ikan1}} - {{$data['b4cr13s1d1']}}"></td>
            <td><input style="margin-top:13px; margin-left:110px" class="boxkues-7" type="text" value="{{$data['b4cr13s1d2']}}"></td> 
            <td><input style="margin-top:13px; margin-left:150px" class="boxkues-7" type="text" value="{{$data['b4cr13s1d3']}}"></td>            
          </tr>
          <tr>
            <td><input style="margin-top:17px; margin-left:140px" class="boxkues-7" type="text" value="{{$ikan2}} - {{$data['b4cr13s2d1']}}"></td>
            <td><input style="margin-top:17px; margin-left:110px" class="boxkues-7" type="text" value="{{$data['b4cr13s2d2']}}"></td> 
            <td><input style="margin-top:17px; margin-left:150px" class="boxkues-7" type="text" value="{{$data['b4cr13s2d3']}}"></td>            
          </tr>
          <tr>
            <td><input style="margin-top:16px; margin-left:140px" class="boxkues-7" type="text" value="{{$ikan3}} - {{$data['b4cr13s3d1']}}"></td>
            <td><input style="margin-top:16px; margin-left:110px" class="boxkues-7" type="text" value="{{$data['b4cr13s3d2']}}"></td> 
            <td><input style="margin-top:16px; margin-left:150px" class="boxkues-7" type="text" value="{{$data['b4cr13s3d3']}}"></td>            
          </tr>
          <tr>
            <td><input style="margin-top:17px; margin-left:140px" class="boxkues-7" type="text" value="{{$ikan4}} - {{$data['b4cr13s4d1']}}"></td>
            <td><input style="margin-top:17px; margin-left:110px" class="boxkues-7" type="text" value="{{$data['b4cr13s4d2']}}"></td> 
            <td><input style="margin-top:17px; margin-left:150px" class="boxkues-7" type="text" value="{{$data['b4cr13s4d3']}}"></td>            
          </tr>
          <tr>
            <td><input style="margin-top:16px; margin-left:140px" class="boxkues-7" type="text" value="{{$ikan5}} - {{$data['b4cr13s5d1']}}"></td>
            <td><input style="margin-top:16px; margin-left:110px" class="boxkues-7" type="text" value="{{$data['b4cr13s5d2']}}"></td> 
            <td><input style="margin-top:16px; margin-left:150px" class="boxkues-7" type="text" value="{{$data['b4cr13s5d3']}}"></td>            
          </tr>
          <tr>
            <td><input style="margin-top:16px; margin-left:140px" class="boxkues-7" type="text" value="{{$data['b4cr13s6d1']}}"></td>
            <td><input style="margin-top:16px; margin-left:110px" class="boxkues-7" type="text" value="{{$data['b4cr13s6d2']}}"></td> 
            <td><input style="margin-top:16px; margin-left:150px" class="boxkues-7" type="text" value="{{$data['b4cr13s6d3']}}"></td>            
          </tr>
          <tr>
            <td style="margin-top:16px; margin-left:140px"></td>
            <td><input style="margin-top:16px; margin-left:110px" class="boxkues-7" type="text" value="{{$data['b4cr13s7d2']}}"></td> 
            <td><input style="margin-top:16px; margin-left:150px" class="boxkues-7" type="text" value="{{$data['b4cr13s7d3']}}"></td>            
          </tr>
        </table>


        <input style="margin-top:113px" class="inputright-2 boxkues-2" type="text" value="{{$data['b4dr14']}}">
        <br>



        <input style="margin-top:93px" class="inputright-3 boxkues-3" type="text" value="{{$data['b4dr15s1']}}">
        <br>
        <input style="margin-top:13px" class="inputright-3 boxkues-3" type="text" value="{{$data['b4dr15s2']}}">
        <br>
        <input style="margin-top:13px" class="inputright-3 boxkues-3" type="text" value="{{$data['b4dr15s3']}}">
        <br>
        <input style="margin-top:13px" class="inputright-3 boxkues-3" type="text" value="{{$data['b4dr15s4']}}">
        <br>
        <input style="margin-top:13px" class="inputright-3 boxkues-3" type="text" value="{{$data['b4dr15s5']}}">
        <br>
        <input style="margin-top:6px" class="inputright-4 boxkues-4" type="text" value="{{$data['b4dr15jumlah']}}">
        <br>
       </div>
       <img src="assets/img/kues-se/4.png" style="width:1100px"></img>

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