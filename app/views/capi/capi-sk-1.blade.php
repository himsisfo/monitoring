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
  margin-left:929px;
}

.inputleft-2{
  margin-left:902px;
}

.inputleft-3{
  margin-left:875px;
}

.inputleft-4{
  margin-left:848px;
}

.inputleft-nama{
  margin-left:526px;
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

.boxkues-3{
  width:81px;
  height:28px; 
  letter-spacing: 8px;
}

.boxkues-4{
  width:108px;
  height:28px;
  letter-spacing: 8px;
}


.boxkues-nama{
  width:430px;
  height:28px; 
}

.boxkues-nama-B2{
  width:260px;
  height:28px;
  margin: 4px auto;
}

.boxkues-teks{
  width:430px;
  height:56px;
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

table{
    margin-top: 130px;
    margin-left: 416px;
    text-align: center;
    width: 554px
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
          <input style="margin-top:279px" class="inputleft-2 boxkues-2" type="text" value="{{$data['B1']->b1r1}}" disabled>
          <br>
          <input style="margin-top:18px" class="inputleft-3 boxkues-3" type="text" value="{{$data['B1']->b1r2}}" disabled>
          <br>
          <input style="margin-top:9px" class="inputleft-3 boxkues-3" type="text" value="{{$data['B1']->b1r3}}" disabled>
          <br>
          <input style="margin-top:10px" class="inputleft-1 boxkues-1" type="text" value="{{$data['B1']->b1r4}}" disabled>
          <br>
          <input style="margin-top:12px" class="inputleft-4 boxkues-3" type="text" value="{{$data['B1']->b1r5}}" disabled>
          <br>
          <input style="margin-top:11px" class="inputleft-2 boxkues-2" type="text" value="{{$data['B1']->b1r6}}" disabled>
          <br>
          <input style="margin-top:11px" class="inputleft-nama boxkues-nama" type="text" value="{{$data['B1']->b1r7}}" disabled>
          <br>
          <textarea style="margin-top:10px" class="inputleft-nama boxkues-teks" type="text" value="{{$data['B1']->b1r8}}" disabled>{{$data['B1']->b1r8}}</textarea>
          <br>
          <input style="margin-top:28px" class="inputleft-1 boxkues-1" type="text" value="{{$data['B1']->b1r9}}" disabled>
          <br>
          <input style="margin-top:38px" class="inputleft-1 boxkues-1" type="text" value="{{$data['B1']->b1r10}}" disabled>
          <br>
          <table>
              <tr>
                  <td colspan="2">
                      <input class="boxkues-nama-B2" type="text" value="{{$data['B2']->b2r1s1}}" disabled>
                  </td>
                  <td colspan="2">
                      <input class="boxkues-nama-B2" name="namakortim" type="text" value="{{ $data['B2']->b2r1s2 }}" disabled>
                  </td>
              </tr>
              <tr>
                  <td style="width: 140px">
                      <input style="margin: 4px 4px 4px 80px" class="boxkues-2" type="text" value="{{ substr($data['B2']->b2r2s1,0,2) }}" disabled>
                  </td>
                  <td>
                      <input style="margin: 4px auto" class="boxkues-4" type="text" value="{{ substr($data['B2']->b2r2s1,2) }}" disabled>
                  </td>
                  <td style="width: 150px">
                      <input style="margin: 4px 4px 4px 90px" class="boxkues-2" type="text" value="{{ substr($data['B2']->b2r2s2,0,2) }}" disabled>
                  </td>
                  <td>
                      <input style="margin: 4px auto" class="boxkues-4" type="text" value="{{ substr($data['B2']->b2r2s2,2) }}" disabled>
                  </td>
              </tr>
              <tr style=" height: 60px ">
                  <td style="width: 140px">
                      <input style="margin: 4px 4px 4px 80px" class="boxkues-2" type="text" value="{{ $data['B2']->b2r3s1d1 }}" disabled>
                  </td>
                  <td>
                      <input style="margin: 4px 4px 4px 50px" class="boxkues-2" type="text" value="{{ $data['B2']->b2r3s1d2 }}" disabled>
                  </td>
                  <?php date_default_timezone_set("Asia/Jakarta"); ?>
                  <td style="width: 150px">
                      <input style="margin: 4px 4px 4px 90px" class="boxkues-2" type="text" value="{{ idate("d") }}" disabled>
                  </td>
                  <td>
                      <input style="margin: 4px 4px 4px 50px" class="boxkues-2" type="text" value="{{ idate("m") }}" disabled>
                  </td>
              </tr>
          </table>
         </div>
              <img src="assets/img/kues-sk/page1.png" style="width:800px; margin-left: 170px" />
         <br>
         <div class="span4 offset4 text-center">
          <a href="capi-sk"><button class="btn">prev</button></a>
          <a href="capi-sk-{{$data['B1']->nks}}=2"><button class="btn">next</button></a>
         </div>
      </div>

      
     </div>
    </div>
  </section>
</section>
@stop

