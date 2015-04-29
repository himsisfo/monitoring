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
                            <div id="cirebon" class="tab-pane fade in active" style="min-width: 300px; height: 500px; margin: 0 auto;">
                            <h4>Progress Listing Kabupaten Cirebon</h4>
                            <p>Berikut adalah tabel yang menyatakan banyaknya Blok Sensus yang telah 
                                di listing dan banyaknya Blok Sensus di kecamatan terpilih di Kab. Cirebon.</p>
                            <table class="table table-striped table-bordered table-hover table-condensed">
                                <thead>
                                  <tr>
                                    <th class="text-center"><b>Wilayah</b></th>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '09' )
                                    <th class="text-center"><b>{{$row['namakecamatan']}}</b></th>
                                    @endif
                                    @endforeach
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center"><b>Progress Listing</b></td>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '09' )
                                    <?php 
                                     	  $ddd = Nbsse::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','09')->get();
                                          $aa = 0;
                                          $bb = 0;
                                          foreach($ddd as $dd){
                                            $aa+=$dd['progressListing'];
                                            $bb+=$dd['bebanListing'];
                                          }
                                    ?>
                                    <td class="text-center">{{$aa}} <br> (<?php echo number_format((float)$aa/$bb*100, 2, '.', ''); ?>%)</td>
                                    @endif
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td class="text-center"><b>Beban Listing</b></td>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '09' )
                                    <?php 
                                     	  $ddd = Nbsse::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','09')->get();
                                          $aa = 0;
                                          $bb = 0;
                                          foreach($ddd as $dd){
                                            $aa+=$dd['progressListing'];
                                            $bb+=$dd['bebanListing'];
                                          }
                                    ?>
                                    <td class="text-center">{{$bb}}</td>
                                    @endif
                                    @endforeach
                                  </tr>
                                </tbody>
                            </table>
                            </div>
                            
                            <div id="sukabumi" class="tab-pane fade active" style="min-width: 300px; height: 500px; margin: 0 auto;">
                            <h4>Progress Listing Kabupaten Sukabumi</h4>
                            <p>Berikut adalah tabel yang menyatakan banyaknya Blok Sensus yang telah 
                                di listing dan banyaknya Blok Sensus di kecamatan terpilih di Kab. Sukabumi.</p>
                            <table class="table table-striped table-bordered table-hover table-condensed">
                                <thead>
                                  <tr>
                                    <th class="text-center"><b>Wilayah</b></th>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '02' )
                                    <th class="text-center"><b>{{$row['namakecamatan']}}</b></th>
                                    @endif
                                    @endforeach
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center"><b>Progress Listing</b></td>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '02' )
                                    <?php 
                                     	  $ddd = Nbsse::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','02')->get();
                                          $aa = 0;
                                          $bb = 0;
                                          foreach($ddd as $dd){
                                            $aa+=$dd['progressListing'];
                                            $bb+=$dd['bebanListing'];
                                          }
                                    ?>
                                    <td class="text-center">{{$aa}} <br> (<?php echo number_format((float)$aa/$bb*100, 2, '.', ''); ?>%)</td>
                                    @endif
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td class="text-center"><b>Beban Listing</b></td>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '02' )
                                    <?php 
                                     	  $ddd = Nbsse::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','02')->get();
                                          $aa = 0;
                                          $bb = 0;
                                          foreach($ddd as $dd){
                                            $aa+=$dd['progressListing'];
                                            $bb+=$dd['bebanListing'];
                                          }
                                    ?>
                                    <td class="text-center">{{$bb}}</td>
                                    @endif
                                    @endforeach
                                  </tr>
                                </tbody>
                            </table>
                            </div>
                            
                            <div id="bandung" class="tab-pane fade active" style="min-width: 300px; height: 500px; margin: 0 auto;">
                            <h4>Progress Listing Kota Bandung</h4>
                            <p>Berikut adalah tabel yang menyatakan banyaknya Blok Sensus yang telah 
                                di listing dan banyaknya Blok Sensus di kecamatan terpilih di Kota Bandung.</p>

                            <table class="table table-striped table-bordered table-hover table-condensed">
                                <thead>
                                  <tr>
                                    <th class="text-center"><b>Wilayah</b></th>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '73' )
                                    <th class="text-center"><b>{{$row['namakecamatan']}}</b></th>
                                    @endif
                                    @endforeach
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center"><b>Progress Listing</b></td>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '73' )
                                    <?php 
                                     	  $ddd = Nbssk::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','73')->get();
                                          $aa = 0;
                                          $bb = 0;
                                          foreach($ddd as $dd){
                                            $aa+=$dd['progressListing'];
                                            $bb+=$dd['bebanListing'];
                                          }
                                    ?>
                                    <td class="text-center">{{$aa}} <br> (<?php echo number_format((float)$aa/$bb*100, 2, '.', ''); ?>%)</td>
                                    @endif
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td class="text-center"><b>Beban Listing</b></td>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '73' )
                                    <?php 
                                     	  $ddd = Nbssk::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','73')->get();
                                          $aa = 0;
                                          $bb = 0;
                                          foreach($ddd as $dd){
                                            $aa+=$dd['progressListing'];
                                            $bb+=$dd['bebanListing'];
                                          }
                                    ?>
                                    <td class="text-center">{{$bb}}</td>
                                    @endif
                                    @endforeach
                                  </tr>
                                </tbody>
                            </table>
                            </div>
                            
                            <div id="indramayu" class="tab-pane fade active" style="min-width: 300px; height: 500px; margin: 0 auto;">
                            <h4>Progress Listing Kab Indramayu</h4>
                            <p>Berikut adalah tabel yang menyatakan banyaknya Blok Sensus yang telah 
                                di listing dan banyaknya Blok Sensus di kecamatan terpilih di Kab. Indramayu.</p>
                            <table class="table table-striped table-bordered table-hover table-condensed">
                                <thead>
                                  <tr>
                                    <th class="text-center"><b>Wilayah</b></th>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '12' )
                                    <th class="text-center"><b>{{$row['namakecamatan']}}</b></th>
                                    @endif
                                    @endforeach
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center"><b>Progress Listing</b></td>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '12' )
                                    <?php 
                                     	  $ddd = Nbssk::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','12')->get();
                                          $aa = 0;
                                          $bb = 0;
                                          foreach($ddd as $dd){
                                            $aa+=$dd['progressListing'];
                                            $bb+=$dd['bebanListing'];
                                          }
                                    ?>
                                    <td class="text-center">{{$aa}} <br> (<?php echo number_format((float)$aa/$bb*100, 2, '.', ''); ?>%)</td>
                                    @endif
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td class="text-center"><b>Beban Listing</b></td>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '12' )
                                    <?php 
                                     	  $ddd = Nbssk::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','12')->get();
                                          $aa = 0;
                                          $bb = 0;
                                          foreach($ddd as $dd){
                                            $aa+=$dd['progressListing'];
                                            $bb+=$dd['bebanListing'];
                                          }
                                    ?>
                                    <td class="text-center">{{$bb}}</td>
                                    @endif
                                    @endforeach
                                  </tr>
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