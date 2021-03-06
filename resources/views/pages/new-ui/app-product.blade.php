<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('new-ui/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/shopping-cart.png')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>{{$productX[0]->product_name}} - {{$business[0]->business_name}}</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{asset('new-ui/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('new-ui/css/material-kit.css')}}" rel="stylesheet"/>

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('new-ui/css/demo.css')}}" rel="stylesheet" />
    {{--<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>--}}

	<style>
        .btn-success{
            background-color: rgb(191,13,64) !important;
        }

        .navbar-default{
            background-color: black !important;
        }

		.section {
            padding: 30px 0;
            position: relative;
            background-color: #FFFFFF;
        }

        .tab-content img {
            width: 100%;
            height: auto;
        }

        .description a{
            color: rgb(0,32,96) !important;
            margin-bottom: 200px !important;

        }

        .copyright a{
            color: black;
        }

        footer a:hover, a:focus, a:hover{
            color: rgb(191,13,64) !important;
        }

        a.btn-success:hover, #navigation-doc a:hover{
            color:white !important;
        }

        .carousel-indicators li{
            background-color: black !important;
            border-color: black !important;
        }

        .price{
            font-size: 2em;
        }

        body{
            background-color: white;
        }

        .title{
            margin-top: -5px;
            margin-bottom: 10px;
            min-height: 32px;
        }

        div#accordion.panel-group{
            margin-top: 20px;
        }

        .panel-heading{
            background-color: white !important;
        }

        .card-raised{
            box-shadow: none;
        }

        .card{
            box-shadow: none;
        }

        .carousel-inner>.item>img{
            padding:50px;
        }

        /*.nbs-flexisel-inner {*/
            /*overflow: hidden;*/
            /*float: left;*/
            /*width: 100%;*/
        /*}*/

        /*.nbs-flexisel-container {*/
            /*position: relative;*/
            /*min-width: 100%;*/
        /*}*/

        /*.nbs-flexisel-ul {*/
            /*position: relative;*/
            /*width: 9999px;*/
            /*padding: 0px;*/
            /*list-style-type: none;*/
        /*}*/

        /*.nbs-flexisel-item {*/
            /*float: left;*/
            /*margin: 0px;*/
            /*padding: 0px;*/
            /*cursor: pointer;*/
            /*line-height: 0px;*/
            /*position: relative;*/
        /*}*/

        .panel-group .panel {
            border: 0;
            border-bottom: 1px solid #DDDDDD;
            box-shadow: none;
        }

        @media only screen
        and (min-device-width: 375px)
        and (max-device-width: 667px)
        and (-webkit-min-device-pixel-ratio: 2)
        and (orientation: portrait) {
            
            .title{
                margin-top: 15px;
                margin-bottom: 1px;
                min-height: 32px;
            }

            .nbs-flexisel-item{
                max-width: 150px;
                margin-right: 54px !important;
            }

            img.pdt-img-sm{
                max-width: 185px !important;
            }

        }

        @media (max-width:1440px){
            .nbs-flexisel-item{
                max-width: 250px;
                margin-right: 65px !important;
            }

            img.pdt-img-sm{
                max-width: 275px !important;
            }
        }

        @media (max-width:1080px){

            .nbs-flexisel-item{
                max-width: 200px;
                margin-right: 40px !important;
            }

            img.pdt-img-sm{
                max-width: 225px !important;
            }

        }

	</style>
</head>

<body>

