<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <meta name="keywords" content="Lytes, LytesApp, Ecommerce, Shopping, Online, Ghana, Online Shopping Ghana, sell online, sell, buy and sell">
    <meta name="description" content="Shop online, set up online shop under few minutes">
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('new-ui/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" href="{{asset('img/shopping-cart.png')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Home - LytesApp</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="{{asset('new-ui/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('new-ui/css/material-kit.css')}}" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('new-ui/css/demo.css')}}" rel="stylesheet" />
    <link href="{{asset('new-ui/css/extras.css')}}" rel="stylesheet"/>


    <style>
        body{
            background-color: black;
        }

		.navbar-color-on-scroll{
			background-color: rgb(0,32,96);
		}

		.navbar .navbar-nav > li > a {
			color: inherit;
			font-weight: 400;
			font-size: 12px !important;
			text-transform: uppercase;
			border-radius: 3px;
		}

		.logo-container .logo {
			border: 0 !important;
			border-radius: 0 !important;
		}

		.shop{
			background-color: rgb(0,32,96) !important;
			font-size: 1.5em;

		}

		#title-lbl{
			/*font-family: 'Patrick Hand', cursive !important;*/
			font-weight: 400 !important;

		}

        footer, #links a{
            color:white !important;
        }



        .btn-simple{
            color:white !important;
        }

        #slider-5 .capt{
            left: 30%;
        }


		@media screen and (min-width: 360px){
			.brand{
				width:200px !important;
			}
			div.col-md-12.capt{
				font-size: 0.4em;
				left: 50%;
				top: 30%;
			}

			.title{
				font-size: 2.2em;
			}

			.shop{
				margin-top:-9em;
				max-height: 30px;
				max-width: 120px;
				font-size: 1.5em !important;
				/* padding: 0;     */
				padding: 5px 5px 5px 5px !important;

			}
			.shop i{
				font-size: 1.3em !important;
			}

            #slider-5 .shop, #slider-3 .shop, #slider-2 .shop {
                margin-top: -5em;
            }

            .carousel-indicators{
                width:70%;
                left:45%;
            }

            .carousel .carousel-indicators{
                bottom:-10px;
            }

            #slider-2 .capt {
                /*left: 20%;*/
            }


            #slider-3 h2.title{
                color:black;
            }

            #slider-5 .capt{
                left: 30%;
            }

            #slider-5 .capt{
                left: 70%;
            }

		}


        @media screen and (min-width: 1024px){
            div.col-md-12.capt{
                left: 50%;
                top: 30%;
            }

            .shop{
                margin-top:-1.7em !important;
				max-height: 50px;
				max-width: 420px;
				font-size: 2.5em !important;
				padding: 15px 20px 20px 20px !important;


			}

			.title{
				font-size: 5.5em;
			}
        }

		@media screen and (min-width: 768px){
			div.col-md-12.capt{
				left: 50%;
				top: 30%;
			}

			.shop{
				margin-top:-2.2em;
			}
		}

		@media only screen
		and (min-device-width: 768px)
		and (min-device-height: 1024px){
			div.col-md-12.capt{
				left: 50%;
				top: 30%;
			}


			.shop{
				margin-top:-1.7em;
				max-height: 50px;
				max-width: 420px;
				font-size: 3.5em !important;
				padding: 15px 20px 20px 20px !important;
			}



			.title{
				font-size: 5.2em;
			}
		}

        @media only screen
        and (min-device-width: 375px)
        and (max-device-width: 667px)
        and (-webkit-min-device-pixel-ratio: 2)
        and (orientation: portrait) {

            #slider-5 .capt{
                left: 30%;
            }

            .brand {
                width: 200px !important;
            }

            div.col-md-12.capt {
                font-size: 0.4em;
                left: 50%;
                top: 30%;
            }

            .title {
                font-size: 2.7em;
            }

            .shop {
                margin-top: -8em;
                max-height: 30px;
                max-width: 120px;
                font-size: 1.5em !important;
                /* padding: 0;     */
                padding: 5px 5px 5px 5px !important;

            }

            .shop i {
                font-size: 1.7em;
            }

            #slider-5 .shop, #slider-3 .shop, #slider-2 .shop {
                margin-top: -5em;
            }

            #slider-5 .capt {
                top: 20%;
            }

            #slider-1 .capt {
                top: 20%;
            }

            #slider-1 .shop{
                margin-top: -5em;
            }

            #slider-4 .shop i{
                font-size: 1em ;
            }

            #slider-3 h2.title{
                color:black;
            }
        }

    </style>

</head>

<body class="index-page">
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
	    	<a href="/">
	        	<div class="logo-container">
	                <div class="logo">
	                    <img src="{{asset('img/shopping-cart.png')}}" alt="Creative Tim Logo" rel="tooltip" title="<b>Lytes.App</b> Is Ghana's premier shopping catalog. Search for anything you need." data-placement="bottom" data-html="true">
	                </div>
	                <div class="brand" style="font-size:1.5em;margin-top:0.4em; width:300px">
	                    <span id="title-lbl">LytesApp </span><br><span style="font-size:0.5em; font-weight:400 !important;">Join the rest of the world. Let's get online.</span>
	                </div>

				</div>
	      	</a>
	    </div>

	    <div class="collapse navbar-collapse" id="navigation-index">
	    	<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="/search" style="font-size:1.2em;">
						<i class="material-icons">search</i> Search
					</a>
				</li>
				<li>
					<a href="/register" style="font-size:1.2em;">
						<i class="material-icons">store</i> New Shop
					</a>
				</li>
				<li>
					<a href="/login" style="font-size:1.2em;">
						<i class="material-icons">input</i> Sign In
					</a>
				</li>
				<!-- <li>
					<a rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-twitter"></i>
					</a>
				</li> -->
				<li>
					<a rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/LytesApp/" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-facebook-square"></i>
					</a>
				</li>
				<!-- <li>
					<a rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-instagram"></i>
					</a>
				</li> -->

	    	</ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->

