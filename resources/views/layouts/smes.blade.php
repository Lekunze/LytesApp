<!DOCTYPE html>
<html>
<head>
    <title>
         @if(!empty($business))
                 {{((array) $business[0])['business_name']}}
        @endif
    </title>
    <link rel="icon" href="{!! asset('img/favicon.ico') !!}"/>


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

        @media only screen and (min-width : 1920px) {
            .side-nav {
                width: 15% !important;
            }
        }

        .chip{
            height: 4em;
            width: 20em;
            background-color: black;
            color:white;
        }


    </style>

    <style type="text/css">
        /*Source: http://opoloo.github.io/jquery_upload_preview/ */



        .page-flexbox-wrapper {

            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main{
            flex: 1 1 auto;

        }

        .card-image img{
            width: auto;
            height:auto;
        }

        nav{
            background-color: rgb(0,32,96) !important;
        }

        .page-footer{
            background-color: #323232 !important;
        }

        .footer-copyright{
            background-color: black !important;
        }


    </style>

</head>

<body>

<div class="page-flexbox-wrapper">

<header>
    <div class="navbar-fixed">
        <nav class="top-nav" style="background-color: black">
            <div class="nav-wrapper">
                <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
                <a href="#!" class="brand-logo center"><img src="{{asset('img/open.png')}}"></a>

            </div>
        </nav>
    </div>

    <ul style="width:20%; margin-top:65px; background-color: silver" class="side-nav" id="slide-out">
        <div class="row">
            <br>
            <div class="col s10 offset-s1">
                <img src="img/logo-1.jpg" alt="" class="circle responsive-img" id="img-logo">
                <h5 style="text-align: center; font-weight: bold">
                    @if(!empty($business))
                        {{((array) $business[0])['business_name']}}
                    @endif
                </h5>
            </div>
            <div class="col s1"></div>
            </hr>
        </div>
        <li><div class="divider"></div></li>
        <li><a href="/sme"><i class="material-icons">store</i>Store</a></li>
        <li><div class="divider"></div></li>
        <li><a href="/new"><i class="material-icons">add_shopping_cart</i>Add Product</a></li>
        <li><div class="divider"></div></li>
        <li><a href="/layout"><i class="material-icons">business</i>Account Info</a></li>
        <li><div class="divider"></div></li>
        <li><a href="/products  "><i class="material-icons">add_shopping_cart</i>Manage Products </a></li>
        <li><div class="divider"></div></li>
        <li><a href="/change"> <i class="material-icons">settings</i> Settings</a></li>
        <li><div class="divider"></div></li>
        {{--<li><a href="#"> <i class="material-icons">remove_red_eye</i> Preview</a></li>--}}
        {{--<li><div class="divider"></div></li>--}}
        <li><a href="/logout"> <i class="material-icons">exit_to_app</i> Logout</a></li>
        <li><div class="divider"></div></li>
    </ul>
</header>

<main>
    @yield('products')
</main>
    @if(!empty($business))
        @include('modules.footers.sample',['sme'=> ((array) $business[0])['business_name'],
         'contact' => ((array) $business[0])['business_number'], 'email' => ((array) $business[0])['email'],
         'tagline' => 'Buy computers, peripherals and accessories at discounted prices'])
    @endif

</div>

<script>
    $(".button-collapse").sideNav();
</script>






</body>
</html>
