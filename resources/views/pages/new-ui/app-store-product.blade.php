<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('new-ui/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('new-ui/img/favicon.png')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Shelf - Lytes.App</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{asset('new-ui/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('new-ui/css/material-kit.css')}}" rel="stylesheet"/>

</head>

<body class="profile-page">
	<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
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
                            <a href="/{{$business->business_slug}}">
                                    <i class="material-icons">store</i> Store
                            </a>
    				</li>
    				<li>
                            <a href="/{{$business->business_slug}}/shelves">
                                    <i class="material-icons">storage</i> Shelves
                            </a>
                    </li>
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings &nbsp<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="/{{$business->business_slug}}/change">Change Password</a></li>
                              <li><a href="#">Edit Profile</a></li>
                            </ul>
                    </li>
		            <li>
                            <a href="/logout">
                                    <i class="material-icons">exit_to_app</i> Logout
                            </a>
                    </li>
		            <!-- <li>
		                <a href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-facebook-square"></i>
						</a>
		            </li>
					<li>
		                <a href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-instagram"></i>
						</a>
		            </li> -->
        		</ul>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('new-ui/img/storeee.jpeg');">
            <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h1 class="title text-center" style="color:white; margin-top:120px;">Add New Product</h1>
                        </div>
                    </div>
                </div>
        </div>

		<div class="main main-raised">
			<div class="profile-content">
	            <div class="container">
	                

					<div class="row">
                       <br>
						<div class="col-md-8 col-md-offset-2">
                                
                            <form class="form" method="" action=""> 

                                    <h3>Product Details</h3>
                                    <legend></legend>
                                            <div class="col-sm-12">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Product Name*</label>
                                                        <input type="text" class="form-control" name="business_owner_last_name">
                                                    </div>
                                            </div>
                                            <div class="col-sm-12">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Describe your product*</label>
                                                        <textarea class="form-control" placeholder="" rows="3"></textarea>                        
                                                    </div>
                                            </div>
                                            <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                            <select class="form-control">
                                                                <option value="" selected>Choose Shelf</option>
                                                                <option>New</option>
                                                                <option>Used</option>
                                                                <option>Prefer not to say</option>
                                                            </select>
                                                            <label class="control-label">Shelf*</label>                                                                                                                                                                                                                                                                                                            
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                            <select class="form-control">
                                                              <option disabled="" selected>Choose Category</option>
                                                              <option>Electronics</option>
                                                              <option>Education</option>
                                                              <option>Food</option>
                                                            </select>
                                                    </div>
                                            </div>
                                            <div class="col-sm-6">
                                                    <div class="form-group">
                                                            <select class="form-control">
                                                              <option disabled="" selected="">Product Condition</option>
                                                              <option>New</option>
                                                              <option>Used</option>
                                                              <option>Prefer not to say</option>
                                                            </select>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group label-floating">
                                                            <label class="control-label">Price</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control">
                                                                <span class="input-group-addon">GHS</span>
                                                            </div>
                                                    </div>
                                                    <!-- <label class="control-label">Date of Birth</label>-->
                                            </div>
                            </form>
                            
                                            
                            <!-- End Profile Tabs -->
                            <br>
                        </div>
                        
                        
	                </div>

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
                &copy; 2018 Lytes.App | Theme <i>by </i> <a href="http://www.creative-tim.com" target="_blank"> &nbspCreative Tim</a>    
            </div>
        </div>
    </footer>


</body>
    <script src="{{asset('new-ui/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('new-ui/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('new-ui/js/material.min.js')}}"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{asset('new-ui/js/nouislider.min.js')}}"type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    {{--<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>--}}

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="{{asset('new-ui/js/material-kit.js')}}" type="text/javascript"></script>
    
    <script>
        $('[data-toggle="tooltip"]').tooltip();
    </script>

</html>
