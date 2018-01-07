<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('new-ui/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/reunion.png')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>New Product - {{$business->business_name}}</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{asset('new-ui/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('new-ui/css/material-kit.css')}}" rel="stylesheet"/>
    <link href="{{asset('new-ui/css/extras.css')}}" rel="stylesheet"/>


    <!-- Image Upload CSS -->
    <link href="{{asset('dist/bootstrap-imageupload.css')}}" rel="stylesheet">


    <style>
        .navbar-color-on-scroll{
            background-color: black;
        }

        .imageupload {
            margin: 20px 0;
        }

        .panel-title{
            text-align: center !important;
            padding-top: 0!important;
        }


        div.panel-heading.clearfix{
            text-align: center !important;
        }
        .panel-heading.clearfix{
            background-color: lightgrey !important;
            color:black !important;
        }

        .btn-lg{
            background-color: rgb(191,13,64) !important;
            margin-bottom: 30px !important;

        }

        img.thumbnail{
            width:100% !important;
        }

        .btn-default{
            background-color: black !important;
        }

        div.file-tab.panel-body{
            text-align: center !important;
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
                            <a href="/{{$business->business_slug}}">
                                    <i class="material-icons">store</i> Store
                            </a>
    				</li>
    				<li>
                            <a href="/{{$business->business_slug}}/shelves">
                                    <i class="material-icons">storage</i> Shelves
                            </a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products &nbsp<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/{{$business->business_slug}}/new"> <i class="material-icons">shopping_basket</i> &nbspNew Product </a></li>
                            <li><a href="/{{$business->business_slug}}/products"> <i class="material-icons">edit</i>&nbsp Edit Products </a></li>
                        </ul>

                    </li>
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings &nbsp<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="/change">Change Password</a></li>
                              <li><a href="#">Edit Profile</a></li>
                            </ul>
                    </li>
		            <li>
                            <a href="/logout">
                                    <i class="material-icons">exit_to_app</i> Logout
                            </a>
                    </li>
        		</ul>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
        <div class="header header-filter" style="background-image: url(<?php echo asset($business->business_images."/cover_image.jpg")?>);">
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
                                
                            <form class="form" action="{{url($business->business_slug.'/search')}}" method="post" enctype="multipart/form-data">

                                    <h3>Product Details</h3>
                                    <legend></legend>
                                            <div class="col-sm-12">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Product Name*</label>
                                                        <input type="text" class="form-control" name="product_name">
                                                    </div>
                                            </div>
                                            <div class="col-sm-12">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Describe your product*</label>
                                                        <textarea class="form-control" placeholder="" rows="3" name="product_description"></textarea>
                                                    </div>
                                            </div>
                                            <div class="col-sm-6">
                                                    <div class="form-group label-floating has-validation">
                                                        <label class="control-label">Shelf*</label>
                                                        <select class="form-control" name="product_shelf">
                                                                <option value="X" selected>Choose your option</option>
                                                                @if(!empty($shelves))
                                                                    @foreach($shelves as $shelf)
                                                                        <option value="{{$shelf->id}}"> {{$shelf->shelf_name}}</option>
                                                                    @endforeach
                                                                @endif
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating has-validation">
                                                    <label class="control-label">Categories*</label>
                                                    <select class="form-control" name="product_category">
                                                        @include('modules.categories')
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating has-validation">
                                                    <label class="control-label">Product condition*</label>
                                                    <select class="form-control" name="product_condition">
                                                        <option value="X" selected>Choose your option</option>
                                                        <option value="1">New</option>
                                                        <option value="2">Slightly Used</option>
                                                        <option value="3">Moderately Used</option>
                                                        <option value="4">Very Used</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group label-floating">
                                                            <label class="control-label">Price</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="product_price">
                                                                <span class="input-group-addon">GHS</span>
                                                            </div>
                                                    </div>
                                                    <!-- <label class="control-label">Date of Birth</label>-->
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Product Logo Upload-->
                                                <div class="imageupload panel panel-default">
                                                    <div class="panel-heading clearfix">
                                                        <h3 class="panel-title">Product Image 1</h3>

                                                    </div>
                                                    <div class="file-tab panel-body">

                                                        <label class="btn btn-default btn-fab btn-fab-mini btn-round btn-file">
                                                            <i class="material-icons">backup</i>
                                                            <!-- The file is stored here. -->
                                                            <input type="file" name="products[]">
                                                        </label>
                                                        <button type="button" class="btn btn-default btn-fab btn-fab-mini btn-round">
                                                            <i class="material-icons">cancel</i>
                                                        </button>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <!-- Product Logo Upload-->
                                                <div class="imageupload panel panel-default">
                                                    <div class="panel-heading clearfix">
                                                        <h3 class="panel-title">Product Image 2</h3>

                                                    </div>
                                                    <div class="file-tab panel-body">
                                                        <label class="btn btn-default btn-fab btn-fab-mini btn-round btn-file">
                                                            <i class="material-icons">backup</i>
                                                            <!-- The file is stored here. -->
                                                            <input type="file" name="products[]">
                                                        </label>
                                                        <button type="button" class="btn btn-default btn-fab btn-fab-mini btn-round">
                                                            <i class="material-icons">cancel</i>
                                                        </button>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">
                                                <!-- Product Logo Upload-->
                                                <div class="imageupload panel panel-default">
                                                    <div class="panel-heading clearfix">
                                                        <h3 class="panel-title">Product Image 3</h3>

                                                    </div>
                                                    <div class="file-tab panel-body">
                                                        <label class="btn btn-default btn-fab btn-fab-mini btn-round btn-file">
                                                            <i class="material-icons">backup</i>
                                                            <!-- The file is stored here. -->
                                                            <input type="file" name="products[]">
                                                        </label>
                                                        <button type="button" class="btn btn-default btn-fab btn-fab-mini btn-round">
                                                            <i class="material-icons">cancel</i>
                                                        </button>
                                                    </div>

                                                </div>

                                            </div>

                                <input type="hidden" name="_token" value="{{csrf_token()}}">

                                <div class="col-sm-12" style="text-align: center !important;" id="register-btn">
                                    @if($shelves=="[]")

                                    <button class="btn btn-info btn-lg disabled" data-toggle="tooltip" data-placement="right" title="Add a shelf to add a product">
                                        Add Product
                                        <i class="material-icons">add</i>
                                    </button>
                                        @else
                                        <button class="btn btn-info btn-lg" type="submit">
                                            Add Product
                                            <i class="material-icons">add</i>
                                        </button>

                                    @endif

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

    
    @include('modules.footers.main-footer')


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

    <script src="{{asset('dist/bootstrap-imageupload.js')}}"></script>




    <script>
        var $imageupload = $('.imageupload');
        $imageupload.imageupload();

        $('#imageupload-disable').on('click', function() {
            $imageupload.imageupload('disable');
            $(this).blur();
        })

        $('#imageupload-enable').on('click', function() {
            $imageupload.imageupload('enable');
            $(this).blur();
        })

        $('#imageupload-reset').on('click', function() {
            $imageupload.imageupload('reset');
            $(this).blur();
        });
    </script>


</html>
