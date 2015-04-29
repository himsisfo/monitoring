@extends('layouts.template')

@section('title')
@parent
:: Home
@stop

@section('styles')

@stop


@section('content')
<section id="main-content">
  <section class="wrapper site-min-height">
    <!-- SIMPLE TO DO LIST -->
    @if(count($data))
            <div class="row mt">
              <div class="col-md-12">
                <div class="panel">
                    
<!--                    <form class="navbar-form text-center" role="form" action="" method="get">  
                        <div class="input-group">
                          <div class="row">
                          <input type="text" class="form-control" placeholder="NIM PCL" name="nim">

                          <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Cari</button>
                          </span>
                          </div>
                        </div> /input-group 
                    </form>-->
              <div class="custom-check goleft mt">
                  <?php
                  if( Auth::user()->id_jabatan == 3 ){
                      $kortim = Kortim::where('user_id','=',Auth::user()->id)->first();
                      $petugas = Pcl::where('KODEKORTIM','=',$kortim['nokortim'])->get();
                  }
                  ?>
                  <table class="table table-hover table-bordered table-striped table-condensed text-center">
                      <thead>
                          <tr>
                              <th>KODE PCL</th>
                              <th>NAMA PCL</th>
                              <th>BELUM DICEK</th>
                              <th>SUDAH DICEK</th>
                              <th>TOTAL DOKUMEN</th>
                          </tr>
                      </thead>
                    <?php
                    $totalbelum = 0;
                    $totaludah = 0;
                    foreach($petugas as $row){
                        $nim = substr($row['NIM'],0,2).substr($row['NIM'],3);
                        $udah = CapiSKB2::where('b2r2s1','=',$nim)->where('b2r3s2d2','!=','')->count();
                        $belum = CapiSKB2::where('b2r2s1','=',$nim)->where('b2r3s2d2','=','')->count();
                        $totaludah += $udah;
                        $totalbelum += $belum;
                    ?>
                    <tbody>
                    <tr>
                        <td>{{$row['KODEPCL']}}</td>
                        <td>{{$row['NAMA']}}</td>
                        <td>{{$belum}}</td>
                        <td>{{$udah}}</td>
                        <td>{{$udah+$belum}}</td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="2">TOTAL</td>
                        <td>{{$totalbelum}}</td>
                        <td>{{$totaludah}}</td>
                        <td>{{$totalbelum+$totaludah}}</td>
                    </tr>
                    </tbody>
                  </table>
                  <div class="panel-heading">
                      <div class="pull-left"><h5><i class="fa fa-tasks"></i>Daftar Kuesioner CAPI</h5></div>
                      <br>
                    </div>
                  
                     <table id="todo" class="table table-hover custom-check">
                      <tbody>
                        @foreach($data as $row)
                          <tr>
                          <td>
                            <a href="capi-sk-{{$row->nksb2}}=1">{{$row->b2r2s1}}-{{$row->nksb2}}-{{$row->b2r1s1}}</a>
                            @if( $row->b2r3s2d2 != null )
                            <p style="color: green">checked</p>
                            @endif
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
            </div><!-- /table-responsive -->
            <div class="text-center">
                  <?php echo $data->links(); ?>
                </div>
          </div><!--/ White-panel -->
              </div><! --/col-md-12 -->
            </div><! -- row --> 
  @else
    <h2>no result found</h2>
  @endif
  </section>
</section>
@stop

