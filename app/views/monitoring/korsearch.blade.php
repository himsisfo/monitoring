@extends('layouts.template')

@section('title')
@parent
:: Home
@stop

@section('content')


        <section id="main-content">
          <section class="wrapper site-min-height">
            <br>
            <h3><i class="fa fa-angle-right"></i>Hasil Pencarian : {{$data['count']}}</h3>
            <div class="pull-right"> 
              <form class="navbar-form" role="form" action="" method="get">  
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari..." name="name">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">Cari</button>
                    </span>
                  </div><!-- /input-group -->
              </form>
            </div>
            <div class="row mt">
              <div class="col-lg-12">

                <! -- 3RD ROW OF PANELS -->
                <!-- Product Panel -->
                <div class="row">
                  @if($data['count']>0)
                    @foreach($data['kor'] as $datakor)  
                    <?php

                      $image = User::find($datakor->user_id)->image;

                      if($data['title']=='Korwil'){
                        $namakor = $datakor['namakorwil'];
                        $nim = $datakor['nimkorwil'];
                      }
                      else if($data['title']=='Kortim'){
                        $namakor = $datakor['namakortim'];
                        $nim = $datakor['nimkortim'];
                      }
                      else if($data['title']=='Dosen'){
                        $namakor = $datakor['namadosen'];
                        $nim = $datakor['jabatan'];
                      }
                      else if($data['title']=='Korlap'){
                        $namakor = $datakor['namakorlap'];
                        $nim = $datakor['nimkorlap'];
                      }
                    ?>               
                    
                    <! -- PROFILE 02 PANEL -->
                    <div class="col-lg-4 col-md-4 col-sm-4 mb">
                      <div class="content-panel pn">
                        <div class="col-xs-4 col-xs-offset-9">
                          <a href="profile={{$datakor['user_id']}}"><button class="btn btn-sm btn-success">Detail</button></a>
                        </div>
                        <div id="profile-02">
                          <div class="user">
                            <?php
                              $mypict = "assets/img/badgebaru/".$nim.".jpg";
                            ?>
                            @if(File::exists($mypict))
                              <p><img src="assets/img/badgebaru/{{$nim}}.jpg" class="img-circle" width="65"></p>
                            @else
                              <img src="assets/img/friends/fr-09.jpg" class="img-circle" width="80">
                            @endif
                            <h4>{{$namakor}}</h4>
                            <h4>{{$nim}}</h4>
                          </div>
                        </div>
                        <div class="pr2-social centered">
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a href="#"><i class="fa fa-facebook"></i></a>
                          <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                      </div><! --/panel -->
                    </div><!--/ col-md-4 -->
                    @endforeach

                </div><! -- END 3RD ROW OF PANELS -->
                <div class="text-center">
                  <p>{{$data['kor']->links()}}</p>
                </div>
                @else
                    <p>No result found</p>
                @endif
              </div>
            </div>
      
          </section><! --/wrapper -->
        </section>
        @if($data['title']==='Dosen')
          <script>
            $(document).ready(function(){
              $("#dosen1").addClass("sublistactive");
            });
          </script>    
        @elseif($data['title']==='Kortim')
          <script>
            $(document).ready(function(){
              $("#kortim1").addClass("sublistactive");
            });
          </script>
        @elseif($data['title']==='Korwil')
         <script>
            $(document).ready(function(){
              $("#korwil1").addClass("sublistactive");
            });
          </script>
        @elseif($data['title']==='Korlap')
         <script>
            $(document).ready(function(){
              $("#korlap1").addClass("sublistactive");
            });
          </script>
        @endif
@stop

