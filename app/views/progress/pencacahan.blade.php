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
                            <h4>Progress Cacah Kabupaten Cirebon</h4>
                            <p>Berikut adalah progress pencacahan di Kab. Cirebon.</p>
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
                                    <td class="text-center"><b>Belum di Cleaning</b></td>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '09' )
                                    <?php $ci = Nbsse::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','09')->sum('cacahnr') ;
                                          $rul = Nbsse::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','09')->sum('maxcacah') ;
                                            ?>
                                    @if( $rul != 0 ) <td class="text-center"><?php echo $ci." (".number_format((float)($ci/$rul*100),2,'.','')."% )"; ?></td>
                                    @else <td class="text-center"><?php echo "ERROR: BEBAN CACAH 0"; ?></td>
                                    @endif
                                    @endif
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td class="text-center"><b>Progress Cacah</b></td>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '09' )
                                    <?php $ci = Nbsse::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','09')->sum('cacah') ;
                                          $rul = Nbsse::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','09')->sum('maxcacah') ;
                                            ?>
                                    @if( $rul != 0 ) <td class="text-center"><?php echo $ci." (".number_format((float)($ci/$rul*100),2,'.','')."% )"; ?></td>
                                    @else <td class="text-center"><?php echo "ERROR: BEBAN CACAH 0"; ?></td>
                                    @endif
                                    @endif
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td class="text-center"><b>Beban Cacah</b></td>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '09' )
                                    <?php $rul = Nbsse::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','09')->sum('maxcacah') ; ?>
                                    <td class="text-center"><?php echo $rul." ( 100% )"; ?></td>
                                    @endif
                                    @endforeach
                                  </tr>
                                </tbody>
                            </table>
                            </div>
                            
                            <div id="sukabumi" class="tab-pane fade active" style="min-width: 300px; height: 500px; margin: 0 auto;">
                            <h4>Progress Cacah Kabupaten Sukabumi</h4>
                            <p>Berikut adalah progress pencacahan di Kab. Sukabumi.</p>
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
                                    <td class="text-center"><b>Belum di Cleaning</b></td>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '02' )
                                    <?php $ci = Nbsse::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','02')->sum('cacahnr') ;
                                          $rul = Nbsse::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','02')->sum('maxcacah') ;
                                            ?>
                                    @if( $rul != 0 ) <td class="text-center"><?php echo $ci." (".number_format((float)($ci/$rul*100),2,'.','')."% )"; ?></td>
                                    @else <td class="text-center"><?php echo "ERROR: BEBAN CACAH 0"; ?></td>
                                    @endif
                                    @endif
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td class="text-center"><b>Progress Cacah</b></td>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '02' )
                                    <?php $ci = Nbsse::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','02')->sum('cacah') ;
                                          $rul = Nbsse::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','02')->sum('maxcacah') ;
                                            ?>
                                    @if( $rul != 0 ) <td class="text-center"><?php echo $ci." (".number_format((float)($ci/$rul*100),2,'.','')."% )"; ?></td>
                                    @else <td class="text-center"><?php echo "ERROR: BEBAN CACAH 0"; ?></td>
                                    @endif
                                    @endif
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td class="text-center"><b>Beban Cacah</b></td>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '02' )
                                    <?php $rul = Nbsse::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','02')->sum('maxcacah') ; ?>
                                    <td class="text-center"><?php echo $rul." ( 100% )"; ?></td>
                                    @endif
                                    @endforeach
                                  </tr>
                                </tbody>
                            </table>
                            </div>
                            
                            <div id="bandung" class="tab-pane fade active" style="min-width: 300px; height: 500px; margin: 0 auto;">
                            <h4>Progress Cacah Kota Bandung</h4>
                            <p>Berikut adalah progress pencacahan di Kota Bandung.</p>
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
                                    <td class="text-center"><b>Non-Response</b></td>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '73' )
                                    <?php $ci = Nbssk::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','73')->sum('cacahnr') ;
                                          $rul = Nbssk::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','73')->sum('maxcacah') ;
                                            ?>
                                    <td class="text-center"><?php echo $ci." (".number_format((float)($ci/$rul*100),2,'.','')."% )"; ?></td>
                                    @endif
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td class="text-center"><b>Progress Cacah</b></td>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '73' )
                                    <?php $ci = Nbssk::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','73')->sum('cacah') ;
                                          $rul = Nbssk::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','73')->sum('maxcacah') ;
                                            ?>
                                    <td class="text-center"><?php echo $ci." (".number_format((float)($ci/$rul*100),2,'.','')."% )"; ?></td>
                                    @endif
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td class="text-center"><b>Beban Cacah</b></td>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '73' )
                                    <?php $rul = Nbssk::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','73')->sum('maxcacah') ; ?>
                                    <td class="text-center"><?php echo $rul." ( 100% )"; ?></td>
                                    @endif
                                    @endforeach
                                  </tr>
                                </tbody>
                            </table>
                            </div>
                            
                            <div id="indramayu" class="tab-pane fade active" style="min-width: 300px; height: 500px; margin: 0 auto;">
                            <h4>Progress Cacah Kab Indramayu</h4>
                            <p>Berikut adalah progress pencacahan di Kab. Indramayu.</p>
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
                                    <td class="text-center"><b>Non-Response</b></td>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '12' )
                                    <?php $ci = Nbssk::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','12')->sum('cacahnr') ;
                                          $rul = Nbssk::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','12')->sum('maxcacah') ;
                                            ?>
                                    <td class="text-center"><?php echo $ci." (".number_format((float)($ci/$rul*100),2,'.','')."% )"; ?></td>
                                    @endif
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td class="text-center"><b>Progress Cacah</b></td>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '12' )
                                    <?php $ci = Nbssk::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','12')->sum('cacah') ;
                                          $rul = Nbssk::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','12')->sum('maxcacah') ;
                                            ?>
                                    <td class="text-center"><?php echo $ci." (".number_format((float)($ci/$rul*100),2,'.','')."% )"; ?></td>
                                    @endif
                                    @endforeach
                                  </tr>
                                  <tr>
                                    <td class="text-center"><b>Beban Cacah</b></td>
                                    @foreach($data as $row)
                                    @if( $row['kota'] == '12' )
                                    <?php $rul = Nbssk::where('idkecamatan','=',$row['idkecamatan'])->where('kota','=','12')->sum('maxcacah') ; ?>
                                    <td class="text-center"><?php echo $rul." ( 100% )"; ?></td>
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