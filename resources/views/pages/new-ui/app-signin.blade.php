<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('new-ui/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" href="{{asset('new-ui/img/favicon.png')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Sign-In - Lytes.App</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="{{asset('new-ui/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('new-ui/css/material-kit.css')}}" rel="stylesheet"/>

	<style>
		#error-msg{
			text-align: center !important;
			margin-top: 15px !important;
			margin-bottom: -10px !important;
			font-size: 1em !important;
			color:firebrick;
		}
	</style>

</head>

<body class="signup-page">
	<nav class="navbar navbar-transparent navbar-absolute">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
                <a class="navbar-brand" href="app.blade.php" style="line-height:15px!important;">Lytes.App<br>
                    <span style="font-size:0.5em; font-weight:200; margin-bottom:-8em !important;">Shop anywhere</span>
                </a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
					<li>
    					<a href="/">
							<i class="material-icons">home</i> Home
    					</a>
    				</li>
					<li>
						<a href="/register">
							<i class="material-icons">store</i> New Shop
						</a>
					</li>
					<li>
						<a href="/search">
							<i class="material-icons">search</i> Search
						</a>
					</li>
		            <!-- <li>
		                <a href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-twitter"></i>
						</a>
		            </li> -->
		            <li>
		                <a href="https://www.facebook.com/LytesApp/" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-facebook-square"></i>
						</a>
		            </li>
					<!-- <li>
		                <a href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-instagram"></i>
						</a>
		            </li> -->
        		</ul>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('new-ui/img/city.jpg'); background-size: cover; background-position: top center;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card card-signup">
							<form class="form" action="{{url('login')}}" method="POST">
								<div class="header header-primary text-center">
									<h4>Sign In</h4>
									<!--<div class="social-line">
										<a href="#pablo" class="btn btn-simple btn-just-icon">
											<i class="fa fa-facebook-square"></i>
										</a>
										<a href="#pablo" class="btn btn-simple btn-just-icon">
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#pablo" class="btn btn-simple btn-just-icon">
											<i class="fa fa-google-plus"></i>
										</a>
									</div>-->
								</div>
								<p class="text-divider">Welcome, Business Owner!</p>
								<p id="error-msg">
									@if(isset($error))
										<span class="label label-danger">{{$error}}</span>
									@endif
								</p>
								<div class="content">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
										<input type="text" class="form-control" placeholder="Email..." name="username">
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" placeholder="Password..." class="form-control" name="password"/>
									</div>
									<input type="hidden" name="_token" value="{{csrf_token()}}">


									<!-- If you want to add a checkbox to this form, uncomment this code

									<div class="checkbox">
										<label>
											<input type="checkbox" name="optionsCheckboxes" checked>
											Subscribe to newsletter
										</label>
									</div> -->
								</div>
								<div class="footer text-center">
									<button class="btn btn-simple btn-primary btn-lg" type="submit">LOGIN</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<footer class="footer">
		        <div class="container">
		            <nav class="pull-left">
						<ul>
							<li>
								<a href="/">
									Lytes.App
								</a>
							</li>
							<li>
								<a href="">
								   About Us
								</a>
							</li>
							<li>
								<a href="/search">
								   Search
								</a>
							</li>
							<li>
								<a href="/register">
									Join Us
								</a>
							</li>
						</ul>
		            </nav>
		            <div class="copyright pull-right">
		                &copy; 2018 Lytes.App | Theme <i>by</i> <a href="http://www.creative-tim.com" target="_blank"> &nbspCreative Tim</a>
		            </div>
		        </div>
		    </footer>

		</div>

    </div>


</body>
	<!--   Core JS Files   -->
	<script src="{{asset('new-ui/js/jquery.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('new-ui/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('new-ui/js/material.min.js')}}"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="{{asset('new-ui/js/nouislider.min.js')}}"type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	{{--<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>--}}

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="{{asset('new-ui/js/material-kit.js')}}" type="text/javascript"></script>

</html>
