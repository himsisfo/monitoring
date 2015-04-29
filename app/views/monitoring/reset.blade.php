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
    {{ HTML::style('assets/css/bootstrap.css') }}

    <!--external css-->
    {{ HTML::style('assets/font-awesome/css/font-awesome.css') }}

    <!-- Custom styles for this template -->
    {{ HTML::style('assets/css/style.css') }}
    {{ HTML::style('assets/css/style-responsive.css') }}
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

		<div id="login-page">
	  	<div class="container">
	  		 @if ($message = Session::get('success'))
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

			<form action="{{ action('RemindersController@postReset') }}" method="POST">
			    <input type="hidden" name="token" value="{{ $token }}">
		  
		        <h2 class="form-login-heading">Reset Password</h2>
		        <div class="login-wrap">
		        	
		        	<div class="control">
			            <input type="email" class="form-control" placeholder="E-Mail" name="email" autofocus>
			            {{ $errors->first('email') }}
		            </div>
		            <br>
		            <div class="control">
			            <input type="password" class="form-control" placeholder="Password" name="password">
			            {{ $errors->first('password') }}
			        </div>
			        <br>
			        <div class="control">
			            <input type="password" class="form-control" placeholder="Password Confirmation" name="password_confirmation">
			            {{ $errors->first('password_confrimation') }}
			        </div>

		            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Reset Password</button>
		        	
		        </div>
		<form>

	</body>
</html>