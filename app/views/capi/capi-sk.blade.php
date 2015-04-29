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
                    
                   <form class="navbar-form text-center" role="form" action="" method="get">  
                        <div class="input-group">
                          <div class="row">
                          <input type="text" class="form-control" placeholder="NKS" name="nks">

                          <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Cari</button>
                          </span>
                          </div>
                        </div> 
                    </form>
              <!-- <div class="custom-check goleft mt">
                  <?php
                  if( Auth::user()->id_jabatan == 3 ){
                      $kortim = Kortim::where('user_id','=',Auth::user()->id)->first();
                      $petugas = Pcl::where('KODEKORTIM','=',$kortim['nokortim'])->get();
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
                  </table> -->
                  <div class="panel-heading">
                      <div class="pull-left"><h5><i class="fa fa-tasks"></i>Daftar Kuesioner CAPI</h5></div>
                      <br>
                    </div>
                  
                     <table id="todo" class="table table-hover custom-check">
                      <tbody>
                      <?php
                        $num = 1;
                        foreach($data as $row){ ?>
                          <tr>
                          <td>
                            <a href="capi-sk-{{$row->nksb2}}=1">{{$num++}}. {{$row->b2r2s1}} - {{$row->nksb2}} - {{$row->b2r1s1}}</a>
                            <?php
                            $nks = $row->nksb2;
                            $cek = CapiSKB3::where('nksb3','=',$nks)->get();
                            foreach($cek as $cekin){
                            if( $cekin->b3r4s1d2 != null && $cekin->b3r4s2d2 != null && $cekin->b3r5s1d2 != null && $cekin->b3r5s2d2 != null ){ 
                            if( ($cekin->b3r11s1 != null && $cekin->b3r11s2 != null) || ($cekin->b3r11s1 == null && $cekin->b3r11s2 == null) || $cekin->b3r11s2 == '00'){
                            ?>
                            <p style="color: green">checked</p>
                            
                            <?php } } } ?>
                            <?php if( $cekin->b3r1 == null || $cekin->b3r2 == null || $cekin->b3r1 == '' || $cekin->b3r1 == '' ){ ?> <p style="color: red">nonrespon</p> <?php } ?>
                          </td>
                        </tr>
                        
			<?php } ?>
                      </tbody>
                  </table>
                  <div class="text-center">
                  <?php echo $data->links(); ?>
                </div>
              <?php
                  }else{
                      ?>
                      <table class="table table-hover table-bordered table-striped table-condensed text-center">
                      <thead>
                          <tr>
                              <th>NAMA PCL</th>
                              <th>BELUM DICEK</th>
                              <th>SUDAH DICEK</th>
                              <th>TOTAL DOKUMEN</th>
                          </tr>
                      </thead>
                    <?php
                    $user = CapiSKB2::get();
                    foreach($user as $row){
                        $used[$row['b2r2s1']] = false;
                    }
                    $totalbelum = 0;
                    $totaludah = 0;
                    foreach($user as $row) if( $used[$row['b2r2s1']] === false ){
                        //$nim = substr($row['NIM'],0,2).substr($row['NIM'],3);
                        $nim = $row['b2r2s1'];
                        $used[$nim] = true;
                        $udah = CapiSKB2::where('b2r2s1','=',$nim)->where('b2r3s2d2','!=','')->count();
                        $belum = CapiSKB2::where('b2r2s1','=',$nim)->where('b2r3s2d2','=','')->count();
                        $totaludah += $udah;
                        $totalbelum += $belum;
                    ?>
                    <tbody>
                    <tr>
                        
                        <td>{{$row['b2r1s1']}}</td>
                        <td>{{$belum}}</td>
                        <td>{{$udah}}</td>
                        <td>{{$udah+$belum}}</td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td>TOTAL</td>
                        <td>{{$totalbelum}}</td>
                        <td>{{$totaludah}}</td>
                        <td>{{$totalbelum+$totaludah}}</td>
                    </tr>
                    </tbody>
                  </table>
              <?php
                  }
                  ?>
                  
                  
            </div><!-- /table-responsive -->
            
          </div><!--/ White-panel -->
              </div><! --/col-md-12 -->
            </div><! -- row --> 
  @else
    <h2>no result found</h2>
  @endif
  </section>
</section>
@stop