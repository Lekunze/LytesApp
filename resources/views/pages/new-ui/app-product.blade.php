<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('new-ui/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('new-ui/img/favicon.png')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Product - Lytes.App</title>

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
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

	<style>
        .navbar-default{
            background-color: rgb(0,32,96) !important;
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

        .nbs-flexisel-inner {
            overflow: hidden;
            float: left;
            width: 100%;
        }

        .nbs-flexisel-container {
            position: relative;
            min-width: 100%;
        }
 
        .nbs-flexisel-ul {
            position: relative;
            width: 9999px;
            padding: 0px;
            list-style-type: none;
        }

        .nbs-flexisel-item {
            float: left;
            margin: 0px;
            padding: 0px;
            cursor: pointer;
            line-height: 0px;
            position: relative;
        }

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
      <a href="http://www.creative-tim.com">
           <div class="logo-container">
                <div class="logo">
                    <img src="{{asset('new-ui/img/logo.png')}}" alt="Creative Tim Logo">
                </div>
                <div class="brand" style="font-size:1.5em;margin-top:0.4em; width:100px; color:white">
	                    Lytes.App <br><span style="font-size:0.5em; font-weight:200">Shop anywhere</span>
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
                    <a href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon" style="color:white">
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
                                         <img src="{{asset('new-ui/img/mother-1.jpeg')}}"/>
                                      </div>
                                      <div class="tab-pane" id="product-page2">
                                          <img src="{{asset('new-ui/img/mother-2.jpg')}}"/>
                                     </div>
                                      <div class="tab-pane" id="product-page3">
                                          <img src="{{asset('new-ui/img/mother-3.jpeg')}}"/>
                                      </div>
                                      <div class="tab-pane" id="product-page4">
                                          <img src="{{asset('new-ui/img/mother-4.jpeg')}}"/>
                                      </div>
                        </div>
                    
                        
                    <div class="nbs-flexisel-container">
                        <div class="nbs-flexisel-inner">
                            <ul class="nav nav-text nbs-flexisel-ul" role="tablist" id="flexiselDemo1" style="left:-20px;">
                                  
                                <li class="nbs-flexisel-item" style="width: 220px; margin-right:20px">
                                    <a href="#product-page4" role="tab" data-toggle="tab" aria-expanded="true">
                                        <img src="{{asset('new-ui/img/mother-1.jpeg')}}" style="max-width:220px; max-height:auto" class="pdt-img-sm">
                                    </a>
                                </li>
                                <li class="nbs-flexisel-item" style="width: 220px;">
                                    <a href="#product-page2" role="tab" data-toggle="tab" aria-expanded="false">
                                        <img src="{{asset('new-ui/img/mother-2.jpg')}}" style="max-width:220px; max-height:auto" class="pdt-img-sm">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                        <div class="clearout"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-details">
                          <a href="#">
                              <h3 class="title">ATX3 Motherboard</h3>
                          </a>
                          <p class="description">
                            Brown single-breasted brushed-wool checked blazer
                          </p>
        
                          <span class="price">€ 1,930</span>
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
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis velit mi. Nam ullamcorper augue ultricies,
                                  facilisis leo sit amet, dictum quam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                  Aenean pellentesque pharetra eros non iaculis. Mauris sit amet velit vestibulum, feugiat purus quis, faucibus ante.
                                  Curabitur at nulla ut mi fermentum molestie eu eget lectus. Pellentesque et bibendum ipsum. Proin venenatis lacus quis ullamcorper lacinia.
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
                                            0302-444222
                                    </li>
                                    <li style="list-style-position: outside;list-style-type:none"> 
                                            <i class="fa fa-envelope"></i>
                                            info@business.com
                                    </li>
                                    <li style="list-style-position: outside;list-style-type:none"> 
                                            <i class="fa fa-map-marker"></i>
                                            Adenta
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
                                  <button class="btn btn-danger btn-simple btn-hover" rel="tooltip" title="" data-placement="left" data-original-title="Like">
                                            <i class="fa fa-heart-o"></i>
                                  </button>
                                  <a type="button" class="btn btn-info" href="app-store.blade.php">Visit Store</a>
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
            <div class="social-area pull-right">
                <!-- <a class="btn btn-social btn-twitter btn-simple" href="https://twitter.com/CreativeTim">
                    <i class="fa fa-twitter"></i>
                </a> -->
                <a class="btn btn-social btn-facebook btn-simple" href="https://www.facebook.com/CreativeTim">
                    <i class="fa fa-facebook-square"></i>
                </a>
                <!-- <a class="btn btn-social btn-google btn-simple" href="https://plus.google.com/+CreativetimPage">
                    <i class="fa fa-google-plus"></i>
                </a> -->
            </div>
            <div class="copyright" style="text-align: right">
                    &copy; 2018 Lytes.App | Theme <i>by </i> <a href="http://www.creative-tim.com" target="_blank"> &nbspCreative Tim</a>
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
