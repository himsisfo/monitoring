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

.boxkues-teks{
  width:740px;
  height:780px;
}

.inputright-teks{
  margin-left: 200px;
  
}

input{
  font-size:20px;
  color:red;
  text-align:right;
}

textarea{
  font-size:20px;
  color:red;
  text-align:left;
  resize: none;
}

@stop


@section('content')
<section id="main-content">
  <section class="wrapper site-min-height">
    <div class="container">
     <div class="row">
      <div class="col-md-12">
      
         <div style="position:absolute">
            {{ Form::open(array('url' => 'capi-sk-submit', 'class' => 'form-horizontal')) }}
            <!-- left -->
            <textarea id="catatan" name="catatan" style="margin-top:60px" class="inputright-teks boxkues-teks" type="text" value="{{$data['catatan']}}" >{{$data['catatan']}}</textarea>
            <input type="hidden" name="nks" value="{{$data['nksb5']}}">
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <input style="margin-top: 80px; margin-left: 535px" class="btn btn-success" align="right" type="submit" value="Submit">
            {{Form::close()}}
         </div>
         <img src="assets/img/kues-sk/page7.png" style="width:800px; margin-left: 170px;"></img>
         <br><br><br><br>
         <div class="span4 offset4 text-center"> 
          <a href="capi-sk-{{$data['nksb5']}}=6"><button class="btn">prev</button></a>
         </div>
      </div>
     </div>
    </div>
  </section>
</section>
@stop

