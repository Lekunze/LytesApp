<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('new-ui/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('new-ui/img/favicon.png')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Search - Lytes.App</title>

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

    <style>
        body{
            background-color: white !important;
        }

        .card .image img{
            width: 100%;
        }

        img{
            vertical-align: middle;
        }

        .card .content {
            padding: 10px 5px 10px 10px;
        }

        .card-refine .header {
            padding: 10px 15px 0px 15px;
        }

        .card .title{
            font-weight: 300;
            margin-top:10px;
            margin-bottom:-5px;
            font-size: 22px;
            
        }

        .card-product .title{
            margin:0;
        }

        h4.title:hover{
            color:blueviolet;
        }

        .card-product .price, .location{
            font-size: 16px;
            font-weight: 100 !important;
        }

        .card-product .footer{
            margin-top: -7px !important;
        }

        .price{
            color:tomato !important;
        }
        .location{
            color: black !important;
        }

        .card .description{
            font-size: 14px;            
            color: #999999;
            
        }

        .card .header{
            box-shadow: none;
        }

        i.fa.fa-refresh{
            top:0px !important;
            margin-top:-50px !important;
        }

        .card-product .footer {
            line-height: 40px;
            margin: 0;
        }
        .card .footer {
            padding: 0;
            background-color: transparent;
        }

        .card-refine .btn-simple, .card-product .btn-simple {
            padding-left: 0;
            padding-right: 0;
        }
        .card-refine .btn-xs, .card-product .btn-xs {
            margin: 8px 0;
        }
        .btn-xs.btn-simple {
            padding: 3px 5px;
        }
        .card-refine .panel-title a {
            display: block;
        }

        .card-refine .panel-group .panel-title {
            font-size: 12px;
            font-weight: bold;
        }

        div.panel-heading{
            background-color: white !important;
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
            footer ul li a {
                padding: 10px !important;
            }

            nav.pull-left{
               margin-left:3em;
            }

            .copyright{
                text-align: center !important;
            }

            #search-box{
                margin-bottom: -2em !important;
                margin-top: -2em !important;
            }

            input#search-box::-webkit-input-placeholder{
                /*content: "Enter product..." !important;*/
                overflow: hidden !important;
            }

        
        }

        
    </style>
    
    

</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll" role="navigation">
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
                          <img src="{{asset('new-ui/img/logo.png')}}" alt="Creative Tim Logo">
                      </div>
                      <div class="brand" style="font-size:1.5em;margin-top:0.4em; width:100px">
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
                          <a href="https://www.facebook.com/LytesApp/" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                              <i class="fa fa-facebook-square"></i>
                          </a>
                      </li>
              </ul>
      
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

