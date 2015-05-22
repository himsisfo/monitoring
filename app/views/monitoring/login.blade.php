<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>PKL 54 - Monitoring</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  		
	  		            @if ($message = Session::get('status'))
                        <div class="col-lg-12 mt">	
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <h4>Success</h4>
                                {{{ $message }}}
                            </div>
                        </div>
                        @elseif(($message = Session::get('error')))
                        <div class="col-lg-12 mt">	
                        <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <h4>failed</h4>
                                {{{ $message }}}
                            </div>
                        </div>
                        @endif



			{{ Form::open(array('url' => 'login','name'=>'form-login', 'class' => 'form-login')) }}
		      
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		        	<div class="control">
			            <input type="text" class="form-control" placeholder="Username" name="username" autofocus>
			            {{ $errors->first('username') }}
		            </div>
		            <br>
		            <div class="control">
			            <input type="password" class="form-control" placeholder="Password" name="password">
			            {{ $errors->first('password') }}
			        </div>
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Belum punya akun? Forgot Password?</a>
		                </span>
		            </label>

		            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		        	
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                  	<div class="modal-body text-center">	
								<div class="alert alert-danger" role="alert">
									<h4>hubungi adminganteng(087863969334 / 085640397405)</h4>

								</div>
		                  	</div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
    	//ganti ini untuk set background
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
