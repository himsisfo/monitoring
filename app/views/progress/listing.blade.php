@extends('layouts.template')

  @section('head')
  @parent

  @stop    

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
                              <h4>Progress Listing Kabupaten Cirebon</h4>
                              <p>Berikut adalah tabel yang menyatakan banyaknya Blok Sensus yang telah 
                                  di listing dan banyaknya Blok Sensus di kecamatan terpilih di Kab. Cirebon.</p>
                              <div>                              
                                <table id="tablecirebon" class="table table-bordered" cellspacing="0" width="100%">
                                    
                                    <thead>
                                        <tr>
                                            <th>Nama Kecamatan</th>
                                            <th>Progress Listing</th>
                                            <th>Beban Listing</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                              </div>
                            </div>
                            
                            <div id="sukabumi" class="tab-pane fade" style="min-width: 300px; min-height: 500px; margin: 0 auto;">
                              <h4>Progress Listing Kabupaten Sukabumi</h4>
                              <p>Berikut adalah tabel yang menyatakan banyaknya Blok Sensus yang telah 
                                  di listing dan banyaknya Blok Sensus di kecamatan terpilih di Kab. Sukabumi.</p>
                              <table id="tablesukabumi" class="table table-bordered" cellspacing="0" width="100%">
                                  
                                  <thead>
                                      <tr>
                                          <th>Nama Kecamatan</th>
                                          <th>Progress Listing</th>
                                          <th>Beban Listing</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  </tbody>
                              </table> 
                            </div>
                            
                            <div id="bandung" class="tab-pane fade" style="min-width: 300px; min-height: 500px; margin: 0 auto;">
                            <h4>Progress Listing Kota Bandung</h4>
                            <p>Berikut adalah tabel yang menyatakan banyaknya Blok Sensus yang telah 
                                di listing dan banyaknya Blok Sensus di kecamatan terpilih di Kota Bandung.</p>

                              <table id="tablebandung" class="table table-bordered" cellspacing="0" width="100%">
                                  
                                  <thead>
                                      <tr>
                                          <th>Nama Kecamatan</th>
                                          <th>Progress Listing</th>
                                          <th>Beban Listing</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  </tbody>
                              </table>
                            </div>
                            
                            <div id="indramayu" class="tab-pane fade" style="min-width: 300px; min-height: 500px; margin: 0 auto;">
                            <h4>Progress Listing Kab Indramayu</h4>
                            <p>Berikut adalah tabel yang menyatakan banyaknya Blok Sensus yang telah 
                                di listing dan banyaknya Blok Sensus di kecamatan terpilih di Kab. Indramayu.</p>
                              <table id="tableindramayu" class="table table-bordered" cellspacing="0" width="100%">
                                  
                                  <thead>
                                      <tr>
                                          <th>Nama Kecamatan</th>
                                          <th>Progress Listing</th>
                                          <th>Beban Listing</th>
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
        $(document).ready(function(){
                $("#listing1").addClass("sublistactive");
            });
        </script>
    <script>
      $(document).ready(function() {
          $('#tablecirebon').dataTable( {
              "bServerSide": true,
              "sAjaxSource": "http:\/\/localhost\/monitoring\/public\/api\/listing\/09",
              
          } );
          $('#tablesukabumi').dataTable( {
              "bServerSide": true,
              "sAjaxSource": "http:\/\/localhost\/monitoring\/public\/api\/listing\/02",
          } );
          $('#tablebandung').dataTable( {
              "bServerSide": true,
              "sAjaxSource": "http:\/\/localhost\/monitoring\/public\/api\/listing\/73",
          } );
          $('#tableindramayu').dataTable( {
              "bServerSide": true,
              "sAjaxSource": "http:\/\/localhost\/monitoring\/public\/api\/listing\/12",
          } );
      } );
    </script>
  @stop