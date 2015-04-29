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
  margin-left:255px;
}

.inputleft-1{
  margin-left:508px;
}

.inputleft-2{
  margin-left:481px;
}

.inputleft-tempat{
  margin-left:341px;
}

.inputleft-2-tempat{
  margin-left:10px;
}

.inputright-1{
  margin-left:252px;
  
}

.inputright-2{
  margin-left:225px;
  
}

.inputright-teks{
  margin-left:-52px;
  
}

.boxkues-1{
  width:27px;
  height:28px; 
  letter-spacing: 8px;
}

.boxkues-2{
  width:54px;
  height:28px; 
  letter-spacing: 8px;
}

.boxkues-tempat{
  width:130px;
  height:28px; 
}

.boxkues-nama{
  width:280px;
  height:28px; 
}

.boxkues-teks{
  width:260px;
  height:80px;
}

input{
  font-size:20px;
  color:red;
  text-align:right;
}

textarea{
  font-size:20px;
  color:red;
  text-align:right;
  resize: none;
}

@stop


@section('content')
<section id="main-content">
  <section class="wrapper site-min-height">
    <div class="container">
     <div class="row">

         <div style="position:absolute" class="col-md-12">
          <!-- left -->
          {{ Form::open(array('url' => 'capi-sk-submit', 'class' => 'form-horizontal')) }}
<!--          <form action="/test" name="foo" method="get">-->
          <table>
              <tr><td colspan="2"><input style="margin-top:45px" class="inputleft-nama boxkues-nama" type="text" value="{{$data->b3r1}}" disabled></td></tr>
              <tr><td colspan="2"><input style="margin-top:20px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b3r2}}" disabled></td></tr>
              <tr><td colspan="2"><input style="margin-top:12px; padding-top: -20px" class="inputleft-2 boxkues-2" type="text" value="{{$data->b3r3}}" disabled></td>
                  <td rowspan="3"><textarea style=" font-size: 12px; margin:30px 0px 0px 80px" class="boxkues-teks" type="text" value="{{$data->b3r11s1}}" disabled>{{$data->b3r11s1}}</textarea></td>
                  <td><input style="margin: 25px 0px 0px 19px;" class=" boxkues-2" type="text" value="{{$data->b3r11s2}}" id="lapusaha" name="lapusaha"></td>
              </tr>
              <tr><td><input style="" class="inputleft-tempat boxkues-tempat" type="text" value="{{$data->b3r4s1d1}}" disabled></td>
                  <td><input style="" class="inputleft-2-tempat boxkues-2" type="text" value="{{$data->b3r4s1d2}}" id="prov1" name="prov1"></td>
              </tr><td><input style="" class="inputleft-tempat boxkues-tempat" type="text" value="{{$data->b3r4s2d1}}" disabled></td>
                   <td><input style="" class="inputleft-2-tempat boxkues-2" type="text" value="{{$data->b3r4s2d2}}" id="kab1" name="kab1"></td>
              <tr><td><input style="margin-top:10px; "class="inputleft-tempat boxkues-tempat" type="text" value="{{$data->b3r5s1d1}}" disabled></td>
                  <td><input style="margin-top:10px" class="inputleft-2-tempat boxkues-2" type="text" value="{{$data->b3r5s1d2}}" id="prov2" name="prov2"></td>
              </tr>
              <tr><td><input style="" class="inputleft-tempat boxkues-tempat" type="text" value="{{$data->b3r5s2d1}}" disabled></td>
                  <td><input style="" class="inputleft-2-tempat boxkues-2" type="text" value="{{$data->b3r5s2d2}}" id="kab2" name="kab2"></td>
              </tr>
              <tr>
                  <td colspan="2"><input style="margin-top:30px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b3r6}}" disabled></td>
              </tr>
              <tr>
                  <td colspan="4"><input style="margin:10px 0px 0px 920px" class="boxkues-1" type="text" value="{{$data->b3r12}}" disabled></td>
              </tr>
              <tr>
                  <td colspan="2"><input style="margin-top:80px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b3r7}}" disabled></td>
              </tr>
              
              <tr>
                  <td colspan="2"><input style="margin-top:130px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b3r8s1}}" disabled></td>
                  <td colspan="2" rowspan="2"><input style="margin:130px 0px 0px 385px" class="boxkues-1" type="text" value="{{$data->b3r13}}" disabled></td>
              </tr>
              <tr>
                  <td colspan="2"><input style="margin-top:0px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b3r8s2}}" disabled></td>
              </tr>
              <tr>
                  <td colspan="2"><input style="margin-top:0px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b3r8s3}}" disabled></td>
              </tr>
              
              <tr>
                  <td colspan="2"><input style="margin-top:30px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b3r9s1d1}}" disabled></td>
              </tr>
              <tr>
                  <td colspan="2"><input style="margin-top:5px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b3r9s1d2}}" disabled></td>
              </tr>
              <tr>
                  <td colspan="2"><input style="margin-top:5px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b3r9s1d3}}" disabled></td>
                  <td colspan="2" rowspan="2"><input style="margin:0px 0px 0px 385px" class="boxkues-1" type="text" value="{{$data->b3r14}}" disabled></td>
              </tr>
              <tr>
                  <td colspan="2"><input style="margin-top:5px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b3r9s1d4}}" disabled></td>
              </tr>
              <tr>
                  <td colspan="4"><input style="margin:50px 0px 0px 920px" class="boxkues-1" type="text" value="{{$data->b3r15}}" disabled></td>
              </tr>
              <tr>
                  <td colspan="2"><input style="margin-top:15px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b3r9s2}}" disabled></td>
              </tr>
              <tr>
                  <td colspan="4"><input style="margin:45px 0px 0px 920px" class="boxkues-1" type="text" value="{{$data->b3r16}}" disabled></td>
              </tr>
              <tr>
                  <td colspan="2"><input style="margin-top: -5px" class="inputleft-1 boxkues-1" type="text" value="{{$data->b3r10}}" disabled></td>
              </tr>
              <tr>
                  <td colspan="4"><input type="hidden" name="nks" value="{{$data->nksb3}}"></td>
              </tr>
              <tr>
                  <td colspan="4"><input style="margin-top: 80px; margin-left: 535px" class="btn btn-success" align="right" type="submit" value="Submit"></td>
              </tr>
          </table>
         
<!--         <div class="span4 offset4 text-center" >
            <button class="btn btn-success" type="submit">Submit</button></a>
         </div>     -->
         {{Form::close()}}
         
         </div>
         <img src="assets/img/kues-sk/page2.png" style="width:800px; margin-left: 170px" />
         <br><br><br><br><br>
         <div class="span4 offset4 text-center"> 
          <a href="capi-sk-{{$data->nksb3}}=1"><button class="btn">prev</button></a>
          <a href="capi-sk-{{$data->nksb3}}=7"><button class="btn">BLOK CATATAN</button></a>
          <a href="capi-sk-{{$data->nksb3}}=3"><button class="btn">next</button></a>
         </div>
         <br>
         
         
     </div>
     
    </div>
  </section>
</section>
@stop

