@extends('layouts.template')

@section('title')
@parent
:: Profile
@stop

@section('content')
	  			

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          		
          		<!-- Success-Messages -->
                        @if ($message = Session::get('success'))
                        <div class="col-lg-12 mt">	
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <h4>Success</h4>
                                {{{ $message }}}
                            </div>
                        </div>
                        @elseif(($message = Session::get('failed')))
                        <div class="col-lg-12 mt">	
                        <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <h4>failed</h4>
                                {{{ $message }}}
                            </div>
                        </div>
                        @endif


          	<div class="row mt">
          		<div class="col-lg-12">
					<div class="row content-panel">
						<div class="col-md-4 profile-text mt mb centered">
							<div class="right-divider hidden-sm hidden-xs">
								<div class="row">
									<h4>Alamat :</h4>
									<h6>{{$data['user']->alamat}}</h6>
									<h4>Asal Daerah :</h4>
									<h6>{{$data['user']->daerah}}</h6>
									<h4>Akun Twitter :</h4>
									<h6>{{$data['user']->twitter}}</h6>
								</div>
							</div>
						</div><! --/col-md-4 -->
						
						<div class="col-md-4 profile-text">
							<?php
								if($data['user']['id_jabatan']==1){
									$nama = $data['pos']['namadosen'];
									$nim="";
								}else if($data['user']['id_jabatan']==2){
									$nama = $data['pos']['namakorwil'];
									$nim = $data['pos']['nimkorwil'];
								}else if($data['user']['id_jabatan']==3){
									$nama = $data['pos']['namakortim'];
									$nim = $data['pos']['nimkortim'];
								}else if($data['user']['id_jabatan']==4){
									
								}else if($data['user']['id_jabatan']==5){
									$nama = $data['pos']['namakorlap'];
									$nim = $data['pos']['nimkorlap'];
								}

							?>
							<h3>{{$nama}} <small>({{$data['pos']['EMAIL']}})</small></h3>
							<h6>{{$data['jabatan']}} ( {{$data['id']}} )</h6>
							<p>{{$data['user']->description}}</p>
							<br>
							@if(Auth::user()->id==$data['user']['id'])
							<p><a href="password/change"><button class="btn btn-theme">reset password</button></a></p>
							@endif	
							<!--<p><button class="btn btn-theme"><i class="fa fa-envelope"></i> Send Message</button></p>-->
						</div><! --/col-md-4 -->
						
						<div class="col-md-4 centered">
							<div class="profile-pic">
								<?php
									$mypict = "assets/img/badgebaru/".$nim.".jpg";
								?>
								@if(File::exists($mypict))
									<p><img src="assets/img/badgebaru/{{$nim}}.jpg" class="img-circle img-control"></p>
								@else 
									<!-- default image taro disini -->
									<p><img src="assets/img/ui-sam.jpg" class="img-circle"></p>
								@endif
							</div>
						</div><! --/col-md-4 -->
					</div><!-- /row -->	   
          		</div><! --/col-lg-12 -->
				
				<div class="col-lg-12 mt">		
					<div class="row content-panel">
							<div class="panel-heading">
								<ul class="nav nav-tabs nav-justified">
									<li class="active">
										<a data-toggle="tab" href="#progress">Progress</a>
									</li>
									<li>
										<a data-toggle="tab" href="#areakerja">Tim dan Area Kerja</a>
									</li>
									@if($data['user']->id == Auth::user()->id)
									<li>
										<a data-toggle="tab" href="#edit">Edit Profile</a>
									</li>
									@endif
								</ul>
							</div><! --/panel-heading -->
							

							<div class="panel-body">
								<div class="tab-content">
									<div id="progress" class="tab-pane fade in active">
										
									@if($data['user']->id_jabatan==1)	
				                    	
									@elseif($data['user']->id_jabatan==2)
										<div id="highchartnih" style="height: 300px"></div>
				                   				<?php
				                   					$bebanlisting=0;
					                              		$hasillisting=0;
					                              		$bebancacah=0;
					                              		$hasilcacah=0;
				                   				?>
				                   				@foreach($data['areakerja'] as $areakerja)
					                              	<?php
					                              		$kortim = Kortim::where('nokortim','=',$areakerja['nokortim'])->first();
					                              		$user=User::find($kortim->user_id);
					                              		
					                              		//tambahin if disini untuk menentukan nbs se atau sk
					                              		if(substr($kortim['nokortim'],2,1)=="1"||substr($kortim['nokortim'],2,1)=="2"){
					                              			$nbsse = Nbsse::where('nokortim','=',$kortim->nokortim)->get();
					                              		}
					                              		else{
					                              			$nbsse = Nbssk::where('nokortim','=',$kortim->nokortim)->get();	
					                              		}
					                              		foreach($nbsse as $nbs){
					                              			$bebanlisting+=$nbs['bebanListing'];
					                              			$hasillisting+=$nbs['progressListing'];
					                              			$bebancacah+=$nbs['maxcacah'];
					                              			$hasilcacah+=$nbs['cacah'];
					                              		}
					                              	?>
					                              @endforeach


					                    <script>
					                        $(function () {
					                        $('#highchartnih').highcharts({
					                            chart: {
					                                type: 'bar'
					                            },
					                            title: {
					                                text: 'Progress Listing'
					                            },
					                            xAxis: {
					                                categories: ['Listing', 'Pencacahan']
					                            },
					                            yAxis: {
					                                title: {
					                                    text: 'Jumlah'
					                                }
					                            },
					                            series: [{
					                                name: 'Beban',
					                                data: [{{$bebanlisting}}, {{$bebancacah}}]
					                            }, {
					                                name: 'Hasil',
					                                data: [{{$hasillisting}}, {{$hasilcacah}}]
					                            }],
					                        });
					                    });
					                    </script>
									@elseif($data['user']->id_jabatan==3)
				                    	<div id="highchartnih" style="height: 300px"></div>
				                    	<?php
				                    		$kortim = Kortim::where('user_id','=',$data['user']->id)->first();
				                    		if(substr($kortim['nokortim'], 2,1)=='1'|| substr($kortim['nokortim'], 2,1)=='2'){
				                    			$progressbar = Nbsse::where('nokortim','=',$kortim['nokortim'])->get();
				                    		}
				                    		else{
				                    			$progressbar = Nbssk::where('nokortim','=',$kortim['nokortim'])->get();	
				                    		}
				                    		$bebanlisting=0;
					                        $hasillisting=0;
					                        $bebancacah=0;
					                        $hasilcacah=0;
					                              		
				                    		foreach($progressbar as $progress){
				                    			$bebanlisting+=$progress['bebanListing'];
				                    			$hasillisting+=$progress['progressListing'];
				                    			$bebancacah+=$progress['maxcacah'];
				                    			$hasilcacah+=$progress['cacah'];
				                    		}
				                    	?>

					                    <script>
					                        $(function () {
					                        $('#highchartnih').highcharts({
					                            chart: {
					                                type: 'bar'
					                            },
					                            title: {
					                                text: 'Progress Listing'
					                            },
					                            xAxis: {
					                                categories: ['Listing', 'Pencacahan']
					                            },
					                            yAxis: {
					                                title: {
					                                    text: 'Jumlah'
					                                }
					                            },
					                            series: [{
					                                name: 'Beban',
					                                data: [{{$bebanlisting}}, {{$bebancacah}}]
					                            }, {
					                                name: 'Hasil',
					                                data: [{{$hasillisting}}, {{$hasilcacah}}]
					                            }],
					                        });
					                    });
					                    </script>
									@elseif($data['user']->id_jabatan==4)

									@elseif($data['user']->id_jabatan==5)
										
									@endif
				                    
									</div><! --/tab-pane -->
									
									<div id="areakerja" class="tab-pane">
										@if($data['user']->id_jabatan==1)
										<div class="content-panel">
					                      <h4><i class="fa fa-angle-right"></i> Dosen ini bertugas mengawasi : </h4>
					                          <section id="unseen">
					                            <table class="table table-hover table-bordered table-striped table-condensed">
					                              <thead>
					                              <tr>
					                                  <th>ID PKL</th>
					                                  <th>Nama</th>
					                                  <th class="numeric">Target Listing</th>
					                                  <th class="numeric">Target Cacah</th>
					                                  <th class="numeric">Progress Listing %</th>
					                                  <th class="numeric">Progress Cacah %</th>
					                              </tr>
					                              </thead>
					                              <tbody>
					                          
					                              @foreach($data['areakerjadosen'] as $areakerjadosen)
					                              	<?php
					                              		$kortim = Kortim::where('nokortim','=',$areakerjadosen['nokortim'])->first();
					                              		$user=User::find($kortim->user_id);
					                              	?>
					                              	<tr>
					                              		<td><a href="profile={{$user->id}}">{{$kortim->nokortim}}</a></td>
					                              		<td>{{$kortim->namakortim}}</td>
					                              		<td>sdasd</td>
					                              	</tr>
					                              @endforeach
					                             
					                              </tbody>
					                          </table>
					                        </section>
					                  	</div><!-- /content-panel -->
										@elseif($data['user']->id_jabatan==2)
										<div class="content-panel">
					                      <h4><i class="fa fa-angle-right"></i> Koordinator wilayah ini membawahi : </h4>
					                          <section id="unseen">
					                            <table class="table table-hover table-bordered table-striped table-condensed">
					                              <thead>
					                              <tr>
					                                  <th>ID PKL</th>
					                                  <th>Nama</th>
					                                  <th class="numeric">Target Listing</th>
					                                  <th class="numeric">Target Cacah</th>
					                                  <th class="numeric">Progress Listing %</th>
					                                  <th class="numeric">Progress Cacah %</th>
					                              </tr>
					                              </thead>
					                              <tbody>
					                              @foreach($data['areakerja'] as $areakerja)
					                              	<?php
					                              		$kortim = Kortim::where('nokortim','=',$areakerja['nokortim'])->first();
					                              		$user=User::find($kortim->user_id);
					                              		$bebanlisting=0;
					                              		$hasillisting=0;
					                              		$bebancacah=0;
					                              		$hasilcacah=0;
					                              		//tambahin if disini untuk menentukan nbs se atau sk
					                              		if(substr($kortim['nokortim'],2,1)=="1"||substr($kortim['nokortim'],2,1)=="2"){
					                              			$nbsse = Nbsse::where('nokortim','=',$kortim->nokortim)->get();
					                              		}
					                              		else{
					                              			$nbsse = Nbssk::where('nokortim','=',$kortim->nokortim)->get();	
					                              		}
					                              		foreach($nbsse as $nbs){
					                              			$bebanlisting+=$nbs['bebanListing'];
					                              			$hasillisting+=$nbs['progressListing'];
					                              			$bebancacah+=$nbs['maxcacah'];
					                              			$hasilcacah+=$nbs['cacah'];
					                              		}
					                              	?>
					                              	<tr>
					                              		<td><a href="profile={{$user->id}}">{{$kortim->nokortim}}</a></td>
					                              		<td>{{$kortim->namakortim}}</td>
					                              		<td>{{$bebanlisting}}</td>
					                              		<td>{{$bebancacah}}</td>
					                              		<td>{{number_format((float)($hasillisting/$bebanlisting*100),2,'.','')}}</td>
					                              		<td>{{number_format((float)($hasilcacah/$bebancacah*100),2,'.','')}}</td>
					                              	</tr>
					                              @endforeach
					                             
					                              </tbody>
					                          </table>
					                        </section>
					                  	</div><!-- /content-panel -->
										@elseif($data['user']->id_jabatan==3)
										<div class="content-panel">
					                      <h4><i class="fa fa-angle-right"></i> Koordinator tim ini membawahi : </h4>
					                          <section id="unseen">
					                            <table class="table table-hover table-bordered table-striped table-condensed">
					                              <thead>
					                              <tr>
					                                  <th>ID PKL</th>
					                                  <th>Nama</th>
					                              </tr>
					                              </thead>
					                              <tbody>
					                              @foreach($data['areakerja'] as $areakerja)
					                              	
					                              	<tr>
					                              		<td>{{$areakerja['KODEPCL']}}</a></td>
					                              		<td>{{$areakerja['NAMA']}}</td>
					                              	</tr>
					                              @endforeach
					                             
					                              </tbody>
					                          </table>
					                        </section>
					                        <h4><i class="fa fa-angle-right"></i> Area kerja : </h4>
					                          <section id="unseen">
					                            <table class="table table-hover table-bordered table-striped table-condensed">
					                              <thead>
					                              <tr>
					                                  <th>Kecamatan</th>
					                                  <th>Kelurahan</th>
					                                  <th>Blok Sensus</th>
					                              </tr>
					                              </thead>
					                              <tbody>
					                            <?php
					                              	$kortim = Kortim::where('user_id','=',$data['user']->id)->first();
						                    		if(substr($kortim['nokortim'], 2,1)=='1'|| substr($kortim['nokortim'], 2,1)=='2'){
						                    			$nbs = Nbsse::where('nokortim','=',$kortim['nokortim'])->get();
						                    		}
						                    		else{
						                    			$nbs = Nbssk::where('nokortim','=',$kortim['nokortim'])->get();	
						                    		}
						                    	?>
					                              @foreach($nbs as $daftarnbs)
					                              	<?php
					                              		$kecamatan = Kecamatan::where('idkecamatan','=',$daftarnbs['idkecamatan'])->where('kota','=',$daftarnbs['kota'])->first();
					                              		$kelurahan = Kelurahan::where('kota','=',$daftarnbs['kota'])->where('idkecamatan','=',$daftarnbs['idkecamatan'])->where('idkelurahan','=',$daftarnbs['idkelurahan'])->first()

					                              	?>
					                              	<tr>
					                              		<td>{{$kecamatan['namakecamatan']}}</td>
					                              		<td>{{$kelurahan['namakelurahan']}}</td>
					                              		<td>{{$daftarnbs['nbs']}}</td>
					                              	</tr>
					                              @endforeach
					                             
					                              </tbody>
					                          </table>
					                        </section>

					                  	</div><!-- /content-panel -->
										@elseif($data['user']->id_jabatan==4)
										@elseif($data['user']->id_jabatan==5)
										@endif
									</div><! --/tab-pane -->

									<div id="contact" class="tab-pane">
										
									</div><! --/tab-pane -->
									@if($data['user']->id == Auth::user()->id)
									<div id="edit" class="tab-pane">
										<div class="row">
											<div class="col-lg-8 col-lg-offset-2 detailed">
												<h4 class="mb">Personal Information</h4>
			                                    {{ Form::open(array('url' => 'profile', 'files' => 'true','class' => 'form-horizontal')) }}
			                                        <div class="form-group">
			                                            <label class="col-lg-2 control-label">Nama</label>
			                                            <div class="col-lg-6">
			                                                <input type="text" id="namabaru" class="form-control" name="namabaru" value="{{$nama}}" disabled>
			                                            </div>
			                                        </div>	
			                                        <div class="form-group">
			                                            <label class="col-lg-2 control-label">Email</label>
			                                            <div class="col-lg-6">
			                                                <input type="text" placeholder=" " disabled id="email" class="form-control" name="email" value="{{$data['pos']['EMAIL']}}">
			                                            </div>
			                                        </div>
			                                        <div class="form-group">
			                                            <label class="col-lg-2 control-label">Description</label>
			                                            <div class="col-lg-10">
			                                                <textarea rows="10" cols="30" class="form-control" id="" name="description" >{{$data['user']->description}}</textarea>
			                                            </div>
			                                        </div>

			                                        <div class="form-group">
			                                            <label class="col-lg-2 control-label">Alamat</label>
			                                            <div class="col-lg-6">
			                                                <input type="text" name="alamat" placeholder=" " id="addr1" class="form-control" value="{{$data['user']['alamat']}}">
			                                            </div>
			                                        </div>
			                                        <div class="form-group">
			                                            <label class="col-lg-2 control-label">Asal Daerah</label>
			                                            <div class="col-lg-6">
			                                                <input type="text" placeholder=" " id="addr2" class="form-control" name="daerah" value="{{$data['user']['daerah']}}">
			                                            </div>
			                                        </div>
			                                        
			                                        <div class="form-group">
			                                            <label class="col-lg-2 control-label">No. Handphone Kerabat</label>
			                                            <div class="col-lg-6">
			                                                <input type="text" placeholder=" " id="email" class="form-control" name="kerabat" value="{{$data['user']['kerabat']}}">
			                                            </div>
			                                        </div>
			                                        <div class="form-group">
			                                            <label class="col-lg-2 control-label">Twitter</label>
			                                            <div class="col-lg-6">
			                                                <input type="text" placeholder=" " id="skype" class="form-control" name="twitter" value="{{$data['user']['twitter']}}">
			                                            </div>
			                                        </div>
			
			                                        <div class="form-group">
			                                            <div class="col-lg-offset-2 col-lg-10">
			                                                <button class="btn btn-theme" type="submit">Save</button>
			                                                <button class="btn btn-theme04" type="button">Cancel</button>
			                                            </div>
			                                        </div>
			                                    </form>
											</div>
											
											
										</div><! --/row -->
									</div><! --/tab-pane -->
									
									@endif
								</div><!-- /tab-content -->
							
							</div><! --/panel-body -->
							
						</div><!-- /col-lg-12 -->
					</div><! --/row -->
          	</div><! --/container -->
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->



@stop