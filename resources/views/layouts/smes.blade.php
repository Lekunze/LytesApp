<!DOCTYPE html>
<html>
<head>
    <title>{{config('app.name')}}</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="materialize-css/css/materialize.min.css">
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="materialize-css/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">


    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';

        }


        .slider .indicators{
            bottom: 52%;
            z-index: 100;
            text-align: right;
        }
        .slider ul.slides{
            height:50% !important;
        }
        .slider{
            height:50% !important;
        }
        .slider .slides li img{
            height:100% !important;
        }

        #profile-img img{
            height: 11em;
            width: 12em;
        }

        #profile-img{
            text-align: center;
        }

        .profile-picture{
            position: relative;
            margin-top: -25em;
            z-index: 100;
        }

        .profile-name{
            text-align: center;
        }
        .profile-name span{
            font-size: 1.2em;
            font-weight: 500;
        }

        .shelf-name{
            text-align: center;
            color: darkblue;
        }


        .load-btn{
             text-align: center;
         }

        .load-btn a{
            background-color: black;
        }

        .btn-large{
            -moz-border-radius: 25px !important;
            -webkit-border-radius: 25px !important;
            border-radius: 25px !important;
        }

        .page-footer{
            background-color: #01579b !important;
        }
        .nav-wrapper #logo{
            font-family: 'Pacifico', cursive !important;
        }

        #img-logo{
            height: 80%;
            width: 80%;
            text-align: center !important;
            margin-left: 1em;
        }


    </style>

    <style type="text/css">
        /*Source: http://opoloo.github.io/jquery_upload_preview/ */

        #image-preview, #image-preview-2, #image-preview-3 {
            width: 200px;
            height: 200px;
            position: relative;
            overflow: hidden;
            background-color: #ffffff;
            color: #ecf0f1;
        }
        #image-preview input, #image-preview-2 input, #image-preview-3 input{
            line-height: 200px;
            font-size: 200px;
            position: absolute;
            opacity: 0;
            z-index: 10;
        }


        #image-preview label, #image-preview-2 label, #image-preview-3 label{
            position: absolute;
            z-index: 5;
            opacity: 0.8;
            cursor: pointer;
            background-color: black;
            width: 100px;
            height: 50px;
            font-size: 15px;
            line-height: 50px;
            text-transform: uppercase;
            color: white;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            text-align: center;
            text-transform: none;
        }

        .page-flexbox-wrapper {

            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main{
            flex: 1 1 auto;

        }


    </style>

</head>

<body>

<div class="page-flexbox-wrapper">

<header>
    <div class="navbar-fixed">
        <nav class="top-nav" style="background-color: black">
            <div class="nav-wrapper">
                <ul class="right hide-on-med-and-down">
                    <a href="/" class="brand-logo center" id="logo">Ooh Distin</a>
                    <li style="background-color: #01579b"><a href="#">Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <ul style="width:15%; margin-top:65px; background-color: silver" class="side-nav fixed" >
        <div class="row">
            <br>
            <div class="col s10 offset-s1">
                <img src="img/logo-1.jpg" alt="" class="circle responsive-img" id="img-logo">
                <h4 style="text-align: center"> Xenou Computers</h4>
            </div>
            <div class="col s1"></div>
            </hr>
        </div>
        <li><div class="divider"></div></li>
        <li><a href="/sme"><i class="material-icons">shop</i>Store</a></li>
        <li><div class="divider"></div></li>
        <li><a href="/new"><i class="material-icons">add_shopping_cart</i>Add Product</a></li>
        <li><div class="divider"></div></li>
        <li><a href="/change"> <i class="material-icons">settings</i> Settings</a></li>
        <li><div class="divider"></div></li>
        <li><a href="#"> <i class="material-icons">remove_red_eye</i> Preview</a></li>
        <li><div class="divider"></div></li>
        <li><a href="#"> <i class="material-icons">exit_to_app</i> Logout</a></li>
        <li><div class="divider"></div></li>
    </ul>
</header>
<!--
{{--@include('modules.nav.sme-nav')--}}


<ul id="slide-out" class="side-nav fixed">
    <li><a href="#!">First Sidebar Link</a></li>
    <li><a href="#!">Second Sidebar Link</a></li>
</ul>
<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
-->
<main>
    @yield('products')
</main>
@include('modules.footers.sample')

<!--<div class="profile-picture">
    <div class="row">
        <div class="col s4 l4 m4"></div>
        <div class="col s4 l4 m4" id="profile-img">
            <img src="img/logo-1.jpg" alt="" class="circle responsive-img">
        </div>
        <div class="col s4 l4 m4"></div>
    </div>
</div>

<div class="profile-name">
    <h3> <b> Delali Computers </b> </h3>
    {{--<span>Oxford Street, Osu <br> +233 302-323662 <br> info@dellretail.com</span>--}}
</div>

<br>
<div class="divider"></div> <br>
-->
</div>






</body>
</html>
