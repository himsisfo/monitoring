@extends('layouts.template')

@section('title')
@parent
:: Home
@stop

@section('content')


        

<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="row content-panel">
                <div class="panel-heading">
                        <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a data-toggle="tab" href="#cirebon">Cirebon</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#sukabumi">Sukabumi</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#bandung">Bandung</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#indramayu">Indramayu</a>
                                </li>
                        </ul>
                </div><! --/panel-heading -->


                <div class="panel-body">
                        <div class="tab-content">
                            <div id="cirebon" class="tab-pane fade in active" style="min-width: 300px; min-height: 500px; margin: 0 auto;">
                            <h4>Progress Cacah Kabupaten Cirebon</h4>
                            <p>Berikut adalah progress pencacahan di Kab. Cirebon.</p>
                                <table id="tablecirebon" class="table table-bordered" cellspacing="0" width="100%">
                                    
                                    <thead>
                                        <tr>
                                            <th>Nama Kecamatan</th>
                                            <th>Progress Cacah</th>
                                            <th>Beban Cacah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div id="sukabumi" class="tab-pane fade" style="min-width: 300px; min-height: 500px; margin: 0 auto;">
                            <h4>Progress Cacah Kabupaten Sukabumi</h4>
                            <p>Berikut adalah progress pencacahan di Kab. Sukabumi.</p>
                                <table id="tablesukabumi" class="table table-bordered" cellspacing="0" width="100%">
                                    
                                    <thead>
                                        <tr>
                                            <th>Nama Kecamatan</th>
                                            <th>Progress Cacah</th>
                                            <th>Beban Cacah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div id="bandung" class="tab-pane fade" style="min-width: 300px; min-height: 500px; margin: 0 auto;">
                            <h4>Progress Cacah Kota Bandung</h4>
                            <p>Berikut adalah progress pencacahan di Kota Bandung.</p>
                                <table id="tablebandung" class="table table-bordered" cellspacing="0" width="100%">
                                    
                                    <thead>
                                        <tr>
                                            <th>Nama Kecamatan</th>
                                            <th>Progress Cacah</th>
                                            <th>Beban Cacah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div id="indramayu" class="tab-pane fade" style="min-width: 300px; height: 500px; margin: 0 auto;">
                            <h4>Progress Cacah Kab Indramayu</h4>
                            <p>Berikut adalah progress pencacahan di Kab. Indramayu.</p>
                                <table id="tableindramayu" class="table table-bordered" cellspacing="0" width="100%">
                                    
                                    <thead>
                                        <tr>
                                            <th>Nama Kecamatan</th>
                                            <th>Progress Cacah</th>
                                            <th>Beban Cacah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            
<!--                            <div id="progress" class="tab-pane fade active">
                                <div class="col-md-6 col-sm-6 mb">
                                    <div class="darkblue-panel pn">
                                        <div class="darkblue-header">
                                            <div id="cirebon" style="min-width: 300px; height: 245px; margin: 0 auto;"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>-->
                            
                        </div><!-- /tab-content -->

                </div><!-- panel-body -->

        </div>
        <!-- page end-->
    </section>
</section><!-- /MAIN CONTENT -->
		<style type="text/css">
                    //${demo.css}
		</style>
                                    
@stop

@section('script')
  @parent

    <script>
      $(document).ready(function() {
          $('#tablecirebon').dataTable( {
              "bServerSide": true,
              "sAjaxSource": "http:\/\/localhost\/monitoring\/public\/api\/cacah\/09",
              
          } );
          $('#tablesukabumi').dataTable( {
              "bServerSide": true,
              "sAjaxSource": "http:\/\/localhost\/monitoring\/public\/api\/cacah\/02",
          } );
          $('#tablebandung').dataTable( {
              "bServerSide": true,
              "sAjaxSource": "http:\/\/localhost\/monitoring\/public\/api\/cacah\/73",
          } );
          $('#tableindramayu').dataTable( {
              "bServerSide": true,
              "sAjaxSource": "http:\/\/localhost\/monitoring\/public\/api\/cacah\/12",
          } );
      } );
    </script>
  @stop