<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button id="menu-toggle" type="button" class="navbar-toggle" data-target="#navigation-doc">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>
      <a href="/">
           <div class="logo-container">
                <div class="logo">
                    <img src="{{asset('img/shopping-cart.png')}}" alt="LytesApp">
                </div>
                <div class="brand" style="font-size:1.5em;margin-top:0.4em; width:300px; color:white">
	                    LytesApp <br><span style="font-size:0.5em; font-weight:200">Join the rest of the world. Let's get online</span>
	                </div>
            </div>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navigation-doc">
		<ul  class="nav navbar-nav navbar-right">
			<li>
				<a href="/">Home</a>
			</li>
			<li>
                <a href="/login"><i class="material-icons">input</i>Sign In</a>
            </li>
			<li>
                <a rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/LytesApp/" target="_blank" class="btn btn-white btn-simple btn-just-icon" style="color:white">
                    <i class="fa fa-facebook-square"></i>
                </a>
                </li>
    	</ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="wrapper">
        <div class="section">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                       <div class="tab-content">
                                    <div class="tab-pane active" id="product-page1">
                                        <!-- Carousel Card -->
                                        <div class="card card-raised card-carousel">
                                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                                <div class="carousel slide" data-ride="carousel">

                                                    <!-- Indicators -->
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                                    </ol>

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner">
                                                        <div class="item active">
                                                            <img src="{{asset(str_replace("public","storage",$productX[0]->product_images)."/product_1.jpg")}}">
                                                            <div class="carousel-caption">
                                                                <!-- <h4><i class="material-icons">location_on</i> Yellowstone National Park, United States</h4> -->
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <img src="{{asset(str_replace("public","storage",$productX[0]->product_images)."/product_2.jpg")}}">
                                                        </div>
                                                        <div class="item">
                                                            <img src="{{asset(str_replace("public","storage",$productX[0]->product_images)."/product_3.jpg")}}">
                                                        </div>
                                                    </div>

                                                    <!-- Controls -->
                                                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                                        <i class="material-icons">keyboard_arrow_left</i>
                                                    </a>
                                                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                                        <i class="material-icons">keyboard_arrow_right</i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Carousel Card -->
                                      </div>

                        </div>
                        <div class="clearout"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-details">
                              <h3 class="title">{{$productX[0]->product_name}}</h3>
                          <p class="description">
                              <a href="/{{$business_slug}}">{{$business[0]->business_name}}</a>
                          </p><br>
        
                          <span class="price">GHS {{$productX[0]->product_price}}</span>
                        </div>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Product Description
                                </a>
                              </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                              <div class="panel-body" style="text-align: justify">
                                  {{$productX[0]->product_description}}
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                              <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Contact Shop
                                </a>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="panel-body">
                                <ol style="padding-left: 20px;">
                                    <li style="list-style-position: outside; list-style-type:none">
                                            <i class="fa fa-phone-square"></i>
                                        {{$business[0]->business_number}}
                                    </li>
                                    <li style="list-style-position: outside;list-style-type:none"> 
                                            <i class="fa fa-envelope"></i>
                                        {{$business[0]->business_email}}
                                    </li>
                                    <li style="list-style-position: outside;list-style-type:none"> 
                                            <i class="fa fa-map-marker"></i>
                                        {{$business[0]->business_area}}
                                    </li>
        
                                </ol>
                              </div>
                            </div>
                          </div>
                           <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                              <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                 Buy
                                </a>
                              </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                              <div class="panel-body">
                                Visit store to get product or call if delivery is available.
                              </div>
                            </div>
                          </div>
                        </div> <!-- Acordeon  -->
                        <div class="actions">
                                <div class="pull-left">
                                  
                                </div>
                                <div class="pull-right">
                                  <!--<button class="btn btn-danger btn-simple btn-hover" rel="tooltip" title="" data-placement="left" data-original-title="Like">
                                            <i class="fa fa-heart-o"></i>
                                  </button>-->
                                  <a type="button" class="btn btn-success" href="/{{$business_slug}}">Visit Store</a>
                                </div>
                        </div>
                    </div>
                  </div>
                  
                </div>
            </div>

    
</div>

    <footer class="footer footer-transparent">
        <div class="container">
            <nav class="pull-left">
                <ul>
					<li>
						<a href="/">
							Lytes.App
						</a>
					</li>
					<li>
						<a href="/about">
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
            <div class="social-area pull-right">

            </div>
            <div class="copyright" style="text-align: right">
                    &copy; 2018 Lytes.App | <a href="mailto:info@lytesapp.com"> info@lytesapp.com
                    <i class="fa fa-envelope" aria-hidden="true"></i> </a>
            </div>
        </div>
    </footer>

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

    <script>
        var header_height;
        var fixed_section;
        var floating = false;

        $().ready(function(){
            suggestions_distance = $("#suggestions").offset();
            pay_height = $('.fixed-section').outerHeight();

			$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
        });
    </script>

</html>
