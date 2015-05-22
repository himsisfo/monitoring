@extends('layouts.templateWTSidebar')

@section('title')
@parent
:: Home
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
		  		<table id="usertable" class="table table-bordered" cellspacing="0" width="100%">
		  			<thead>
			            <tr>
			            	<th>Kelurahan</th>
			                <th>NBS</th>
			                <th>Nama</th>
			                <th>Beban Listing</th>
			                <th>max cacah</th>
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
	    var table = $('#usertable').DataTable({
	    	"sAjaxSource": "http:\/\/localhost\/monitoring\/public\/admin\/api\/users",
	        "columnDefs": [
	            { "visible": false, "targets": 2 }
	        ],
	        "order": [[ 2, 'asc' ]],
	        "displayLength": 25,
	        
	        "drawCallback": function ( settings ) {
	            var api = this.api();
	            var rows = api.rows( {page:'current'} ).nodes();
	            var last=null;
	 
	            api.column(2, {page:'current'} ).data().each( function ( group, i ) {
	                if ( last !== group ) {
	                    $(rows).eq( i ).before(
	                        '<tr class="group"><td colspan="5">'+group+'</td></tr>'
	                    );
	 
	                    last = group;
	                }
	            } );
	        }
	    } );
	 
	    // Order by the grouping
	    $('#usertable tbody').on( 'click', 'tr.group', function () {
	        var currentOrder = table.order()[0];
	        if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
	            table.order( [ 2, 'desc' ] ).draw();
	        }
	        else {
	            table.order( [ 2, 'asc' ] ).draw();
	        }
	    } );
	} );
 </script>		
@stop