<div class="section" id="carousel">
    <div class="container" style="width:100%">
        <div class="row">
            <div class="col-md-12">

                <!-- Carousel Card -->
                <div class="card card-raised card-carousel">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <div class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active" id="slider-1">
                                    <img src="{{asset('new-ui/img/shopping-1.jpeg')}}" alt="Awesome Image">
                                    <div class="col-md-12 capt" style="position:absolute; z-index:100 !important; bottom:20px; text-shadow:none;">
                                        <h2 class="title" style="overflow: auto !important;">Compare prices from many shops</h2>
                                        <a class="btn btn-danger btn-raised btn-lg shop" href="/search">
                                            <i class="fa fa-search"></i> &nbspSearch Products
                                        </a>
                                    </div>
                                    <div class="carousel-caption">
                                        <!-- <h4><i class="material-icons">location_on</i> Yellowstone National Park, United States</h4> -->
                                    </div>
                                </div>
                                <div class="item" id="slider-2">
                                    <img src="{{asset('img/slider-2.jpeg')}}" alt="Awesome Image">
                                    <div class="col-md-12 capt" style="position:absolute; z-index:100 !important; bottom:20px; text-shadow:none;">
                                            <h2 class="title" style="color:white">Search products from many shops</h2>
                                            <a class="btn btn-danger btn-raised btn-lg shop" href="/search">
                                                <i class="fa fa-search"></i> &nbspSearch Products
                                            </a>
                                    </div>
                                    <div class="carousel-caption">
                                        <!-- <h4><i class="material-icons">location_on</i> Somewhere Beyond, United States</h4> -->
                                    </div>

                                </div>
                                <div class="item" id="slider-3">
                                    <img src="{{asset('img/slider-8.jpeg')}}" alt="Awesome Image">
                                    <div class="col-md-12 capt" style="position:absolute; z-index:100 !important; bottom:20px; text-shadow:none;">
                                            <h2 class="title" style="color:white">Manage your shop to your <br>preference</h2>
                                            <a class="btn btn-danger btn-raised btn-lg shop" href="/register" style="background-color: rgb(191,13,64) !important;">
                                                <i class="fa fa-home"></i> &nbspAdd Store
                                            </a>
                                    </div>
                                    <div class="carousel-caption">
                                        <!-- <h4><i class="material-icons">location_on</i> Yellowstone National Park, United States</h4> -->
                                    </div>
                                </div>
                                <div class="item" id="slider-4">
                                    <img src="{{asset('img/slider-10.jpeg')}}" alt="Awesome Image">
                                    <div class="col-md-12 capt" style="position:absolute; z-index:100 !important; bottom:20px; text-shadow:none;">
                                            <h2 class="title" style="color:white">Sellers you can trust</h2>
                                            <a class="btn btn-danger btn-raised btn-lg shop" href="/search">
                                                <i class="fa fa-search"></i> &nbspSearch Products
                                            </a>
                                    </div>
                                    <div class="carousel-caption">
                                        <!-- <h4><i class="material-icons">location_on</i> Yellowstone National Park, United States</h4> -->
                                    </div>
                                </div>
                                <div class="item" id="slider-5">
                                    <img src="{{asset('img/slider-5.jpg')}}" alt="Awesome Image">
                                    <div class="col-md-12 capt" style="position:absolute; z-index:100 !important; bottom:20px; text-shadow:none;">
                                            <h2 class="title" style="color:white;">Tell the world when <br> you are opened</h2>
                                            <a class="btn btn-danger btn-raised btn-lg shop" href="/register" style="background-color: rgb(0,32,96)!important;">
                                                <i class="fa fa-home"></i> &nbspAdd Store
                                            </a>
                                    </div>
                                    <div class="carousel-caption">
                                        <!-- <h4><i class="material-icons">location_on</i> Yellowstone National Park, United States</h4> -->
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{asset('img/slider-9.jpeg')}}" alt="Awesome Image">
                                    <div class="col-md-12 capt" style="position:absolute; z-index:100 !important; bottom:20px; text-shadow:none; left:10% !important;">
                                        <h2 class="title" style="color:white">Move from local to global </h2>
                                            <a class="btn btn-danger btn-raised btn-lg shop" href="/register" style="background-color: rgb(191,13,64) !important;">
                                                <i class="fa fa-home"></i> &nbspAdd Store
                                            </a>
                                    </div>
                                    <div class="carousel-caption">
                                        <!-- <h4><i class="material-icons">location_on</i> Yellowstone National Park, United States</h4> -->
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <!--<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <i class="material-icons">keyboard_arrow_left</i>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <i class="material-icons">keyboard_arrow_right</i>
                            </a>-->
                        </div>
                    </div>
                </div>
                <!-- End Carousel Card -->

            </div>
        </div>
    </div>
</div>

	@include('modules.footers.main-footer')
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

	<script type="text/javascript">

		$().ready(function(){
			// the body of this function is in assets/material-kit.js

			materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}



		});


	</script>
</html>
