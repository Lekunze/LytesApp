<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('new-ui/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" href="{{asset('new-ui/img/favicon.png')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Shop - Lytes.App</title>

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
    					<a href="/">
    						Home
    					</a>
    				</li>
    				<li>
                            <a href="/register">
                                    <i class="material-icons">store</i> New Shop
                            </a>
                        </li>
		            <li>
		                <a data-toggle="tooltip" data-placement="bottom" title="Receive deals and new products notifications from Shop" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-bell"></i>
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
		<div class="header header-filter" style="background-image: url('new-ui/img/storeee.jpeg');"></div>

		<div class="main main-raised">
			<div class="profile-content">
	            <div class="container">
	                <div class="row">
	                    <div class="profile">
	                        <div class="avatar">
	                            <img src="{{asset('new-ui/img/logo-4.jpg')}}" alt="Circle Image" class="img-circle img-responsive img-raised">
	                        </div>
	                        <div class="name">
	                            <h3 class="title">God Dey Electrical Shop <span class="label label-success">Open</span> </h3>
                                <!-- <h6>Electronics</h6> -->
                                <div class="row sharing-area text-center">
                                        <a href="#" style="margin-left:0.25em; margin-right:0.25em" class="col-xs-12">
                                            <i class="fa fa-phone-square"></i>
                                            0302-444222
                                        </a>
                                        <a href="#" style="margin-left:0.25em; margin-right:0.25em" class="col-xs-12">
                                            <i class="fa fa-envelope"></i>
                                            info@business.com
                                        </a>
                                        <a href="#" style="margin-left:0.25em; margin-right:0.25em" class="col-xs-12">
                                            <i class="fa fa-map-marker"></i>
                                            Adenta
                                        </a>
                                </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="description text-center">
                        <p>Donec eget dolor maximus, imperdiet lectus ullamcorper, finibus augue. Donec suscipit pellentesque luctus. Integer a blandit nibh. 
                                Cras vitae eleifend velit.
                        </p>
	                </div>

					<div class="row">
						<div class="col-md-7 col-md-offset-2">
							<div class="profile-tabs">
			                    <div class="nav-align-center">
									<ul class="nav nav-pills" role="tablist">
										<li class="active">
											<a href="#studio" role="tab" data-toggle="tab">
												<i class="material-icons">camera</i>
												Desktop
											</a>
										</li>
										<li>
				                            <a href="#work" role="tab" data-toggle="tab">
												<i class="material-icons">palette</i>
												Laptop
				                            </a>
				                        </li>
				                        <li>
				                            <a href="#shows" role="tab" data-toggle="tab">
												<i class="material-icons">favorite</i>
				                                Motherboard
				                            </a>
				                        </li>
				                    </ul>

				                    <div class="tab-content gallery">
										<div class="tab-pane active" id="studio">
				                            <div class="row">
												<div class="col-md-6">
													<img src="{{asset('new-ui/img/laptop-1.jpeg')}}" class="img-rounded" />
													<img src="{{asset('new-ui/img/laptop-1.jpeg')}}" class="img-rounded" />
												</div>
												<div class="col-md-6">
													<img src="{{asset('new-ui/img/laptop-1.jpeg')}}" class="img-rounded" />
													<img src="{{asset('new-ui/img/laptop-1.jpeg')}}" class="img-rounded" />
                                                </div>
                                                
                                            </div>
				                        </div>
				                        <div class="tab-pane text-center" id="work">
											<div class="row">
												<div class="col-md-6">
													<img src="{{asset('new-ui/img/laptop-3.jpeg')}}" class="img-rounded" />
													<img src="{{asset('new-ui/img/laptop-4.jpeg')}}" class="img-rounded" />
													<img src="{{asset('new-ui/img/laptop-3.jpeg')}}" class="img-rounded" />
												</div>
												<div class="col-md-6">
													<img src="{{asset('new-ui/img/laptop-3.jpeg')}}" class="img-rounded" />
													<img src="{{asset('new-ui/img/laptop-4.jpeg')}}" class="img-rounded" />
												</div>
											</div>
				                        </div>
										<div class="tab-pane text-center" id="shows">
											<div class="row">
												<div class="col-md-6">
													<img src="{{asset('new-ui/img/mother-1.jpeg')}}" class="img-rounded" />
													<img src="{{asset('new-ui/img/mother-2.jpg')}}" class="img-rounded" />
												</div>
												<div class="col-md-6">
													<img src="{{asset('new-ui/img/mother-1.jpeg')}}" class="img-rounded" />
													<img src="{{asset('new-ui/img/mother-2.jpg')}}" class="img-rounded" />
												</div>
											</div>
				                        </div>

				                    </div>
								</div>
							</div>
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
    
    <script>
        $('[data-toggle="tooltip"]').tooltip();
    </script>

</html>