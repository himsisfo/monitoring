@extends('layouts.template')

@section('title')
@parent
:: Home
@stop

@section('content')
<h1>Progress PKL54</h1>

<?php 
$c=count($data['usaha']); 
$d=count($data['pekerja']);
$e=round($c/5000); 
?>

<div class="col-md-2 col-sm-2 box0">
	<div class="box1">
		<span class="li_stack"></span>
			<h3>{{$c}}</h3>
	</div>
	<p>Terdapat {{$c}} Anggota Rumah Tangga yang mempunyai unit usaha</p>
</div>
      
<div class="col-md-2 col-sm-2 box0">
	<div class="box1">
		<span class="li_stack"></span>
			<h3>{{$d}}</h3>
	</div>
	<p>Terdapat {{$d}} Anggota Rumah Tangga yang berstatus pekerja</p>
</div>                  
  <div>
					<div class="row mt">
                      <!--CUSTOM CHART START -->
                      <div class="border-head">
                          <h3>Klasifikasi Anggota Rumah Tangga</h3>
                      </div>
                      <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>5000</span></li>
                              <li><span>4000</span></li>
                              <li><span>3000</span></li>
                              <li><span>2000</span></li>
                              <li><span>1000</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">Usaha</div>
                              <div class="value tooltips" data-original-title="{{$c}}" data-toggle="tooltip" data-placement="top">80%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">Pekerja</div>
                              <div class="value tooltips" data-original-title="{{$d}}" data-toggle="tooltip" data-placement="top">100%</div>
                          </div>
                      </div>
                      <!--custom chart end-->
					</div><!-- /row -->	
  </div>
@stop

