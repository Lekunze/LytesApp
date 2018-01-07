<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('new-ui/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/shopping-cart.png')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Change Password | Lytes.App</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />


    <!-- CSS Files -->
    <link href="{{asset('new-ui/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('new-ui/wizard/css/gsdk-bootstrap-wizard.css')}}" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('new-ui/wizard/css/demo.css')}}" rel="stylesheet" />
    
    <style>
        #error-msg{
            text-align: center !important;
            margin-top: 5px !important;
            margin-bottom: 10px !important;
            font-size: 1em !important;
            color:firebrick;
        }

        .wizard-card .tab-content {
            min-height: 40px;
        }

        div.moving-tab{
            background-color: rgb(0, 32, 96) !important;;
        }

        .btn-info{
            background-color: rgb(0, 32, 96) !important;
            border-color:rgb(0, 32, 96) !important;
        }

        .copyright a{
            color: rgb(191,13,64) !important;
        }

        img{
            max-width: 60px !important;
            max-height: 60px !important;
        }

        .logo-container .logo{
            border-radius: 0 !important;
            border: 0 !important;
        }
    </style>

</head>

<body>
<div class="image-container set-full-height" style="background-image: url('new-ui/img/storeee.jpeg')">
    <!--   Creative Tim Branding   -->
    <a href="/">
        <div class="logo-container">
           <div class="logo">
               <img src="{{asset('img/shopping-cart.png')}}">
           </div>
           <div class="brand" style="width:300px; font-size:1.5em;margin-top:0.4em; ">
               Lytes.App <br><span style="font-size:0.6em; font-weight:400">Join the rest of the world. Let's get online</span>
           </div>
       </div>
   </a>
    

    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="azzure" id="wizard">
                    <form action="{{url('changePassword')}}" method="post">
                <!--        You can switch ' data-color="azzure" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                    	<div class="wizard-header">
                        	<h3>
                        	   <b>CHANGE</b> YOUR PASSWORD <br>
                        	   <!-- <small>Enter your current and new password to change passwords</small> -->
                        	</h3>
                    	</div>
						<div class="wizard-navigation">
							<ul>
	                            <li><a href="#details" data-toggle="tab">Enter Your Credentials</a></li>
	                        </ul>
						</div>
                        <div class="tab-content">
                            <div class="tab-pane" id="details">
                              <div class="row">

                                  <p id="error-msg">
                                      @if(isset($message))
                                          <span class="label label-danger">{{$message}}</span>
                                      @endif
                                  </p>
                                  <div class="col-sm-9 col-sm-offset-2">
                                      <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" id="user-email" name="user_email">
                                      </div>
                                  </div>
                                  <div class="col-sm-9 col-sm-offset-2">
                                      <div class="form-group">
                                        <label>Current Password</label>
                                        <input type="password" class="form-control" id="current-password" name="old_password">
                                      </div>
                                  </div>
                                  <div class="col-sm-9 col-sm-offset-2">
                                        <div class="form-group">
                                          <label>New Password</label>
                                          <input type="password" class="form-control" id="new-password" name="password"  aria-required="true">
                                        </div>
                                   </div>
                                   <div class="col-sm-9 col-sm-offset-2">
                                        <div class="form-group">
                                          <label>Confirm Password</label>
                                          <input type="password" class="form-control" id="confirm-password" onchange="comparePasswords()" required>
                                        </div>
                                       <div id="alert-msg" style="color:firebrick; font-weight: 400; margin-left: 0.3em"> </div>
                                   </div>
                              </div>
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                        </div>
                        <div class="wizard-footer">
                            	<div class="pull-right">
                                    <input type='submit' id="change" class='btn btn-finish btn-fill btn-info btn-wd btn-sm' name='finish' value='Change Password' />
                                </div>
                                
                                <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div> <!-- row -->
    </div> <!--  big container -->

    <div class="footer">
        <div class="container">
                &copy; 2018 Lytes.App | <a href="mailto:info@lytesapp.com"> info@lytesapp.com
                <i class="fa fa-envelope" aria-hidden="true"></i> </a>
        </div>
    </div>


</div>

</body>

	<!--   Core JS Files   -->
	<script src="{{asset('new-ui/wizard/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('new-ui/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('new-ui/wizard/js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{asset('new-ui//wizard/js/gsdk-bootstrap-wizard.js')}}"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="{{asset('new-ui/wizard/js/jquery.validate.min.js')}}"></script>

    <script>

        function comparePasswords(){
            var password = $('#new-password').val();
            var confirm = $('#confirm-password').val();

            if(password!==confirm){
                $('#alert-msg').html('Passwords do not match');
                $('#change').prop('disabled',true);
            }else{
                $('#alert-msg').hide();
                $('#change').prop('disabled',false);
            }
        }

        $(document).ready(function(){
            $('#confirm-password').keyup(comparePasswords);
        });

    </script>

</html>
