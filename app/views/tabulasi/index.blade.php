@extends('layouts.template')

@section('title')
@parent
:: Home
@stop

@section('content')

        <section id="main-content">
          <section class="wrapper site-min-height">
            <br>
            <h3><i class="fa fa-angle-right"></i>Menu Tabulasi</h3>


            <div id="accordion" class="panel-group">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Tabel 1.1.1 Jumlah Pemilik  Usaha Rumah Tangga Perikanan Tangkap Laut Menurut Jenis Kelamin di Kabupaten Cirebon dan Kabupaten Sukabumi Provinsi Jawa Barat Bulan Maret Tahun 2015
</a>
                      </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                      <div class="panel-body">
                          <section id="unseen">
                                      <table class="table table-hover table-bordered table-striped table-condensed">
                                        <thead>
                                        <tr>
                                            <th  class="text-center" rowspan="2">Jenis Kelamin</th>
                                            <th  class="text-center" colspan="2">Kabupaten</th>
                                            <th  class="text-center" class="numeric" rowspan="2">Jumlah</th>
                                            
                                        </tr>
                                        <tr>
                                            <th class="text-center">Cirebon</th>
                                            <th class="text-center">Sukabumi</th>
                                        </tr>
                                        
                                        </thead>
                                        <tbody class="text-center">
                                          <tr>
                                            <td>(1)</td>
                                            <td>(2)</td>
                                            <td>(3)</td>
                                            <td>(4)</td>
                                          </tr>
                                          <tr>
                                            <td>Laki-Laki</td>
                                            <td>{{$data['tabel1lakicirebon']}}</td>
                                            <td>{{$data['tabel1lakisukabumi']}}</td>
                                            <td>{{$data['tabel1lakicirebon']+$data['tabel1lakisukabumi']}}</td>
                                          </tr>
                                          <tr>
                                            <td>Perempuan</td>
                                            <td>{{$data['tabel1perempuancirebon']}}</td>
                                            <td>{{$data['tabel1perempuansukabumi']}}</td>
                                            <td>{{$data['tabel1perempuancirebon']+$data['tabel1perempuansukabumi']}}</td>
                                          </tr>
                                           <tr style="font-type:bold">
                                            <td>Jumlah</td>
                                            <td>{{$data['tabel1lakicirebon']+$data['tabel1perempuancirebon']}}</td>
                                            <td>{{$data['tabel1lakisukabumi']+$data['tabel1perempuansukabumi']}}</td>
                                            <td>{{$data['tabel1lakicirebon']+$data['tabel1lakisukabumi']+$data['tabel1perempuancirebon']+$data['tabel1perempuansukabumi']}}</td>
                                          </tr>
                                        </tbody>
                                    </table>
                                  </section>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Tabel 1.2.1 Jumlah Pemilik  Usaha Rumah Tangga Perikanan Tangkap Laut MenurutKelompok Umur di Kabupaten Cirebon dan Kabupaten Sukabumi ProvinsiJawa Barat Bulan Maret Tahun 2015</a>
                      </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body">
                              <section id="unseen">
                                      <table class="table table-hover table-bordered table-striped table-condensed">
                                        <thead>
                                        <tr>
                                            <th  class="text-center" rowspan="2">Kelompok Umur</th>
                                            <th  class="text-center" colspan="2">Kabupaten</th>
                                            <th  class="text-center" class="numeric" rowspan="2">Jumlah</th>
                                            
                                        </tr>
                                        <tr>
                                            <th class="text-center">Cirebon</th>
                                            <th class="text-center">Sukabumi</th>
                                        </tr>
                                       
                                        </thead>
                                        <tbody class="text-center">
                                          <tr>
                                            <td>(1)</td>
                                            <td>(2)</td>
                                            <td>(3)</td>
                                            <td>(4)</td>
                                          </tr>
                                          <tr>
                                            <td>15-19</td>
                                            <td>{{$data['tabel211']}}</td>
                                            <td>{{$data['tabel212']}}</td>
                                            <td>{{$data['tabel211']+$data['tabel212']}}</td>
                                          </tr>
                                          <tr>
                                            <td>20-24</td>
                                            <td>{{$data['tabel221']}}</td>
                                            <td>{{$data['tabel222']}}</td>
                                            <td>{{$data['tabel221']+$data['tabel222']}}</td>
                                          </tr>
                                          <tr>
                                            <td>25-29</td>
                                            <td>{{$data['tabel231']}}</td>
                                            <td>{{$data['tabel232']}}</td>
                                            <td>{{$data['tabel231']+$data['tabel232']}}</td>
                                          </tr>
                                          <tr>
                                            <td>30-34</td>
                                            <td>{{$data['tabel241']}}</td>
                                            <td>{{$data['tabel242']}}</td>
                                            <td>{{$data['tabel241']+$data['tabel242']}}</td>
                                          </tr>
                                          <tr>
                                            <td>35-39</td>
                                            <td>{{$data['tabel251']}}</td>
                                            <td>{{$data['tabel252']}}</td>
                                            <td>{{$data['tabel251']+$data['tabel252']}}</td>
                                          </tr>
                                          <tr>
                                            <td>40-44</td>
                                            <td>{{$data['tabel261']}}</td>
                                            <td>{{$data['tabel262']}}</td>
                                            <td>{{$data['tabel261']+$data['tabel262']}}</td>
                                          </tr>
                                          <tr>
                                            <td>45-49</td>
                                            <td>{{$data['tabel271']}}</td>
                                            <td>{{$data['tabel272']}}</td>
                                            <td>{{$data['tabel271']+$data['tabel272']}}</td>
                                          </tr>
                                          <tr>
                                            <td>50-54</td>
                                            <td>{{$data['tabel281']}}</td>
                                            <td>{{$data['tabel282']}}</td>
                                            <td>{{$data['tabel281']+$data['tabel282']}}</td>
                                          </tr>
                                          <tr>
                                            <td>55-59</td>
                                            <td>{{$data['tabel291']}}</td>
                                            <td>{{$data['tabel292']}}</td>
                                            <td>{{$data['tabel291']+$data['tabel292']}}</td>
                                          </tr>
                                          <tr>
                                            <td>60+</td>
                                            <td>{{$data['tabel2101']}}</td>
                                            <td>{{$data['tabel2102']}}</td>
                                            <td>{{$data['tabel2101']+$data['tabel2102']}}</td>
                                          </tr>
                                          
                                           <tr style="font-type:bold">
                                            <td>Jumlah</td>
                                            <td>{{$data['tabel211']+$data['tabel221']+$data['tabel231']+$data['tabel241']+$data['tabel251']+$data['tabel261']+$data['tabel271']+$data['tabel281']+$data['tabel291']+$data['tabel2101']}}</td>
                                            <td>{{$data['tabel212']+$data['tabel222']+$data['tabel232']+$data['tabel242']+$data['tabel252']+$data['tabel262']+$data['tabel272']+$data['tabel282']+$data['tabel292']+$data['tabel2102']}}</td>
                                            <td>{{$data['tabel211']+$data['tabel221']+$data['tabel231']+$data['tabel241']+$data['tabel251']+$data['tabel261']+$data['tabel271']+$data['tabel281']+$data['tabel291']+$data['tabel2101']+$data['tabel212']+$data['tabel222']+$data['tabel232']+$data['tabel242']+$data['tabel252']+$data['tabel262']+$data['tabel272']+$data['tabel282']+$data['tabel292']+$data['tabel2102']}}</td>
                                          </tr>
                                        </tbody>
                                    </table>
                                  </section>
                      
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Tabel 1.3.1 Jumlah Pemilik  Usaha Rumah Tangga Perikanan Tangkap Laut Menurut TingkatPendidikan yang Ditamatkan di Kabupaten Cirebon dan Kabupaten SukabumiProvinsi Jawa Barat Bulan Maret Tahun 2015</a>
                      </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body">
                        <section id="unseen">
                                      <table class="table table-hover table-bordered table-striped table-condensed">
                                        <thead>
                                        <tr>
                                            <th  class="text-center" rowspan="2">Tingkat Pendidikan</th>
                                            <th  class="text-center" colspan="2">Kabupaten</th>
                                            <th  class="text-center" class="numeric" rowspan="2">Jumlah</th>
                                            
                                        </tr>
                                        <tr>
                                            <th class="text-center">Cirebon</th>
                                            <th class="text-center">Sukabumi</th>
                                        </tr>
                                       
                                        </thead>
                                        <tbody class="text-center">
                                          <tr>
                                            <td>(1)</td>
                                            <td>(2)</td>
                                            <td>(3)</td>
                                            <td>(4)</td>
                                          </tr>
                                          <tr>
                                            <td>Tidak/Belum Pernah Sekolah</td>
                                            <td>{{$data['tabel30a']}}</td>
                                            <td>{{$data['tabel30b']}}</td>
                                            <td>{{$data['tabel30a']+$data['tabel30b']}}</td>
                                          </tr>
                                          <tr>
                                            <td>Tidak/Belum Tamat SD</td>
                                            <td>{{$data['tabel31']}}</td>
                                            <td>{{$data['tabel32']}}</td>
                                            <td>{{$data['tabel31']+$data['tabel32']}}</td>
                                          </tr>
                                          <tr>
                                            <td>SD</td>
                                            <td>{{$data['tabel33']}}</td>
                                            <td>{{$data['tabel34']}}</td>
                                            <td>{{$data['tabel33']+$data['tabel34']}}</td>
                                          </tr>
                                          <tr>
                                            <td>SLTP</td>
                                            <td>{{$data['tabel35']}}</td>
                                            <td>{{$data['tabel36']}}</td>
                                            <td>{{$data['tabel35']+$data['tabel36']}}</td>
                                          </tr>
                                          <tr>
                                            <td>SLTA (Umum)</td>
                                            <td>{{$data['tabel37']}}</td>
                                            <td>{{$data['tabel38']}}</td>
                                            <td>{{$data['tabel37']+$data['tabel38']}}</td>
                                          </tr>
                                          <tr>
                                            <td>SLTA (Kejuruan)</td>
                                            <td>{{$data['tabel39']}}</td>
                                            <td>{{$data['tabel310']}}</td>
                                            <td>{{$data['tabel39']+$data['tabel310']}}</td>
                                          </tr>
                                          <tr>
                                            <td>DiplomaI/II/III/Akademi</td>
                                            <td>{{$data['tabel311']}}</td>
                                            <td>{{$data['tabel312']}}</td>
                                            <td>{{$data['tabel311']+$data['tabel312']}}</td>
                                          </tr>
                                          <tr>
                                            <td>Universitas</td>
                                            <td>{{$data['tabel313']}}</td>
                                            <td>{{$data['tabel314']}}</td>
                                            <td>{{$data['tabel313']+$data['tabel314']}}</td>
                                          </tr>
                                          
                                           <tr style="font-type:bold">
                                            <td>Jumlah</td>
                                            <td>{{$data['tabel30a']+$data['tabel31']+$data['tabel33']+$data['tabel35']+$data['tabel37']+$data['tabel39']+$data['tabel311']+$data['tabel313']+$data['tabel315']}}</td>
                                            <td>{{$data['tabel30b']+$data['tabel32']+$data['tabel34']+$data['tabel36']+$data['tabel38']+$data['tabel310']+$data['tabel312']+$data['tabel314']+$data['tabel316']}}</td>
                                            <td>{{$data['tabel30a']+$data['tabel30b']+$data['tabel31']+$data['tabel33']+$data['tabel35']+$data['tabel37']+$data['tabel39']+$data['tabel311']+$data['tabel313']+$data['tabel315']+$data['tabel32']+$data['tabel34']+$data['tabel36']+$data['tabel38']+$data['tabel310']+$data['tabel312']+$data['tabel314']+$data['tabel316']}}</td>
                                          </tr>
                                        </tbody>
                                    </table>
                                  </section>
                      </div>
                  </div>
              </div>
          </div>




          </section><! --/wrapper -->
        </section>
@stop

