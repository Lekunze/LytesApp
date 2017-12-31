<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('new-ui/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('new-ui/img/favicon.png')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>New Shop - Lytes.App</title>

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
		pre.prettyprint{
		    background-color: #eee;
		    border: 0px;
		    margin-bottom: 60px;
		    margin-top: 30px;
		    padding: 20px;
		    text-align: left;
		}
		.atv, .str{
		    color: #05AE0E;
		}
		.tag, .pln, .kwd{
		    color: #3472F7;
		}
		.atn{
		    color: #2C93FF;
		}
		.pln{
		    color: #333;
		}
		.com{
		    color: #999;
		}
		.space-top{
		    margin-top: 50px;
		}
		.btn-primary .caret{
		    border-top-color: #3472F7;
		    color: #3472F7;
		}
		.area-line{
		    border: 1px solid #999;
		    border-left: 0;
		    border-right: 0;
		    color: #666;
		    display: block;
		    margin-top: 20px;
		    padding: 8px 0;
		    text-align: center;
		}
		.area-line a{
		    color: #666;
		}
		.container-fluid{
		    padding-right: 15px;
		    padding-left: 15px;
		}
		.table-shopping .td-name{
			min-width: 130px;
		}
	</style>
</head>

<body class="components-page">

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
                    <a href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
    	</ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('new-ui/img/suits.jpeg');">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1 class="title text-center">Register New Business</h1>
				</div>
			</div>
		</div>
	</div>

    <div class="main main-raised">
        <div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="fixed-section" data-spy="affix" data-offset-top="340">
                    <ul>
                        <li><a href="#personal-row">Personal Information</a></li>
                        <li><a href="#business-row">Business Information</a></li>
                        <li><a href="#dropdown-row">Image Uploads</a></li>
                    

                    </ul>
                </div>
            </div>

            <div class="col-md-8 col-md-offset-1">
                <div class="tim-container">

            <form class="form" method="" action="">
                        
                <!-- Personal Details -->
                <div class="tim-row" id="personal-row">

                    <h2>Personal Details</h2>
                    <legend></legend>
                            <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Surname*</label>
                                        <input type="text" class="form-control" name="business_owner_last_name">
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Given Names*</label>
                                        <input type="text" class="form-control" name="business_owner_given_names">
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group label-floating">
                                            <label class="control-label">Date of Birth*</label>
                                            <input class="datepicker form-control" type="text" value="" name="date_of_birth"/>                                
                                    </div>
                                    <!-- <label class="control-label">Date of Birth</label>-->
                            </div>
                        
                            <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nationality*</label>
                                        <input type="text" class="form-control" name="business_owner_given_names">
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">ID Type*</label>
                                        <input type="text" class="form-control" name="business_owner_given_names">
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">ID Number*</label>
                                        <input type="text" class="form-control" name="business_owner_given_names">
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Phone Number*</label>
                                        <input type="text" class="form-control" name="business_owner_given_names">
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Other Phone</label>
                                        <input type="text" class="form-control" name="business_owner_given_names">
                                    </div>
                            </div>     
                </div>
                <!--  end row -->

                <!-- Business Details -->
                <div class="tim-row" id="textarea-row">
                            <h2><br>Business Details</h2>
                            <legend></legend>
                                    <div class="col-sm-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Name of Business*</label>
                                                <input type="text" class="form-control" name="business_owner_last_name">
                                            </div>
                                    </div>
                                    <div class="col-sm-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Describe your business*</label>
                                                <textarea class="form-control" placeholder="" rows="3"></textarea>                        
                                            </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">What's your tagline/motto?*</label>
                                                <input type="text" class="form-control" name="business_owner_last_name">
                                            </div>
                                    </div>
                                    <div class="col-sm-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Business Email*</label>
                                                <input type="text" class="form-control" name="business_owner_given_names">
                                            </div>
                                    </div>
                                    <div class="col-sm-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Business Slug*</label>
                                                <input type="text" class="form-control" name="business_owner_given_names">
                                            </div>
                                    </div>  
                                    <div class="col-sm-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Country*</label>
                                                <input type="text" class="form-control" name="business_owner_given_names">
                                            </div>
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Region*</label>
                                                <input type="text" class="form-control" name="business_owner_given_names">
                                            </div>
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Area*</label>
                                                <input type="text" class="form-control" name="business_owner_given_names">
                                            </div>
                                    </div>
                                    <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                    <label class="control-label">Address*</label>
                                                    <input class="form-control" type="text" value="" name="date_of_birth"/>                                
                                            </div>
                                    </div>
                                    <div class="col-sm-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Business Contact*</label>
                                                <input type="text" class="form-control" name="business_owner_given_names">
                                            </div>
                                    </div>
                                    <div class="col-sm-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Other Business Contact</label>
                                                <input type="text" class="form-control" name="business_owner_given_names">
                                            </div>
                                    </div>     
                        </div>
                        <!--  end row -->
                

            </form>
            

	    




                <!-- end container -->
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
            <div class="copyright">
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
    <script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

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
