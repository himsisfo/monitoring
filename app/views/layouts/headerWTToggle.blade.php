 <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <!--logo start-->
            <a href="{{URL::to('admin')}}" class="logo"><b>PKL54 - Monitoring Survey</b></a>
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
