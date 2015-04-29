@extends('layouts.template')

@section('title')
@parent
:: Home
@stop

@section('content')
<?php 
$c=count($data['usaha']); 
$d=count($data['pekerja']);
$e=round($c/5000); 
?>

        <section id="main-content">
          <section class="wrapper site-min-height">
            <br>
            <h3><i class="fa fa-angle-right"></i>Selamat datang di website monitoring PKL 54!</h3>
            
            <div class="row mt">
              <div class="col-lg-12">


                           <!-- CHART PANELS -->
                    <div class="row">
                        <div class="col-md-8 col-sm-8 mb">
                          <?php date_default_timezone_set("Asia/Jakarta");
                                $batas = strtotime('2015-03-15 00:00:00');
                                $res = time() - $batas;
                                ?>
                          @if( $res < 0 )
                          <div class="darkblue-panel pn" id="jabar_listing" style="min-width: 300px; height: 530px; margin: 0 auto;"></div>
                          @else
                          <div class="darkblue-panel pn" id="jabar_cacah" style="min-width: 300px; height: 530px; margin: 0 auto;"></div>
                          @endif
                        </div>
                        
                @if( $res < 0 )
                <?php 
                $data['cirebon_listing'] = Nbsse::where('kota','=','09')->sum('progressListing');
                $data['sukabumi_listing'] = Nbsse::where('kota','=','02')->sum('progressListing');
                $data['indramayu_listing'] = Nbssk::where('kota','=','12')->sum('progressListing');
                $data['bandung_listing'] = Nbssk::where('kota','=','73')->sum('progressListing');

                $data['cirebon_bebanListing'] = Nbsse::where('kota','=','09')->sum('bebanListing');
                $data['sukabumi_bebanListing'] = Nbsse::where('kota','=','02')->sum('bebanListing');
                $data['indramayu_bebanListing'] = Nbssk::where('kota','=','12')->sum('bebanListing');
                $data['bandung_bebanListing'] = Nbssk::where('kota','=','73')->sum('bebanListing');
                
                $cir1 = $data['cirebon_listing']/$data['cirebon_bebanListing']*100;
                $cir2 = 100 - $cir1;
                
                $suk1 = $data['sukabumi_listing']/$data['sukabumi_bebanListing']*100;
                $suk2 = 100 - $suk1;
                
                $ind1 = $data['indramayu_listing']/$data['indramayu_bebanListing']*100;
                $ind2 = 100 - $ind1;
                
                $ban1 = $data['bandung_listing']/$data['bandung_bebanListing']*100;
                $ban2 = 100 - $ban1;
                
                
                ?>
                        <div class="col-md-4 col-sm-4 mb">
                          <div class="grey-panel pn donut-chart">
                            <div class="grey-header">
                               <h5>Listing Bandung</h5>
                            </div>
                            <canvas id="serverstatus001" height="120" width="120"></canvas>
                            <script>
                                var doughnutData = [
                                  {
                                    value: {{ $ban1 }},
                                    color: "#1c9ca7"
                                  },
                                  {
                                    value : {{ $ban2 }},
                                    color : "#f68275"
                                  }
                                ];
                                var myDoughnut = new Chart(document.getElementById("serverstatus001").getContext("2d")).Doughnut(doughnutData);
                            </script>
                            <h3>{{ number_format((float)$ban1, 2, '.', '') }}% Data Masuk</h3>
                          </div><! --/grey-panel -->
                        </div><!-- /col-md-4-->
                        
                        <div class="col-md-4 col-sm-4 mb">
                          <div class="grey-panel pn donut-chart">
                            <div class="grey-header">
                               <h5>Listing Indramayu</h5>
                            </div>
                            <canvas id="serverstatus002" height="120" width="120"></canvas>
                            <script>
                                  var doughnutData = [
                                    {
                                      value: {{$ind1}},
                                      color: "#1c9ca7"
                                    },
                                    {
                                      value : {{$ind2}},
                                      color : "#f68275"
                                    }
                                  ];
                                  var myDoughnut = new Chart(document.getElementById("serverstatus002").getContext("2d")).Doughnut(doughnutData);
                            </script>
                            <h3>{{ number_format((float)$ind1, 2, '.', '') }}% Data Masuk</h3>
                          </div><! --/grey-panel -->
                        </div><!-- /col-md-4-->
                      </div>

                      
                                    
                <div class="row">
                    <div class="col-md-4 col-sm-4 mb">
                        <div class="grey-panel pn donut-chart">
                          <div class="grey-header">
                             <h5>Listing Cirebon</h5>
                          </div>
                          <canvas id="serverstatus003" height="120" width="120"></canvas>
                            <script>
                               var doughnutData = [
                                    {
                                      value: {{$cir1}},
                                      color: "#1c9ca7"
                                    },
                                    {
                                      value : {{$cir2}},
                                      color : "#f68275"
                                    }
                                  ];
                               var myDoughnut = new Chart(document.getElementById("serverstatus003").getContext("2d")).Doughnut(doughnutData);
                            </script>
                          <h3>{{ number_format((float)$cir1, 2, '.', '') }}% Data Masuk</h3>
                        </div><! --/grey-panel -->
                    </div><!-- /col-md-4-->
                    
                    <div class="col-md-4 col-sm-4 mb">
                        <div class="grey-panel pn donut-chart">
                          <div class="grey-header">
                             <h5>Listing Sukabumi</h5>
                          </div>
                          <canvas id="serverstatus004" height="120" width="120"></canvas>
                            <script>
                              var doughnutData = [
                                  {
                                    value: {{ $suk1 }},
                                    color: "#1c9ca7"
                                  },
                                  {
                                    value : {{ $suk2 }},
                                    color : "#f68275"
                                  }
                                ];
                                var myDoughnut = new Chart(document.getElementById("serverstatus004").getContext("2d")).Doughnut(doughnutData);
                            </script>
                          <h3>{{ number_format((float)$suk1, 2, '.', '') }}% Data Masuk</h3>
                        </div><! --/grey-panel -->
                    </div><!-- /col-md-4-->
            @else
            <?php
            $data['cirebon_cacah'] = Nbsse::where('kota','=','09')->sum('cacah');
            $data['sukabumi_cacah'] = Nbsse::where('kota','=','02')->sum('cacah');
            $data['indramayu_cacah'] = Nbssk::where('kota','=','12')->sum('cacah');
            $data['bandung_cacah'] = Nbssk::where('kota','=','73')->sum('cacah');

            $data['cirebon_bebanCacah'] = Nbsse::where('kota','=','09')->sum('maxcacah');
            $data['sukabumi_bebanCacah'] = Nbsse::where('kota','=','02')->sum('maxcacah');
            $data['indramayu_bebanCacah'] = Nbssk::where('kota','=','12')->sum('maxcacah');
            $data['bandung_bebanCacah'] = Nbssk::where('kota','=','73')->sum('maxcacah');
            
            $cir1 = $data['cirebon_cacah']/$data['cirebon_bebanCacah']*100;
            $cir2 = 100 - $cir1;

            $suk1 = $data['sukabumi_cacah']/$data['sukabumi_bebanCacah']*100;
            $suk2 = 100 - $suk1;

            $ind1 = $data['indramayu_cacah']/$data['indramayu_bebanCacah']*100;
            $ind2 = 100 - $ind1;

            $ban1 = $data['bandung_cacah']/$data['bandung_bebanCacah']*100;
            $ban2 = 100 - $ban1;
            ?>
                    <div class="col-md-4 col-sm-4 mb">
                          <div class="grey-panel pn donut-chart">
                            <div class="grey-header">
                               <h5>Cacah Bandung</h5>
                            </div>
                            <canvas id="serverstatus001" height="120" width="120"></canvas>
                            <script>
                              var doughnutData = [
                                  {
                                    value: {{ $ban1 }},
                                    color:"#FF6B6B"
                                  },
                                  {
                                    value : {{ $ban2 }},
                                    color : "#fdfdfd"
                                  }
                                ];
                                var myDoughnut = new Chart(document.getElementById("serverstatus001").getContext("2d")).Doughnut(doughnutData);
                            </script>
                            <h3>{{ number_format((float)$ban1, 2, '.', '') }}% Data Masuk</h3>
                          </div><! --/grey-panel -->
                        </div><!-- /col-md-4-->
                        
                        <div class="col-md-4 col-sm-4 mb">
                          <div class="grey-panel pn donut-chart">
                            <div class="grey-header">
                               <h5>Cacah Indramayu</h5>
                            </div>
                            <canvas id="serverstatus002" height="120" width="120"></canvas>
                            <script>
                              var doughnutData = [
                                  {
                                    value: {{ $ind1 }},
                                    color:"#FF6B6B"
                                  },
                                  {
                                    value : {{ $ind2 }},
                                    color : "#fdfdfd"
                                  }
                                ];
                                var myDoughnut = new Chart(document.getElementById("serverstatus002").getContext("2d")).Doughnut(doughnutData);
                            </script>
                            <h3>{{ number_format((float)$ind1, 2, '.', '') }}% Data Masuk</h3>
                          </div><! --/grey-panel -->
                        </div><!-- /col-md-4-->
                      </div>

                      
                                    
                <div class="row">
                    <div class="col-md-4 col-sm-4 mb">
                        <div class="grey-panel pn donut-chart">
                          <div class="grey-header">
                             <h5>Cacah Cirebon</h5>
                          </div>
                          <canvas id="serverstatus003" height="120" width="120"></canvas>
                            <script>
                              var doughnutData = [
                                  {
                                    value: {{ $cir1 }},
                                    color:"#FF6B6B"
                                  },
                                  {
                                    value : {{ $cir2 }},
                                    color : "#fdfdfd"
                                  }
                                ];
                                var myDoughnut = new Chart(document.getElementById("serverstatus003").getContext("2d")).Doughnut(doughnutData);
                            </script>
                          <h3>{{ number_format((float)$cir1, 2, '.', '') }}% Data Masuk</h3>
                        </div><! --/grey-panel -->
                    </div><!-- /col-md-4-->
                    
                    <div class="col-md-4 col-sm-4 mb">
                        <div class="grey-panel pn donut-chart">
                          <div class="grey-header">
                             <h5>Cacah Sukabumi</h5>
                          </div>
                          <canvas id="serverstatus004" height="120" width="120"></canvas>
                            <script>
                              var doughnutData = [
                                  {
                                    value: {{ $suk1 }},
                                    color:"#FF6B6B"
                                  },
                                  {
                                    value : {{ $suk2 }},
                                    color : "#fdfdfd"
                                  }
                                ];
                                var myDoughnut = new Chart(document.getElementById("serverstatus004").getContext("2d")).Doughnut(doughnutData);
                            </script>
                          <h3>{{ number_format((float)$suk1, 2, '.', '') }}% Data Masuk</h3>
                        </div><! --/grey-panel -->
                    </div><!-- /col-md-4-->
            @endif

                        <div class="col-md-4 col-sm-4 mb">
                            <div class="green-panel pn">
                              <div class="green-header">
                                <h3>PKL HARI KE</h3>
                              </div>
                                <?php 
                                    date_default_timezone_set("Asia/Jakarta");
                                    $date = strtotime('2015-03-10 00:00:00');
                                    $remaining = time() - $date;
                                    $days = floor($remaining / 86400)+1;?>
                                <div style="font-size: 90px; ">{{ $days }}</div>
                            <h3>SEKOLAH TINGGI ILMU STATISTIK</h3>
                            </div>
                        </div><! --/col-md-4 -->
                    </div><!-- /END CHART - 4TH ROW OF PANELS -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12 mb">
                        <div class="grey-panel pn" style="height: 530px">
                          <div class="grey-header">
                             <h5>Progress Harian</h5>
                          </div>
                          <div id="harian" style="min-width: 300px; height: 500px; margin: 0 auto;"></div>
                        </div><! --/grey-panel -->
                    </div><!-- /col-md-4-->
                    </div>

              </div>
            </div>
      
          </section><! --/wrapper -->
        </section>
@stop
