<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('new-ui/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/shopping-cart.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

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
    <link href="{{asset('dist/bootstrap-imageupload.css')}}" rel="stylesheet">

    <!--   Core JS Files   -->
    <script src="{{asset('new-ui/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('new-ui/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('new-ui/js/material.min.js')}}"></script>

    <!-- Plugin for form validation, full documentation here: http://1000hz.github.io/bootstrap-validator/ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>


    {{--<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>--}}

	<style>

        .navbar-color-on-scroll{
            background-color: black;
        }

        .navbar .navbar-nav > li > a {
            color: inherit;
            font-weight: 400;
            font-size: 12px !important;
            text-transform: uppercase;
            border-radius: 3px;
        }

        .panel-heading.clearfix,.btn-lg{
            background-color: rgb(191,13,64) !important;
            color:white !important;
        }

        .pull-left a:hover,.pull-right a:hover{
            color:rgb(191,13,64) !important;
            text-decoration: none;
        }

        .pull-right a{
            color:black!important;
        }

        .pull-right{
            margin-top: 10px !important;
        }

        .btn-default{
            background-color: black !important;
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

        div.file-tab.panel-body{
            text-align: center !important;
        }

        .tim-row{
            padding-top: 10px !important;
        }

        .imageupload {
            margin: 20px 0;
        }

        img.thumbnail{
            max-width: 100% !important;
        }

        h2{
            margin-top: -20px !important;
        }


        #business-row{
            margin-top: 340px !important;
        }

        @media only screen
        and (min-device-width: 375px)
        and (max-device-width: 667px)
        and (-webkit-min-device-pixel-ratio: 2)
        and (orientation: portrait) {
            .tim-row{
                /*padding-top: 0px !important;*/
            }
            #business-row{
                margin-top: -20px !important;
            }

            #media-row{
                margin-top: -110px !important;

            }

            h2{
                margin-top: 0px !important;
            }
        }

        @media screen and (min-width: 360px) {
            #business-row{
                margin-top: -100px !important;
            }

            h2{
                margin-top: 0px !important;
            }

            .brand {
                width: 200px !important;
            }
        }

        @media screen and (min-width: 1440px) {
            #business-row{
                margin-top: 280px !important;
            }

            #media-row{
                margin-top: 570px !important;
            }

            #register-btn{
                margin-top: 1.5em !important;
            }
        }

        @media screen and (min-width: 1024px){

            #business-row{
                margin-top: 280px !important;
            }

            #media-row{
                margin-top: 570px !important;
            }

            #register-btn{
                margin-top: 1.5em !important;
            }

        }

        .feedback {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2;
            display: block;
            width: 34px;
            height: 34px;
            line-height: 34px;
            text-align: center;
            pointer-events: none;
        }


        .logo-container .logo {
            border: 0 !important;
            border-radius: 0 !important;
        }


    </style>
</head>

<body class="components-page">

