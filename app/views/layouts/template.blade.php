<!DOCTYPE html>
<html>
    <head>

        @section('head')
        @show

        <title>
            @section('title')
            PKL54 - Monitoring Survey
            @show
        </title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        
        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <!-- Bootstrap core CSS -->
<!--        {{ HTML::style('assets/css/bootstrap.css') }}-->

        <!--external css-->
        {{ HTML::style('assets/font-awesome/css/font-awesome.css') }}
        {{ HTML::style('assets/css/zabuto_calendar.css') }}
        {{ HTML::style('assets/js/gritter/css/jquery.gritter.css') }}
        {{ HTML::style('assets/lineicons/style.css') }}

        <!-- Custom styles for this template -->
        {{ HTML::style('assets/css/style.css') }}
        {{ HTML::style('assets/css/style-responsive.css') }}
<!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
        
        {{ HTML::script('assets/js/chart-master/Chart.js') }}
        {{ HTML::script('assets/js/jquery.js') }}
        {{ HTML::script('assets/js/jquery-1.8.3.min.js')}}
            
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style>
        //@section('styles')
            
        //@show
        </style>

    </head>

    <body>


  <section id="container" >
     
        @include("layouts.header")
        @include("layouts.sidebar")


        <!--main content start-->
           
                        <!-- Content -->
        @yield('content')

        <!--main content end-->

      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 - Sekolah Tinggi Ilmu Statistik
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    {{ HTML::script('assets/js/bootstrap.min.js')}}
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/maps/modules/map.js"></script>
    
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    {{ HTML::script('assets/js/jquery.scrollTo.min.js')}}
    {{ HTML::script('assets/js/jquery.nicescroll.js')}}
    {{ HTML::script('assets/js/jquery.sparkline.js')}}




        <!--highcharts JS-->
        
        <script src="http://code.highcharts.com/maps/highmaps.js"></script>
        {{ HTML::script('js/modules/exporting.js') }}
        {{ HTML::script('js/peta.js') }}
        {{ HTML::script('js/daily.js') }}

    <!--common script for all pages-->
    {{ HTML::script('assets/js/common-scripts.js') }}
    
    {{ HTML::script('assets/js/gritter/js/jquery.gritter.js')}}
    {{ HTML::script('assets/js/gritter-conf.js')}}

    <!--script for this page-->
    {{ HTML::script('assets/js/sparkline-chart.js')}}    
    {{ HTML::script('assets/js/zabuto_calendar.js')}}    
    
    @if(Request::url()=="http://localhost/sisjarlap/public" )
    <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Website Monitoring PKL54!',
            // (string | mandatory) the text inside the notification
            text: 'Ini adalah website monitoring survey PKL 54 untuk melihat progress dari listing dan pencacahan pada PKL 54 Kali ini',
            // (string | optional) the image to display on the left
            image: 'assets/img/home.png',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
    </script>
    @endif


    <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>

      
      