<!-- End Navbar -->
<div class="wrapper">
        <div class="header header-filter" style="background-image: url('new-ui/img/suits.jpeg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h1 class="title text-center" style="color:white; margin-top:120px;">Find Products</h1>
                    </div>
                </div>
            </div>
        </div>

        <!--Search Panel-->
        <div class="container">
                <!-- <h2 class="section-title">Find what you need</h2> -->
                <!-- <div class=section-title> -->
                       
                <!-- </div> --><br>
                <div class="row">
                     <div class="col-md-3">
                         <div class="card card-refine card-plain">
                             
                             <div class="header">
                                 <h4 class="title">Reset
                                     <button class="btn btn-default btn-xs btn pull-right btn-simple" rel="tooltip" title="" data-original-title="Reset Filter">
                                         <i class="fa fa-refresh"></i>
                                     </button>
                                  </h4>
                             </div>
                             <div class="content">
                                   <div class="panel-group" id="accordion">
 
                                   <div class="panel panel-default">
                                     <div class="panel-heading">
                                       <h6 class="panel-title">
                                         <a data-toggle="collapse" href="#refineClothing" class="collapsed">
                                           Categories
                                           <i class="fa fa-caret-up pull-right"></i>
                                         </a>
                                       </h6>
                                     </div>
                                     <div id="refineClothing" class="panel-collapse collapse in">
                                       <div class="panel-body checkbox">
                                            <label>
                                                    <input type="checkbox" name="optionsCheckboxes" >Automobile & Parts
                                            </label><br>
                                            <label>
                                                    <input type="checkbox" name="optionsCheckboxes">Beauty Products
                                            </label><br>
                                            <label>
                                                    <input type="checkbox" name="optionsCheckboxes">Books & Stationary
                                            </label><br>
                                            <label>
                                                    <input type="checkbox" name="optionsCheckboxes">Clothing
                                            </label><br>
                                            <label>
                                                    <input type="checkbox" name="optionsCheckboxes">Education
                                            </label><br>
                                            <label>
                                                    <input type="checkbox" name="optionsCheckboxes">Electronics
                                            </label><br>
                                            <label>
                                                    <input type="checkbox" name="optionsCheckboxes">Entertainment
                                            </label><br>
                                            <label>
                                                    <input type="checkbox" name="optionsCheckboxes">Food
                                            </label>
                                       </div>
                                     </div>
                                   </div>

                                   <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h6 class="panel-title">
                                            <a data-toggle="collapse" href="#refinePrice" class="collapsed">
                                              Price Range
                                              <i class="fa fa-caret-up pull-right"></i>
                                            </a>
                                          </h6>
                                        </div>
                                        <div id="refinePrice" class="panel-collapse collapse">
                                          <div class="panel-body">
                                             <span class="price price-left">
                                                   <div class="col-sm-4">
                                                           <div class="form-group label-floating">
                                                               <label class="control-label">Min</label>
                                                               <input type="text" value="" class="form-control" />
                                                           </div>
                                                   </div>
                                               </span>
                                             <span class="price price-right">
                                                   <div class="col-sm-4">
                                                           <div class="form-group label-floating">
                                                               <label class="control-label">Max</label>                                                                
                                                               <input type="text" value=""class="form-control" />
                                                           </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                           <button class="btn btn-primary btn-just-icon">
                                                           <i class="fa fa-search"></i>
                                                           </button>
                                                   </div>
                                               </span>
                                             <div class="clearfix"></div>
                                          </div>
                                        </div>
                                      </div>
                                    <!-- end panel -->
                                 </div>
                             </div>
                         </div> <!-- end card -->
                     </div>
 
                     <div class="col-md-9">
                            
                         <div class="row">

                            <div class="col-md-12">
                                <div class="row">
                                        <div class="col-sm-10 col-sm-offset-1" id="search-box" style="margin-bottom:1em;">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-search"></i>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="Enter product to search for...">
                                                    <span class="input-group-addon">
                                                    <button class="btn btn-primary">Search</button>
                                                    
                                                    </span>
                                                
                                                </div>
                                        </div>
                                        
                                </div>
                            </div> 
                            <br>
                            <br>
                                
                             <div class="col-md-4">
                                 <div class="card card-product card-plain">
                                     <div class="image">
                                         <a href="#">
                                             <img src="{{asset('new-ui/img/laptop-1.jpeg')}}" alt="...">
                                         </a>
                                     </div>
                                     <div class="content">
                                         <a href="#">
                                             <h4 class="title">iMac Pro 2015</h4>
                                         </a>
                                         <p class="description">
                                            XDoe Electronics
                                         </p>
                                         <div class="footer">
                                             <span class="price"> GHS 3,330</span>
                                             <span style="float:right" class="location">  <i class="fa fa-map-marker"></i> Adenta</span>
                                         </div>
                                     </div>
                                 </div> <!-- end card -->
                              </div>
                              <div class="col-md-4">
                                 <div class="card card-product card-plain">
                                     <div class="image">
                                         <a href="#">
                                             <img src="{{asset('new-ui/img/laptop-3.jpeg')}}" alt="...">
                                         </a>
                                     </div>
                                     <div class="content">
                                         <a href="#">
                                             <h4 class="title">MacBook Pro</h4>
                                         </a>
                                         <p class="description">
                                            Matt-Maer Co.
                                         </p>
                                         <div class="footer">
                                             <span class="price">GHS 1,930</span>
                                             <span style="float:right" class="location">  <i class="fa fa-map-marker"></i> Madina</span>                                             
                                         </div>
                                     </div>
                                 </div> <!-- end card -->
                              </div>
                               <div class="col-md-4">
                                 <div class="card card-product card-plain">
                                     <div class="image">
                                         <a href="#">
                                             <img src="{{asset('new-ui/img/laptop-4.jpeg')}}" alt="...">
                                         </a>
                                     </div>
                                     <div class="content">
                                         <a href="#">
                                             <h4 class="title">Dell Inspiron</h4>
                                         </a>
                                         <p class="description">
                                            Alhaji Raman & Sons
                                       </p>
                                         <div class="footer">
                                             <span class="price"> GHS 3,330</span>
                                             <span style="float:right" class="location">  <i class="fa fa-map-marker"></i> Tema</span>
                                             
                                         </div>
                                     </div>
                                 </div> <!-- end card -->
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
						<a href="/register">
							Join Us
						</a>
                    </li>

                    <li>
                            <a class="btn btn-social btn-facebook btn-simple" href="https://www.facebook.com/LytesApp/">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                    </li>
                    
                </ul>
            </nav>
            
            <div class="copyright" style="text-align:right">
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