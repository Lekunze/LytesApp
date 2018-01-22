<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('new-ui/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/shopping-cart.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>About Us - LytesApp</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{asset('new-ui/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('new-ui/css/material-kit.css')}}" rel="stylesheet"/>

    <style>
        .navbar .navbar-nav > li > a {
            color: inherit;
            font-weight: 400;
            font-size: 12px !important;
            text-transform: uppercase;
            border-radius: 3px;
        }

        .pull-right a{
            color:black !important;
        }

        .pull-right a:hover{
            color:rgb(191,13,64) !important;
            text-decoration: underline;
        }

        .pull-left ul li a:hover{
            color:rgb(191,13,64) !important;

        }


        div.section.text-center.section-landing{
            padding: 50px 0 0 !important;
        }

        div.section.landing-section{
            padding-top: 10px !important;
        }

        div.features{
            padding-top: 10px !important;
        }

        .pull-left ul li a:hover{
            color:rgb(191,13,64) !important;

        }





        @media screen and (min-width: 1024px){
            .pull-right{
                margin-top: 15px !important;
            }

            #l1{
                color:rgb(0, 32, 96) !important;
            }
            #l2{
                color:white !important;
            }

            .pull-right{
                float:right !important;
                text-align:right !important;
                margin-left: 0 !important;
            }

        }

        @media screen and (min-width: 1440px){
            .pull-right{
                margin-top: 15px !important;
            }

            .pull-left{
                margin-top: 5px !important;

            }

            #l1{
                color:rgb(0, 32, 96) !important;
            }
            #l2{
                color: white !important;
            }

        }

        @media screen and (min-width: 360px){
            #l1{
                color:rgb(191,13,64) !important;
            }
            #l2{
                color:rgb(0, 32, 96) !important;
            }

            .pull-left{
                float: none !important;
                text-align: center !important;

            }
            .pull-right{
                /*float: none !important;*/
                margin-right: 20px !important;


            }
            footer ul li a {
                padding:10px !important;
            }

        }

        @media only screen
        and (min-device-width: 375px)
        and (max-device-width: 667px)
        and (-webkit-min-device-pixel-ratio: 2)
        and (orientation: portrait) {
            .pull-left{
                /*display: block !important;*/
                margin-left: 35px !important;
            }

            .pull-right{
                margin-right: 50px !important;
            }
        }



    </style>

</head>

<body class="landing-page">
<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Lytes.App</a>
        </div>

        <div class="collapse navbar-collapse" id="navigation-example">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/" style="font-size:1.2em;">
                        <i class="material-icons">home</i> Home
                    </a>
                </li>
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
                <li>
                    <a rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/LytesApp/" target="_blank" class="btn btn-white btn-simple btn-just-icon">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper">
    <div class="header header-filter" style="background-image: url('img/about-2.jpeg');">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title"><span style="color:rgb(0, 32, 96);" id="l1">Lytes</span><span style="color:white !important;" id="l2">App</span></h1>
                    <h4>Join the rest of the World. Let's get online!</h4>
                    <br />
                    <!--<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-danger btn-raised btn-lg">
                        <i class="fa fa-play"></i> Watch video
                    </a>-->
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="container">
            <div class="section text-center section-landing">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">Who we are</h2>
                        <h5 class="description">
                            Lytes.App is an online platform that connects both buyers and sellers in a unique way. The objective is to make creation of shops possible and
                            easy for people. Through Lytesapp, businesses, especially small and medium scale business owners should be able to create a self-managed online
                            shop for free and without paying for hosting or any domain.
                        </h5>
                    </div>
                </div>

                <div class="features">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="material-icons">accessibility</i>
                                </div>
                                <h4 class="info-title">Easy Shop Creation</h4>
                                <p>Add your shop online in a matter of minutes for FREE. No hosting or costs for your unique shop URL.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-warning">
                                    <i class="material-icons">chat</i>
                                </div>
                                <h4 class="info-title">Interact with Shop Owners</h4>
                                <p>Interact directly with shop owners, bargain product prices and place orders without any fear of being defrauded.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="material-icons">search</i>
                                </div>
                                <h4 class="info-title">Find Any Product</h4>
                                <p>Browse through several products from different sellers and compare prices and product quality. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="section text-center">
                <h2 class="title">Here is our team</h2>

                <div class="team">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="../assets/img/avatar.jpg" alt="Thumbnail Image" class="img-raised img-circle">
                                <h4 class="title">Gigi Hadid <br />
                                    <small class="text-muted">Model</small>
                                </h4>
                                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="../assets/img/christian.jpg" alt="Thumbnail Image" class="img-raised img-circle">
                                <h4 class="title">Christian Louboutin<br />
                                    <small class="text-muted">Designer</small>
                                </h4>
                                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="../assets/img/kendall.jpg" alt="Thumbnail Image" class="img-raised img-circle">
                                <h4 class="title">Kendall Jenner<br />
                                    <small class="text-muted">Model</small>
                                </h4>
                                <p>You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-google-plus"></i></a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-youtube-play"></i></a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>-->


            <div class="section landing-section">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2" style="text-align: center !important;">
                        <a class="btn btn-success btn-raised" href="/register">
                            Get Started - Create New Shop
                        </a>
                        <!--<h2 class="text-center title">Work with us</h2>
                        <h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will responde get back to you in a couple of hours.</h4>
                        <form class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Your Name</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Your Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group label-floating">
                                <label class="control-label">Your Message</label>
                                <textarea class="form-control" rows="4"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 text-center">
                                    <button class="btn btn-success btn-raised">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>-->
                    </div>
                </div>

            </div>
        </div>

    </div>

    <footer class="footer footer-transparent">
        <div class="container">
            <nav class="pull-left" style="display: inline-block !important;">
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

				<span>
					&copy; 2018 Lytes.App | <a href="mailto:info@lytesapp.com"> info@lytesapp.com
				<i class="fa fa-envelope" aria-hidden="true"></i> </a>
					</span>
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


</html>
