<!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="{{'profile='.Auth::user()->id}}">
                      <?php
                        $usernow = Auth::user();
                        if($usernow->id_jabatan==5){
                          $korlap = Korlap::where('user_id','=',$usernow->id)->first();
                          $nim=$korlap['nimkorlap'];
                        }
                        else if($usernow->id_jabatan==2){
                          $korwil = Korwil::where('user_id','=',$usernow->id)->first();
                          $nim=$korwil['nimkorwil'];
                        }
                        else if($usernow->id_jabatan==3){
                          $kortim = Kortim::where('user_id','=',$usernow->id)->first();
                          $nim=$kortim['nimkortim'];
                        }
                        else if($usernow->id_jabatan==1){
                          $nim='sadas';
                        }

                        $mypict = "assets/img/badgebaru/".$nim.".jpg";
                      ?>
                          @if(File::exists($mypict))
                            <img src="assets/img/badgebaru/{{$nim}}.jpg" class="img-circle" width="80">
                          @else
                            <img src="assets/img/friends/fr-09.jpg" class="img-circle" width="80">
                          @endif
                  </a></p>
                  <h5 class="centered">{{ Auth::user()->username }}</h5>
                    
                  <li class="mt">
                      <a class="<?= Request::is('/*') ? 'active' : '' ?>" href="/monitoring/public/">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="<?= Request::is('listing*') ? 'active' : Request::is('pencacahan*') ? 'active' : '' ?>" href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Progress</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="listing">Listing</a></li>
                          <li><a  href="pencacahan">Pencacahan</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a class="<?= Request::is('dosen*') ? 'active' : Request::is('kortim*') ? 'active' : Request::is('korwil*') ? 'active' : '' ?>" href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Organisasi Lapangan</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="dosen">Dosen</a></li>
                          <li><a  href="kortim">Kortim</a></li>
                          <li><a  href="korwil">Korwil</a></li>
                          <li><a  href="korlap">Korlap</a></li>
                      </ul>
                  </li>
               <!--   
<li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Analisis - Real Time</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="#">Deskriptif</a></li>
                          <li><a  href="#">Inferensia</a></li>
                      </ul>
                  </li>
-->
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Tabulasi</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="tabulasi-se">Ekonomi</a></li>
                          <li><a  href="tabulasi-sk">Sosial Kependudukan</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub">
                      <a class="<?= Request::is('problems*') ? 'active' : '' ?>" href="problems">
                          <i class="fa fa-question-circle"></i>
                          <span>Problem Solving</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Extra</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="#">FAQ</a></li>
                          <li><a  href="game">Game</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>CAPI <small>special</small></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="capi-se">Ekonomi</a></li>
                          <li><a  href="capi-sk">Sosial Kependudukan</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      