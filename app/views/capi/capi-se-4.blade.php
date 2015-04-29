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

.inputleft-nama{
  margin-left:575px;
}

.inputleft{
  margin-left:770px;
}

.inputleft-2{
  margin-left:774px;
}

.inputleft-3{
  margin-left:704px;
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

.inputright-5{
  margin-left:918px;
}


.inputright-7{
  margin-left:850px;
}

.boxkues-nama-2{
  width:238px;
  height:36px; 
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
        <input style="margin-top:303px" class="inputleft-nama boxkues-nama-2" type="text" value="{{$data['b4ar1s2']}}">
        <br>
        <input style="margin-top:13px" class="inputleft-3 boxkues-3" type="text" value="{{$data['b4ar2s1']}}">
        <br>
        <input style="margin-top:373px" class="inputleft boxkues-1" type="text" value="{{$data['b4ar8s1']}}">
        <br>
      </div>


       <div  style="clear:both;position:absolute">
        <!-- right-->
        <input style="margin-top:303px" class="inputright-5 boxkues-5" type="text" value="{{$data['b4ar1s3']}}">
        <br>
        <input style="margin-top:13px" class="inputright-3 boxkues-3" type="text" value="{{$data['b4ar2s2']}}">
        <br>
        <input style="margin-top:26px" class="inputright-4 boxkues-4" type="text" value="{{$data['b4ar3']}}">
        <br>
        <input style="margin-top:26px" class="inputright-7 boxkues-7" type="text" value="{{$data['b4ar4']}}">
        <br>
        <input style="margin-top:40px" class="inputright-2 boxkues-2" type="text" value="{{$data['b4ar5']}}">
        <br>
        <input style="margin-top:55px" class="inputright-2 boxkues-2" type="text" value="{{$data['b4ar6']}}">
        <br>
        <input style="margin-top:33px" class="inputright-3 boxkues-3" type="text" value="{{$data['b4ar7']}}">
        <br>
        <input style="margin-top:13px" class="inputright-4 boxkues-4" type="text" value="{{$data['b4ar8s2']}}">
        <br>
        
        <table style="margin-top:182px">
          <tr>
            <td><input style="margin-top:13px; margin-left:240px" class="boxkues-4" type="text" value="{{$data['b4br9s1d1t1']}}"></td>
            <td><input style="margin-top:13px; margin-left:28px" class="boxkues-4" type="text" value="{{$data['b4br9s1d1t2']}}"></td> 
            <td><input style="margin-top:13px; margin-left:28px" class="boxkues-4" type="text" value="{{$data['b4br9s1d1t3']}}"></td>
            <td><input style="margin-top:13px; margin-left:38px" class="boxkues-5" type="text" value="{{$data['b4br9s1d2']}}"></td>
            <td><input style="margin-top:13px; margin-left:33px" class="boxkues-4" type="text" value="{{$data['b4br9s1d3']}}"></td>
          </tr>
           <tr>
            <td><input style="margin-top:8px; margin-left:240px" class="boxkues-4" type="text" value="{{$data['b4br9s2d1t1']}}"></td>
            <td><input style="margin-top:8px; margin-left:28px" class="boxkues-4" type="text" value="{{$data['b4br9s2d1t2']}}"></td> 
            <td><input style="margin-top:8px; margin-left:28px" class="boxkues-4" type="text" value="{{$data['b4br9s2d1t3']}}"></td>
            <td><input style="margin-top:8px; margin-left:38px" class="boxkues-5" type="text" value="{{$data['b4br9s2d2']}}"></td>
            <td><input style="margin-top:8px; margin-left:33px" class="boxkues-4" type="text" value="{{$data['b4br9s2d3']}}"></td>
          </tr>
          <tr>
            <td><input style="margin-top:8px; margin-left:240px" class="boxkues-4" type="text" value="{{$data['b4br9s3d1t1']}}"></td>
            <td><input style="margin-top:8px; margin-left:28px" class="boxkues-4" type="text" value="{{$data['b4br9s3d1t2']}}"></td> 
            <td><input style="margin-top:8px; margin-left:28px" class="boxkues-4" type="text" value="{{$data['b4br9s3d1t3']}}"></td>
            <td><input style="margin-top:8px; margin-left:38px" class="boxkues-5" type="text" value="{{$data['b4br9s3d2']}}"></td>
            <td><input style="margin-top:8px; margin-left:33px" class="boxkues-4" type="text" value="{{$data['b4br9s3d3']}}"></td>
          </tr>
          <tr>
            <td><input style="margin-top:8px; margin-left:240px" class="boxkues-4" type="text" value="{{$data['b4br9s4d1t1']}}"></td>
            <td><input style="margin-top:8px; margin-left:28px" class="boxkues-4" type="text" value="{{$data['b4br9s4d1t2']}}"></td> 
            <td><input style="margin-top:8px; margin-left:28px" class="boxkues-4" type="text" value="{{$data['b4br9s4d1t3']}}"></td>
            <td><input style="margin-top:8px; margin-left:38px" class="boxkues-5" type="text" value="{{$data['b4br9s4d2']}}"></td>
            <td><input style="margin-top:8px; margin-left:33px" class="boxkues-4" type="text" value="{{$data['b4br9s4d3']}}"></td>
          </tr>
          <tr>
            <td><input style="margin-top:8px; margin-left:240px" class="boxkues-4" type="text" value="{{$data['b4br9s5d1t1']}}"></td>
            <td><input style="margin-top:8px; margin-left:28px" class="boxkues-4" type="text" value="{{$data['b4br9s5d1t2']}}"></td> 
            <td><input style="margin-top:8px; margin-left:28px" class="boxkues-4" type="text" value="{{$data['b4br9s5d1t3']}}"></td>
            <td><input style="margin-top:8px; margin-left:38px" class="boxkues-5" type="text" value="{{$data['b4br9s5d2']}}"></td>
            <td><input style="margin-top:8px; margin-left:33px" class="boxkues-4" type="text" value="{{$data['b4br9s5d3']}}"></td>
          </tr>
          <tr>
            <td><input style="margin-top:8px; margin-left:240px" class="boxkues-4" type="text" value="{{$data['b4br9s6d1t1']}}"></td>
            <td><input style="margin-top:8px; margin-left:28px" class="boxkues-4" type="text" value="{{$data['b4br9s6d1t2']}}"></td> 
            <td><input style="margin-top:8px; margin-left:28px" class="boxkues-4" type="text" value="{{$data['b4br9s6d1t3']}}"></td>
            <td><input style="margin-top:8px; margin-left:38px" class="boxkues-5" type="text" value="{{$data['b4br9s6d2']}}"></td>
            <td><input style="margin-top:8px; margin-left:33px" class="boxkues-4" type="text" value="{{$data['b4br9s6d3']}}"></td>
          </tr>
          <tr>
            <td><input style="margin-top:8px; margin-left:240px" class="boxkues-4" type="text" value="{{$data['b4br9s7d1t1']}}"></td>
            <td><input style="margin-top:8px; margin-left:28px" class="boxkues-4" type="text" value="{{$data['b4br9s7d1t2']}}"></td> 
            <td><input style="margin-top:8px; margin-left:28px" class="boxkues-4" type="text" value="{{$data['b4br9s7d1t3']}}"></td>
            <td><input style="margin-top:8px; margin-left:38px" class="boxkues-5" type="text" value="{{$data['b4br9s7d2']}}"></td>
            <td><input style="margin-top:8px; margin-left:33px" class="boxkues-4" type="text" value="{{$data['b4br9s7d3']}}"></td>
          </tr>
          <tr>
            <td><input style="margin-top:8px; margin-left:240px" class="boxkues-4" type="text" value="{{$data['b4br9s8d1t1']}}"></td>
            <td><input style="margin-top:8px; margin-left:28px" class="boxkues-4" type="text" value="{{$data['b4br9s8d1t2']}}"></td> 
            <td><input style="margin-top:8px; margin-left:28px" class="boxkues-4" type="text" value="{{$data['b4br9s8d1t3']}}"></td>
            <td><input style="margin-top:8px; margin-left:38px" class="boxkues-5" type="text" value="{{$data['b4br9s8d2']}}"></td>
            <td><input style="margin-top:8px; margin-left:33px" class="boxkues-4" type="text" value="{{$data['b4br9s8d3']}}"></td>
          </tr>
          <tr>
            <td><input style="margin-top:98px; margin-left:240px" class="boxkues-4" type="text" value="{{$data['b4br9s9d1t1']}}"></td>
            <td><input style="margin-top:98px; margin-left:28px" class="boxkues-4" type="text" value="{{$data['b4br9s9d1t2']}}"></td> 
            <td><input style="margin-top:98px; margin-left:28px" class="boxkues-4" type="text" value="{{$data['b4br9s9d1t3']}}"></td>
            <td><input style="margin-top:98px; margin-left:38px" class="boxkues-5" type="text" value="{{$data['b4br9s9d2']}}"></td>
            <td><input style="margin-top:98px; margin-left:33px" class="boxkues-4" type="text" value="{{$data['b4br9s9d3']}}"></td>
          </tr>
          <tr>
            <td><input style="margin-top:8px; margin-left:240px" class="boxkues-4" type="text" value="{{$data['b4br9s10d1t1']}}"></td>
            <td><input style="margin-top:8px; margin-left:28px" class="boxkues-4" type="text" value="{{$data['b4br9s10d1t2']}}"></td> 
            <td><input style="margin-top:8px; margin-left:28px" class="boxkues-4" type="text" value="{{$data['b4br9s10d1t3']}}"></td>
            <td><input style="margin-top:8px; margin-left:38px" class="boxkues-5" type="text" value="{{$data['b4br9s10d2']}}"></td>
            <td><input style="margin-top:8px; margin-left:33px" class="boxkues-4" type="text" value="{{$data['b4br9s10d3']}}"></td>
          </tr>

        </table>

       </div>
       <img src="assets/img/kues-se/3.png" style="width:1100px"></img>

       <br>
       
         <div class="span4 offset4 text-center"> 
          <?php
          $urlcurrent2 = substr($urlcurrent, 0, strlen($urlcurrent)-1);
          ?>
          <a href="{{$urlcurrent2.'='.($page-1)}}"><button class="btn">before</button></a>
          <a href="{{$urlcurrent.'='.($page+1)}}"><button class="btn">next</button></a>
         </div>

      </div>
     </div
    </div>
  </section>
</section>
@stop

