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
	  		{{ Form::open(array('url' => 'register', 'class' => 'form-login')) }}
		      
		        <h2 class="form-login-heading">Please Sign Up</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="Username" name="username" autofocus>
		            {{ $errors->first('username') }}
		            <br>
		            <input type="email" class="form-control" placeholder="E-Mail Adress" name="email">
		            {{ $errors->first('email') }}
		            <br>
		            <input type="text" class="form-control" placeholder="ID PKL" name="idpkl">
		            {{ $errors->first('idpkl') }}
		            <br>
		            <div class="form-group">
					  <label for="sel2">Bidang :</label>
					  <select name="bidang" class="form-control" id="sel2">
					    <option value="1">Ekonomi</option>
					    <option value="2">Sosial Kependudukan</option>
					  </select>
					</div>
		            <div class="form-group">
					  <label for="sel1">Daftar Sebagai :</label>
					  <select name="jabatan" class="form-control" id="sel1">
					    <option value="1">Dosen</option>
					    <option value="2">Korwil/Korlap</option>
					    <option value="3">Kortim</option>
					    <option value="4">PCL</option>
					  </select>
					</div>
		            <input type="password" class="form-control" placeholder="Password" name="password">
		            {{ $errors->first('password') }}
		            <br>
		            <input class="form-control" placeholder="Password Confirmation" name="password_confirmation" type="password">
		            {{ $errors->first('password_confirmation') }}
		            <br>	
				    <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN UP</button>
		        </div>
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
