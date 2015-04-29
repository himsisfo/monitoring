@extends('layouts.template')

@section('title')
@parent
:: Home
@stop

@section('content')


        <section id="main-content">
          <section class="wrapper site-min-height">
              <div class="row content-panel" style="padding-left: 20px; padding-right: 20px">
                <h3><i class="fa fa-angle-right"></i>Menu Tabulasi</h3>
                
            <div class="accordion" id="tabulasiSK">
                <div class="accordion-group">
                    <div class="accordion-heading">        
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#tabulasiSK" href="#jeniskelamin">Jenis Kelamin</a>
                    </div>
                    <div id="jeniskelamin" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <h4>Tabel 1. Jumlah Responden Berdasarkan Jenis Kelamin di Kota Bandung dan Kabupaten Indramayu Bulan Maret Tahun 2015</h4>
                            <table class="table table-striped table-bordered table-hover table-condensed">
                                <thead>
                                  <tr>
                                    <th class="text-center" style="vertical-align: middle" rowspan="2">Jenis Kelamin</th>
                                    <th class="text-center" colspan="2">Jumlah Responden</th>
                                  </tr>
                                  <tr>
                                    <th class="text-center" >Bandung</th>
                                    <th class="text-center" >Indramayu</th>
                                  </tr>
                                  <tr>
                                    <th class="text-center small" >(1)</th>
                                    <th class="text-center small" >(2)</th>
                                    <th class="text-center small" >(3)</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center" >Laki-laki</td>
                                    <td class="text-center" >{{$data['1']['L']}}</td>
                                    <td class="text-center" >{{$data['2']['L']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Perempuan</td>
                                    <td class="text-center" >{{$data['1']['P']}}</td>
                                    <td class="text-center" >{{$data['2']['P']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Jumlah</td>
                                    <td class="text-center" >{{ $data['1']['jeniskelamin'] }}</td>
                                    <td class="text-center" >{{ $data['2']['jeniskelamin'] }}</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                <div class="accordion-group">
                    <div class="accordion-heading">        
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#tabulasiSK" href="#kelompokumur">Kelompok Umur</a>
                    </div>
                    <div id="kelompokumur" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <h4>Tabel 2. Jumlah Responden Berdasarkan Kelompok Umur di Kota Bandung dan Kabupaten Indramayu Bulan Maret Tahun 2015</h4>
                            <table class="table table-striped table-bordered table-hover table-condensed">
                                <thead>
                                  <tr>
                                    <th class="text-center" style="vertical-align: middle" rowspan="2">Kelompok Umur</th>
                                    <th class="text-center" colspan="2">Jumlah Responden</th>
                                  </tr>
                                  <tr>
                                    <th class="text-center" >Bandung</th>
                                    <th class="text-center" >Indramayu</th>
                                  </tr>
                                  <tr>
                                    <th class="text-center small" >(1)</th>
                                    <th class="text-center small" >(2)</th>
                                    <th class="text-center small" >(3)</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center" >15-24 tahun</td>
                                    <td class="text-center" >{{$data['1']['1']}}</td>
                                    <td class="text-center" >{{$data['2']['1']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >25-44 tahun</td>
                                    <td class="text-center" >{{$data['1']['2']}}</td>
                                    <td class="text-center" >{{$data['2']['2']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >45-64 tahun</td>
                                    <td class="text-center" >{{$data['1']['3']}}</td>
                                    <td class="text-center" >{{$data['2']['3']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Jumlah</td>
                                    <td class="text-center" >{{ $data['1']['kelompokumur'] }}</td>
                                    <td class="text-center" >{{ $data['2']['kelompokumur'] }}</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                    
                <div class="accordion-group">
                    <div class="accordion-heading">        
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#tabulasiSK" href="#statusperkawinan">Status Perkawinan</a>
                    </div>
                    <div id="statusperkawinan" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <h4>Tabel 3. Jumlah Responden Berdasarkan Status Perkawinan di Kota Bandung dan Kabupaten Indramayu Bulan Maret Tahun 2015</h4>
                            <table class="table table-striped table-bordered table-hover table-condensed">
                                <thead>
                                  <tr>
                                    <th class="text-center" style="vertical-align: middle" rowspan="2">Status Perkawinan</th>
                                    <th class="text-center" colspan="2">Jumlah Responden</th>
                                  </tr>
                                  <tr>
                                    <th class="text-center" >Bandung</th>
                                    <th class="text-center" >Indramayu</th>
                                  </tr>
                                  <tr>
                                    <th class="text-center small" >(1)</th>
                                    <th class="text-center small" >(2)</th>
                                    <th class="text-center small" >(3)</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center" >Belum Kawin</td>
                                    <td class="text-center" >{{$data['1']['belumkawin']}}</td>
                                    <td class="text-center" >{{$data['2']['belumkawin']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Kawin</td>
                                    <td class="text-center" >{{$data['1']['kawin']}}</td>
                                    <td class="text-center" >{{$data['2']['kawin']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Cerai Hidup</td>
                                    <td class="text-center" >{{$data['1']['ceraihidup']}}</td>
                                    <td class="text-center" >{{$data['2']['ceraihidup']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Cerai Mati</td>
                                    <td class="text-center" >{{$data['1']['ceraimati']}}</td>
                                    <td class="text-center" >{{$data['2']['ceraimati']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Jumlah</td>
                                    <td class="text-center" >{{ $data['1']['statusperkawinan'] }}</td>
                                    <td class="text-center" >{{ $data['2']['statusperkawinan'] }}</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                    
                <div class="accordion-group">
                    <div class="accordion-heading">        
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#tabulasiSK" href="#pendidikan">Pendidikan Terakhir</a>
                    </div>
                    <div id="pendidikan" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <h4>Tabel 4. Jumlah Responden Berdasarkan Pendidikan Terakhir yang Ditamatkan di Kota Bandung dan Kabupaten Indramayu Bulan Maret Tahun 2015</h4>
                            <table class="table table-striped table-bordered table-hover table-condensed">
                                <thead>
                                  <tr>
                                    <th class="text-center" style="vertical-align: middle" rowspan="2">Pendidikan Terakhir yang Ditamatkan</th>
                                    <th class="text-center" colspan="2">Jumlah Responden</th>
                                  </tr>
                                  <tr>
                                    <th class="text-center" >Bandung</th>
                                    <th class="text-center" >Indramayu</th>
                                  </tr>
                                  <tr>
                                    <th class="text-center small" >(1)</th>
                                    <th class="text-center small" >(2)</th>
                                    <th class="text-center small" >(3)</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center" >Tidak pernah sekolah</td>
                                    <td class="text-center" >{{$data['1']['tidaksekolah']}}</td>
                                    <td class="text-center" >{{$data['2']['tidaksekolah']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Belum tamat SD</td>
                                    <td class="text-center" >{{$data['1']['belumtamatSD']}}</td>
                                    <td class="text-center" >{{$data['2']['belumtamatSD']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >SD/MI/Sederajad</td>
                                    <td class="text-center" >{{$data['1']['SD']}}</td>
                                    <td class="text-center" >{{$data['2']['SD']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >SLTP/MTs/Sederajad</td>
                                    <td class="text-center" >{{$data['1']['SMP']}}</td>
                                    <td class="text-center" >{{$data['2']['SMP']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >SLTA/MA/Sederajad</td>
                                    <td class="text-center" >{{$data['1']['SMA']}}</td>
                                    <td class="text-center" >{{$data['2']['SMA']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >SM Kejuruan</td>
                                    <td class="text-center" >{{$data['1']['SMK']}}</td>
                                    <td class="text-center" >{{$data['2']['SMK']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Dip I/II</td>
                                    <td class="text-center" >{{$data['1']['D1']}}</td>
                                    <td class="text-center" >{{$data['2']['D1']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Dip III/Akademi</td>
                                    <td class="text-center" >{{$data['1']['D3']}}</td>
                                    <td class="text-center" >{{$data['2']['D3']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Dip IV/S1</td>
                                    <td class="text-center" >{{$data['1']['S1']}}</td>
                                    <td class="text-center" >{{$data['2']['S1']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >S2/S3</td>
                                    <td class="text-center" >{{$data['1']['S2']}}</td>
                                    <td class="text-center" >{{$data['2']['S2']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Jumlah</td>
                                    <td class="text-center" >{{ $data['1']['pendidikan'] }}</td>
                                    <td class="text-center" >{{ $data['2']['pendidikan'] }}</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                    
<!--                <div class="accordion-group">
                    <div class="accordion-heading">        
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#tabulasiSK" href="#kegiatan">Kegiatan Utama Seminggu Terakhir</a>
                    </div>
                    <div id="kegiatan" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <h4>Tabel 5. Jumlah Responden Berdasarkan Kegiatan Utama Seminggu yang lalu di Kota Bandung dan Kabupaten Indramayu Bulan Maret Tahun 2015</h4>
                            <table class="table table-striped table-bordered table-hover table-condensed">
                                <thead>
                                  <tr>
                                    <th class="text-center" style="vertical-align: middle" rowspan="2">Kegiatan Utama Seminggu yang lalu</th>
                                    <th class="text-center" colspan="2">Jumlah Responden</th>
                                  </tr>
                                  <tr>
                                    <th class="text-center" >Bandung</th>
                                    <th class="text-center" >Indramayu</th>
                                  </tr>
                                  <tr>
                                    <th class="text-center small" >(1)</th>
                                    <th class="text-center small" >(2)</th>
                                    <th class="text-center small" >(3)</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center" >Bekerja</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Menganggur/Sedang Mencari Pekerjaan</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Sekolah</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Mengurus Ruta</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Lainnya selain kegiatan pribadi</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                    
                <div class="accordion-group">
                    <div class="accordion-heading">        
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#tabulasiSK" href="#statuspekerjaan">Status/Kedudukan Pekerjaan</a>
                    </div>
                    <div id="statuspekerjaan" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <h4>Tabel 6. Jumlah Responden Berdasarkan Status/Kedudukan Pekerjaan di Kota Bandung dan Kabupaten Indramayu Bulan Maret Tahun 2015</h4>
                            <table class="table table-striped table-bordered table-hover table-condensed">
                                <thead>
                                  <tr>
                                    <th class="text-center" style="vertical-align: middle" rowspan="2">Status/Kedudukan Pekerjaan</th>
                                    <th class="text-center" colspan="2">Jumlah Responden</th>
                                  </tr>
                                  <tr>
                                    <th class="text-center" >Bandung</th>
                                    <th class="text-center" >Indramayu</th>
                                  </tr>
                                  <tr>
                                    <th class="text-center small" >(1)</th>
                                    <th class="text-center small" >(2)</th>
                                    <th class="text-center small" >(3)</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center" >Berusaha sendiri</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Berusaha dibantu buruh tidak tetap atau buruh tidak dibayar</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Berusaha dibantu buruh tetap atau buruh dibayar</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Buruh atau karyawan atau pegawai</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Pekerja bebas</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Pekerja keluarga atau tidak dibayar</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                    
                <div class="accordion-group">
                    <div class="accordion-heading">        
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#tabulasiSK" href="#migrasi">Status Migrasi</a>
                    </div>
                    <div id="migrasi" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <h4>Tabel 7. Jumlah Responden Berdasarkan Status Migrasi di Kota Bandung dan Kabupaten Indramayu Bulan Maret Tahun 2015</h4>
                            <table class="table table-striped table-bordered table-hover table-condensed">
                                <thead>
                                  <tr>
                                    <th class="text-center" style="vertical-align: middle" rowspan="2">Status Migrasi</th>
                                    <th class="text-center" colspan="2">Jumlah Responden</th>
                                  </tr>
                                  <tr>
                                    <th class="text-center" >Bandung</th>
                                    <th class="text-center" >Indramayu</th>
                                  </tr>
                                  <tr>
                                    <th class="text-center small" >(1)</th>
                                    <th class="text-center small" >(2)</th>
                                    <th class="text-center small" >(3)</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center" >Migran</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" >Non-Migran</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                    <td class="text-center" >{{$data['bandung']}}</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>-->
            </div>                
        </div>
    </div>                        
                        
    </section><! --/wrapper -->
</section>
@stop

