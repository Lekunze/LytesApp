<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('new-ui/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" href="{{asset('img/shopping-cart.png')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>{{$business[0]->business_name}}</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="{{asset('new-ui/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('new-ui/css/material-kit.css')}}" rel="stylesheet"/>
	<link href="{{asset('new-ui/css/extras.css')}}" rel="stylesheet"/>

	<style>

		.navbar-color-on-scroll{
			background-color: rgb(0,32,96);
		}

		.nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
			background-color: rgb(0, 32, 96);
		}


		.row.sharing-area.text-center a{
			color: rgb(191,13,64) !important;

		}


	</style>


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
        		<a class="navbar-brand" href="/" style="line-height:15px!important;">Lytes.App<br>
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
		                <a data-toggle="tooltip" data-placement="bottom" title="Receive deals and new products notifications from Shop. COMING SOON!" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-bell"></i>
						</a>
		            </li>
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
	                            <img src="<?php echo asset($business[0]->business_images."/logo.jpg")?>" alt="Circle Image" class="img-circle img-responsive img-raised">
	                        </div>
	                        <div class="name">
	                            <h3 class="title">{{$business[0]->business_name}} <span class="label label-success">Open</span> </h3>
                                <!-- <h6>Electronics</h6> -->
                                <div class="row sharing-area text-center">
                                        <a href="#" style="margin-left:0.25em; margin-right:0.25em" class="col-xs-12">
                                            <i class="fa fa-phone-square"></i>
											{{$business[0]->business_number}}
                                        </a>
                                        <a href="#" style="margin-left:0.25em; margin-right:0.25em" class="col-xs-12">
                                            <i class="fa fa-envelope"></i>
											{{$business[0]->business_email}}
                                        </a>
                                        <a href="#" style="margin-left:0.25em; margin-right:0.25em" class="col-xs-12">
                                            <i class="fa fa-map-marker"></i>
											{{$business[0]->business_area}}
                                        </a>
                                </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="description text-center">
                        <p>
							{{$business[0]->business_description}}
						</p>
	                </div>

					<div class="row">
						<div class="col-md-7 col-md-offset-2">
							<div class="profile-tabs">
			                    <div class="nav-align-center">
									<ul class="nav nav-pills" role="tablist">
										@if(!empty($shelves))
											@foreach($shelves as $shelf)
												<li>
													<a href="#{{$shelf->shelf_name}}" role="tab" data-toggle="tab">
														<i class="material-icons">camera</i>
														{{$shelf->shelf_name}}
													</a>
												</li>
											@endforeach
										@endif
				                    </ul>

				                    <div class="tab-content gallery">
										@if(!empty($shelves) && !empty($products))
											@foreach($shelves as $shelf)
												<div class="tab-pane active" id="{{$shelf->shelf_name}}">
													<div class="row">

														@foreach($products as $product)
															@if($product->sid == $shelf->id)
																<div class="col-md-6">
																	<a href="/{{$business->business_slug}}/{{$product->product_slug}}">
																		<img src="<?php echo asset($product->product_images."/product_1.jpg")?>" class="img-rounded" />
																	</a>
																</div>

															@endif
														@endforeach

													</div>
												</div>

											@endforeach
										@endif

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

    
    @include('modules.footers.main-footer')


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
