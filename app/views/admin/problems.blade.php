@extends('layouts.templateWTSidebar')

@section('title')
@parent
:: Problems
@stop



@section('script')
@parent
	{{ HTML::style('//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css') }}
	{{ HTML::script('//cdn.datatables.net/1.10.7/js/jquery.dataTables.js') }}
	{{ HTML::script('//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js')}}
@stop

@section('styles')
@parent
	thead,tfoot{
		background-color: #BDBDBD !important;	
	}
	tr.group,
	tr.group:hover {
	    background-color: #BBDEFB !important;
	}
@stop

@section('content')

  <section class="wrapper site-min-height">
  		<br>
  		<div class="row">
  			<div class="col-xs-offset-2 col-lg-8 col-md-8 col-sm-8 m">
		  		<table id="problemtable" class="table table-bordered" cellspacing="0" width="100%">
		  			<thead>
			            <tr>
			            	<th></th>
			                <th>Tanggal</th>
			                <th>Sender</th>
			                <th>Problem</th>
			                <th>Response</th>
			            </tr>
			        </thead>
			        <tbody>
			        </tbody>
		  		</table>
	  		</div>
	  	</div>
  </section><! --/wrapper -->
 <script>

 	$(document).ready(function() {
	    var table = $('#problemtable').DataTable({
	    	"sAjaxSource": "http:\/\/localhost\/monitoring\/public\/admin\/api\/problems",
	        "displayLength": 25,
	    } );
	 
	} );

 </script>		

@stop
