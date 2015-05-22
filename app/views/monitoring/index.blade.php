@extends('layouts.template')

@section('title')
@parent
:: Home
@stop

@section('content')
        <section id="main-content">
          <section class="wrapper site-min-height">
            <br>
            <h3><i class="fa fa-angle-right"></i>Selamat datang di website monitoring PKL 54!</h3>
            
            <div class="row mt">
              <div class="col-lg-12">


                           <!-- CHART PANELS -->
                    <div class="row">
                        <div class="col-md-8 col-sm-8 mb">
                          <div class="darkblue-panel pn" id="{{$data['petaid']}}" style="min-width: 300px; height: 530px; margin: 0 auto;"></div>
                          
                        </div>
                        
                
                        <div class="col-md-4 col-sm-4 mb">
                          <div class="grey-panel pn donut-chart">
                            <div class="grey-header">
                               <h5>{{$data['title']}} Bandung</h5>
                            </div>
                            <canvas id="serverstatus001" height="120" width="120"></canvas>
                            <script>
                                var doughnutData = [
                                  {
                                    value: {{ $data['ban1'] }},
                                    color: "#1c9ca7"
                                  },
                                  {
                                    value : {{ $data['ban2'] }},
                                    color : "#f68275"
                                  }
                                ];
                                var myDoughnut = new Chart(document.getElementById("serverstatus001").getContext("2d")).Doughnut(doughnutData);
                            </script>
                            <h3>{{ number_format((float)$data['ban1'], 2, '.', '') }}% Data Masuk</h3>
                          </div><! --/grey-panel -->
                        </div><!-- /col-md-4-->
                        
                        <div class="col-md-4 col-sm-4 mb">
                          <div class="grey-panel pn donut-chart">
                            <div class="grey-header">
                               <h5>{{$data['title']}} Indramayu</h5>
                            </div>
                            <canvas id="serverstatus002" height="120" width="120"></canvas>
                            <script>
                                  var doughnutData = [
                                    {
                                      value: {{$data['ind1']}},
                                      color: "#1c9ca7"
                                    },
                                    {
                                      value : {{$data['ind2']}},
                                      color : "#f68275"
                                    }
                                  ];
                                  var myDoughnut = new Chart(document.getElementById("serverstatus002").getContext("2d")).Doughnut(doughnutData);
                            </script>
                            <h3>{{ number_format((float)$data['ind1'], 2, '.', '') }}% Data Masuk</h3>
                          </div><! --/grey-panel -->
                        </div><!-- /col-md-4-->
                      </div>

                      
                                    
                <div class="row">
                    <div class="col-md-4 col-sm-4 mb">
                        <div class="grey-panel pn donut-chart">
                          <div class="grey-header">
                             <h5>{{$data['title']}} Cirebon</h5>
                          </div>
                          <canvas id="serverstatus003" height="120" width="120"></canvas>
                            <script>
                               var doughnutData = [
                                    {
                                      value: {{$data['cir1']}},
                                      color: "#1c9ca7"
                                    },
                                    {
                                      value : {{$data['cir2']}},
                                      color : "#f68275"
                                    }
                                  ];
                               var myDoughnut = new Chart(document.getElementById("serverstatus003").getContext("2d")).Doughnut(doughnutData);
                            </script>
                          <h3>{{ number_format((float)$data['cir1'], 2, '.', '') }}% Data Masuk</h3>
                        </div><! --/grey-panel -->
                    </div><!-- /col-md-4-->
                    
                    <div class="col-md-4 col-sm-4 mb">
                        <div class="grey-panel pn donut-chart">
                          <div class="grey-header">
                             <h5>{{$data['title']}} Sukabumi</h5>
                          </div>
                          <canvas id="serverstatus004" height="120" width="120"></canvas>
                            <script>
                              var doughnutData = [
                                  {
                                    value: {{ $data['suk1'] }},
                                    color: "#1c9ca7"
                                  },
                                  {
                                    value : {{ $data['suk2'] }},
                                    color : "#f68275"
                                  }
                                ];
                                var myDoughnut = new Chart(document.getElementById("serverstatus004").getContext("2d")).Doughnut(doughnutData);
                            </script>
                          <h3>{{ number_format((float)$data['suk1'], 2, '.', '') }}% Data Masuk</h3>
                        </div><! --/grey-panel -->
                    </div><!-- /col-md-4-->
            
                        <div class="col-md-4 col-sm-4 mb">
                            <div class="green-panel pn">
                              <div class="green-header">
                                <h3>PKL HARI KE</h3>
                              </div>
                                <?php 
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