<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
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
                      <img src="{{asset('img/shopping-cart.png')}}" alt="Lytes.App" rel="tooltip" title="<b>Lytes.App</b> Is Ghana's premier shopping catalog. Search for anything you need." data-placement="bottom" data-html="true">
                  </div>
                  <div class="brand" style="font-size:1.5em;margin-top:0.4em; width:300px">
                      Lytes.App <br><span style="font-size:0.5em; font-weight:200">Join the rest of the world. Let's get online.</span>
                  </div>


              </div>
          </a>
      </div>

      <div class="collapse navbar-collapse" id="navigation-index">
          <ul class="nav navbar-nav navbar-right">
              <li>
                  <a href="/" style="font-size:1.2em;">
                      <i class="material-icons">home</i> Home
                  </a>
              </li>
              <li>
                  <a href="/login" style="font-size:1.2em;">
                      <i class="material-icons">input</i> Sign In
                  </a>
              </li>
              <li>
                  <a href="/search" style="font-size:1.2em;">
                      <i class="material-icons">search</i> Search
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
                        <li><a href="#media-row">Image Uploads</a></li>
                    

                    </ul>
                </div>
            </div>

            <div class="col-md-8 col-md-offset-1">
                <div class="tim-container">

            <form class="form" action="{{url('businesses')}}" method="post" enctype="multipart/form-data" data-toggle="validator" role="form">
                        
                <!-- Personal Details -->
                <div class="tim-row" id="personal-row">

                    <h2>Personal Details</h2>
                    <legend></legend>
                    <p id="error-msg">
                        @if(isset($errorM))
                            <span class="label label-danger">{{$errorM}}</span>
                        @endif
                    </p>
                            <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="last-name">Surname*</label>
                                        <input type="text" class="form-control" name="business_owner_last_name" id="last-name" required>
                                        {{--<small class="text-danger">{{ $errors->first('business_owner_last_name') }}</small>--}}
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="given-names">Given Names*</label>
                                        <input type="text" class="form-control" name="business_owner_given_names" id="given-names" required>
                                        <small class="text-danger">{{ $errors->first('business_owner_given_names') }}</small>
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group label-floating has-validation">
                                            <label class="control-label">Date of Birth*</label>
                                            <input class="datepicker form-control" type="text" name="date_of_birth" id="dob" value="mm/dd/yyyy"/>
                                    </div>
                                    <!-- <label class="control-label">Date of Birth</label>-->
                            </div>
                        
                            <div class="col-sm-6">
                                    <div class="form-group label-floating has-validation">
                                        <label class="control-label">Country</label>
                                        <select class="form-control" name="nationality" value="{{old('nationality')}}">
                                            @include('modules.countrylist')
                                        </select>
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group label-floating has-validation">
                                    <label class="control-label">ID Type</label>
                                    <select class="form-control"  name="id_type" value="{{old('id_type')}}">
                                        @include('modules.id-types')
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">ID Number*</label>
                                        <input type="text" class="form-control" name="id_number" required>
                                        <small class="text-danger">{{ $errors->first('id_number') }}</small>
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Phone Number*</label>
                                        <input type="tel" class="form-control" name="phone_number" maxlength="10"  required>
                                        <div class="help-block with-errors">Enter a Valid Ghanaian Number</div>
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Other Phone</label>
                                        <input type="tel" class="form-control" name="phone_number_2" maxlength="10">
                                        <div class="help-block with-errors">Enter a Valid Ghanaian Number</div>
                                    </div>
                            </div>     
                </div>
                <!--  end row -->

                <!-- Business Details -->
                <div class="tim-row" id="business-row">
                            <legend></legend>
                            <h2><br>Business Details</h2>
                            <legend></legend>
                                    <div class="col-sm-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Name of Business*</label>
                                                <input type="text" class="form-control" name="business_name" maxlength="30" required>
                                                <div class="help-block with-errors">Business name should be max 30 letters</div>
                                            </div>
                                    </div>
                                    <div class="col-sm-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Describe your business*</label>
                                                <textarea class="form-control" placeholder="" rows="3" name="business_description" maxlength="2000" required></textarea>
                                                <div class="help-block with-errors">Max 200 words </div>
                                            </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">What's your tagline/motto?*</label>
                                                <input type="text" class="form-control" name="business_tagline" required>
                                            </div>
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label" id="slug-label">Business Slug (10 letters)*</label>
                                                <input type="text" class="form-control" name="business_slug" id="slug" onblur="slugAvailability()" maxlength="10" minlength="3" required>
                                                <span class="feedback">
                                                    <i class="material-icons" style="color:#4caf50; display: none" id="available">done</i>
                                                    <i class="material-icons" style="color:#f44336;display: none" id="unavailable">clear</i>
                                                </span>
                                                <div  class="help-block with-errors" style="display: none" id="slug-error-msg"></div>
                                            </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label" id="user-label">Business Email*</label>
                                            <input type="email" class="form-control" id="user" name="business_email" data-error="Enter a valid email" onblur="userAvailability()" required>
                                            <span class="feedback">
                                                    <i class="material-icons" style="color:#4caf50; display: none" id="user-available">done</i>
                                                    <i class="material-icons" style="color:#f44336;display: none" id="user-unavailable">clear</i>
                                                </span>
                                            <div  class="help-block with-errors" style="display: none; padding-bottom: 10px !important;" id="user-error-msg"></div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating has-validation">
                                            <label class="control-label">Category*</label>
                                            <select class="form-control" name="business_category" value="{{old('business_category')}}">
                                                @include('modules.categories')
                                            </select>
                                        </div>
                                        <br>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group label-floating has-validation">
                                            <label class="control-label">Country*</label>
                                            <select class="form-control" name="country" value="{{old('nationality')}}">
                                                @include('modules.countrylist')
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating has-validation">
                                            <label class="control-label">Region*</label>
                                            <select class="form-control" name="region" value="{{old('region')}}">
                                                @include('modules.region')
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group label-floating has-validation">
                                            <label class="control-label">Area or Location*</label>
                                            <input type="text" class="form-control" name="area" value="{{old('area')}}" required>
                                            {{--<select class="form-control" name="area" value="{{old('area')}}">--}}
                                                {{--@include('modules.area')--}}
                                            {{--</select>--}}
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                    <label class="control-label">Address*</label>
                                                    <input class="form-control" type="text" value="" name="address" required/>
                                                    <small class="text-danger">{{ $errors->first('address') }}</small>
                                            </div>
                                    </div>
                                    <div class="col-sm-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Business Contact*</label>
                                                <input type="tel" class="form-control" name="business_number" maxlength="10" required>
                                                <div class="help-block with-errors">Enter a Valid Ghanaian Number</div>
                                            </div>
                                    </div>
                                    <div class="col-sm-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Other Business Contact</label>
                                                <input type="tel" class="form-control" name="business_number_2" maxlength="10">
                                                <div class="help-block with-errors">Enter a Valid Ghanaian Number</div>
                                            </div>
                                    </div>     
                </div>
                <!--  end row -->
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <!-- Media -->
                <div class="tim-row" id="media-row">
                    <h2><br>Image Resources</h2>
                    <legend></legend>
                    <div class="col-md-5 col-sm-5">
                        <!-- Product Logo Upload-->
                        <div class="imageupload panel panel-default">
                            <div class="panel-heading clearfix">
                                <h3 class="panel-title pull-left">Business Logo</h3>

                            </div>
                            <div class="file-tab panel-body">
                                <label class="btn btn-default btn-fab btn-fab-mini btn-round btn-file">
                                    <i class="material-icons">backup</i>
                                    <!-- The file is stored here. -->
                                    <input type="file" name="business_logo">
                                </label>
                                <button type="button" class="btn btn-default btn-fab btn-fab-mini btn-round">
                                    <i class="material-icons">cancel</i>
                                </button>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-7 col-sm-7">
                        <!-- Product Logo Upload-->
                        <div class="imageupload panel panel-default">
                            <div class="panel-heading clearfix">
                                <h3 class="panel-title pull-left">Cover Image</h3>

                            </div>
                            <div class="file-tab panel-body">
                                <label class="btn btn-default btn-fab btn-fab-mini btn-round btn-file">
                                    <i class="material-icons">backup</i>
                                    <!-- The file is stored here. -->
                                    <input type="file" name="cover_image">
                                </label>
                                <button type="button" class="btn btn-default btn-fab btn-fab-mini btn-round">
                                    <i class="material-icons">cancel</i>
                                </button>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-sm-12" style="text-align: center !important;" id="register-btn">
                    <button class="btn btn-primary btn-lg" type="submit">
                        Join Us
                        <i class="material-icons">favorite</i>
                    </button>
                </div>


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
                <span>
					&copy; 2018 Lytes.App | <a href="mailto:info@lytesapp.com"> info@lytesapp.com
				<i class="fa fa-envelope" aria-hidden="true"></i> </a>
				</span>
            </div>

        </div>
    </footer>

