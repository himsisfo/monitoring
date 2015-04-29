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

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- CSS are placed here -->
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-theme.css') }}
        {{ HTML::style('css/styles.css') }}
        {{ HTML::style('css/signin.css') }}
        {{ HTML::script('js/script3.js') }}
        {{ HTML::script('js/clock.js') }}

        <style>
        @section('styles')
            body {
                padding-top: 60px;
            }
            #footer {
               position:fixed;
               bottom:0;
               width: 100%;
               margin:0;
               height:30px;   /* Height of the footer */
            }
        @show
        </style>



    </head>

    <body>
   


         <!-- Navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top alt" data-spy="affix" data-offset-top="1000" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    @if ( Auth::guest() )
                        <a class="navbar-brand" href="#">Kepoers</a>
                    @else
                        <a class="navbar-brand" href="#">Kepoers | {{Auth::user()->username}}</a>
                    @endif
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    
                </div>
                <!-- Everything you want hidden at 940px or less, place within here -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{{ URL::to('') }}}">Home</a></li>
                        @if ( Auth::guest() )
                            <li>{{ HTML::link('login', 'Login') }}</li>
                            <li>{{ HTML::link('register', 'Register') }}</li>
                        @else
                            <li>{{ HTML::link('', 'Info') }}</li> 
                            <li>{{ HTML::link('question', 'Pertanyaan')}}</li> 
                            <li>{{ HTML::link('profile', 'Profile') }}</li>     
                            <li>{{ HTML::link('logout', 'Logout') }}</li>
                        @endif
                    </ul> 
                </div>
            </div>
        </div> 

        <!-- Container -->
        
                    <div class="container">

                        <!-- Success-Messages -->
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <h4>Success</h4>
                                {{{ $message }}}
                            </div>
                        @endif

                        <!-- Content -->
                        @yield('content')

                    </div>
               
        <footer id="footer">
            <div  class="text-right">
            <p>2015&COPY;KEPOERS</p>                
            </div>
        </footer>
   
        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery-1.11.2.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/scripts.js') }}

    </body>
</html>