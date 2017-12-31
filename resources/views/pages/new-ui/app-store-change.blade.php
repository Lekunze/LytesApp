<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('new-ui/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('new-ui/img/favicon.png')}}">
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
        .wizard-card .tab-content {
            min-height: 40px;
        }   
    </style>

</head>

<body>
<div class="image-container set-full-height" style="background-image: url('new-ui/img/storeee.jpeg')">
    <!--   Creative Tim Branding   -->
    <a href="/">
        <div class="logo-container">
           <div class="logo">
               <img src="{{asset('new-ui/wizard/img/new_logo.png')}}">
           </div>
           <div class="brand" style="width:100px; font-size:1.5em;margin-top:0.4em; ">
               Lytes.App <br><span style="font-size:0.6em; font-weight:400">Shop anywhere</span>
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
                    <form action="" method="">
                <!--        You can switch ' data-color="azzure" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                    	<div class="wizard-header">
                        	<h3>
                        	   <b>CHANGE</b> YOUR PASSWORD <br>
                        	   <!-- <small>Enter your current and new password to change passwords</small> -->
                        	</h3>
                    	</div>
						<div class="wizard-navigation">
							<ul>
	                            <li><a href="#details" data-toggle="tab">Credentials</a></li>
	                        </ul>
						</div>
                        <div class="tab-content">
                            <div class="tab-pane" id="details">
                              <div class="row">
                                  <div class="col-sm-9 col-sm-offset-2">
                                      <div class="form-group">
                                        <label>Current Password</label>
                                        <input type="password" class="form-control" id="current-password">
                                      </div>
                                  </div>
                                  <div class="col-sm-9 col-sm-offset-2">
                                        <div class="form-group">
                                          <label>New Password</label>
                                          <input type="password" class="form-control" id="new-password">
                                        </div>
                                   </div>
                                   <div class="col-sm-9 col-sm-offset-2">
                                        <div class="form-group">
                                          <label>Confirm Password</label>
                                          <input type="password" class="form-control" id="confirm-password">
                                        </div>
                                    </div>
                                  
                                  <!--<div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Year Manufacture</label>
                                          <select class="form-control">
                                            <option disabled="" selected="">- year -</option>
                                            <option>2008</option>
                                            <option>2009</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option>2012</option>
                                            <option>2013</option>
                                            <option>2014</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-sm-5">
                                      <div class="form-group">
                                          <label>Daily Price</label>
                                          <div class="input-group">
                                              <input type="text" class="form-control">
                                              <span class="input-group-addon">$</span>
                                          </div>
                                      </div>
                                  </div>-->
                              </div>
                            </div>
                            
                            
                        </div>
                        <div class="wizard-footer">
                            	<div class="pull-right">
                                    <input type='button' class='btn btn-finish btn-fill btn-info btn-wd btn-sm' name='finish' value='Change Password' />
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
                &copy; 2018 Lytes.App | Theme <i>by</i> <a href="http://www.creative-tim.com" target="_blank">Creative Tim</a>                
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

</html>