</div>


</body>


    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    {{--<script src="{{asset('new-ui/js/nouislider.min.js')}}"type="text/javascript"></script>--}}

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="{{asset('new-ui/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="{{asset('new-ui/js/material-kit.js')}}" type="text/javascript"></script>

    <script src="{{asset('dist/bootstrap-imageupload.js')}}"></script>

<script>

    function slugAvailability(){
        $.ajax({
            type: 'post',
            url: 'slugCheck',
            data: {
                '_token': $('input[name=_token]').val(),
                'business': $('#slug').val()
            },
            success: function(data) {
                // $('#task' + data).remove();
                if(data["message"]==="Available"){
                    // console.log("Okay");
                    $("#slug-label").css('color','#4caf50');
                    $("#slug-error-msg").css('color','#4caf50');
                    if($("#unavailable").is(':visible')){
                        $("#unavailable").hide();
                    }
                    $("#available").show();
                    $("#slug-error-msg").html("Slug is available for use").append("<br>");
                }else if(data["message"]==="Negative"){
                    $("#slug-label").css('color','#f44336');
                    $("#slug-error-msg").css('color','#f44336');
                    if($("#available").is(':visible')){
                        $("#available").hide();
                    }
                    $("#unavailable").show();
                    $("#slug-error-msg").html("Slug has already been taken");
                }
                $("#slug-error-msg").show(data["message"]);
                console.log(data["message"]);
            }, error: function (data) {
                console.log('Error:' + data);

            }
        });
    }

    function userAvailability(){
        $.ajax({
            type: 'post',
            url: 'userCheck',
            data: {
                '_token': $('input[name=_token]').val(),
                'user': $('#user').val()
            },
            success: function(data) {
                // $('#task' + data).remove();
                if(data["message"]==="Available"){
                    // console.log("Okay");
                    $("#user-label").css('color','#4caf50');
                    $("#user-error-msg").css('color','#4caf50');
                    if($("#user-unavailable").is(':visible')){
                        $("#user-unavailable").hide();
                    }
                    $("#user-available").show();
                    $("#user-error-msg").html("User available");
                }else if(data["message"]==="Negative"){
                    $("#user-label").css('color','#f44336');
                    $("#user-error-msg").css('color','#f44336');
                    if($("#user-available").is(':visible')){
                        $("#user-available").hide();
                    }
                    $("#user-unavailable").show();
                    $("#user-error-msg").html("User already exists");
                }else if(data["message"]==="Error"){
                    $("#user-label").css('color','#f44336');
                    $("#user-error-msg").css('color','#f44336');
                    if($("#user-available").is(':visible')){
                        $("#user-available").hide();
                    }
                    if($("#user-unavailable").is(':visible')){
                        $("#user-unavailable").hide();
                    }

                }
                $("#user-error-msg").show();
            }, error: function (data) {
                console.log('Error:' + data);

            }
        });
    }
</script>

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

<script>
    $(document).ready(function(){

        var checkout = $('#dob').datepicker({
                format: "dd/mm/yyyy",
            onRender: function(date) {
                    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
                }
            }).on('changeDate', function(ev) {
                checkout.hide();
            }).data('datepicker');
    });



</script>






</html>
