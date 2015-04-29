 <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="http://localhost/sisjarlap/public" class="logo"><b>PKL54 - Monitoring Survey</b></a>
            <!--logo end-->
        
   

            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    @if (!Auth::guest())
                     <li><a class="logout" href="logout">Logout</a></li>
                    @endif
                </ul>
            </div>
        </header>


      <!--header end-->
