<!DOCTYPE html>
<html>
<head>
    <title>
        @if(!empty($business))
            {{$business[0]->business_name}}
        @endif
    </title>

    <link rel="icon" href="{!! asset('img/favicon.ico') !!}"/>


    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('materialize-css/css/materialize.min.css')}}">
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{asset('materialize-css/js/materialize.min.js')}}"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">


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
            background-color: ghostwhite !important;

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
    <style>
        .card-content h4{
            font-weight: 400 !important;
            font-size: 1.3em !important;
            margin-top: 0.5em !important;
            margin-bottom: -0.1em !important;

        }

        .card-content h4 a{
            color: black!important;
        }

        .card-content h4 a:hover{
            color: #42a5f5 !important;
        }

        .card-content span{
            font-size: 0.85em !important;
            font-style: italic !important;
        }

        .card-action.row{
            padding: 0em !important;
            padding-top: 0.4em !important;
            padding-bottom: 0.4em !important;
            background-color: lightgrey !important;
        }

        .col.s7.location{
            padding-left: 0 !important;
            margin: 0 !important;
            font-size: 0.9em !important;
            font-weight: 400 !important;
            color: white !important;
        }
        .col.s5.price{
            padding-left: 0em !important;
            font-size: 0.9em !important;
            color: white !important;
        }

        .card-content{
            padding-top: 0em !important;
            padding-bottom: 0.5em !important;
        }

        .resize{
            position: relative;
        }

        .logo{
            position: absolute;
            top: 15%;
            right:43%;
            text-align: center;
        }

        @media only screen and (min-width : 1920px) {
            .logo {
                right: 45% !important;
                top: 17% !important;
            }
        }

        hr{
            border-top: 2px solid #c7254e;
        }


        .card-action.row{
            background-color: rgb(191,13,64) !important;
        }
    </style>

</head>

<body>

<div class="page-flexbox-wrapper">

    <header>
        <div class="navbar-fixed">
            <nav class="top-nav" style="background-color: black">
                <div class="nav-wrapper">
                    <a class="brand-logo center" style="color:whitesmoke; margin-bottom: 0 !important; font-size: 170%; font-weight: 300"> {{$business[0]->business_name}}</a>
                    <ul class="right hide-on-med-and-down">
                        <li style="margin-right:1em"><a href=""><i class="material-icons">add_alert</i></a></li>
                    </ul>
                    <ul class="left hide-on-med-and-down">
                        <li style="margin-right:1em; background-color: black; font-weight: 300"><a href="/login">Login</a></li>
                    </ul>
                </div>
            </nav>
        </div>

    </header>

    <div class="resize">
        <img class="responsive-img" src="{{asset('img/banners.png')}}" width="100%" style="position:absolute">
        <div class="fixed-action-btn horizontal" style="top: 8.5em !important;position: absolute">
            <a class="btn-floating btn-large red" >
                <i class="large material-icons">store</i>
            </a>
            <ul>
                <li><a class="btn black">We're Open Now</a></li>
                {{--<li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>--}}
                <!--<li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>-->
            </ul>
        </div>
        {{--<a class="btn-floating btn-large waves-effect waves-light red" style="position: relative; float:right; top:8.5em; right:2em"><i class="material-icons">store</i></a>--}}
    </div>
{{--    <div class="logo"> <img class="class responsive-img"  src="{{asset('img/logo-6.png')}}" width="200px" height="200px"> </div>--}}

    <main>
        <br>
        <div style="text-align: center; font-size: 1.2em; font-weight: bold">
            @if(!empty($business))
                {{--<span>info@business.com</span>--}}
            @endif

        </div>
        {{--<div class="row">--}}
            {{--<div class="col s10 offset-s1">--}}
                {{--<hr>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!--<div class="carousel">
            <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
            <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
            <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
            <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
            <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
        </div>-->
        <br><br><br><br><br><br><br>
        @if(!empty($shelves))
            @foreach($shelves as $shelf)
                <div class="shelf-name" id="top-shelf">
                    <div class="row">
                        <div class="col l1 m1 s1">
                            {{--<img class="circle responsive-img" src="img/laptop.png" style="margin-top: 30% !important;">--}}
                            {{--<h5 style="color:black; text-decoration: underline !important;">{{$shelf->product_shelf}} </h5>--}}
                        </div>
                        <div class="col l10 m10 s10">
                            <h5 style="text-align: left; margin-left:0.5em;">{{$shelf->shelf_name}}</h5>
                            {{--<hr style="border-color:black; margin-left:0.5em;">--}}
                            @foreach($products as $product)
                                @if($product->product_shelf == $shelf->shelf_name)

                                    <div class="col l3 m3 s3">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <img class="materialboxed" src="{{asset(str_replace("public","storage",$product->product_images)."/product_1.jpg")}}">
                                            </div>
                                            <div class="card-content">
                                                <h4>
                                                    <a href="/{{$business[0]->business_slug}}/w{{$product->slug}}">
                                                        {{$product->product_name}}
                                                    </a>
                                                </h4>
                                                <span>@if(!empty($business))
                                                        {{$business[0]->business_name}}
                                                    @endif
                                            </span>
                                            </div>
                                            <div class="card-action row">
                                            <span class="col s7 location"><i class="fa fa-map-marker"></i>
                                                @if(!empty($business))
                                                    {{$business[0]->business_area}}
                                                @endif
                                            </span>
                                                <span class="col s5 price" style="float:right !important;"><b>¢{{$product->product_price}}</b></span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="divider"></div> <br>
                </div>
            @endforeach
        @endif


        <script>


            $("#close").on("click", function () {
                $("#card-1").hide();


            });

            $(function () {
                $(document).on('click', 'span', function () {
                    if($("#manage").text() == "Save") {
                        var input = $('<input />', {
                            'type': 'text',
                            'name': 'unique',
                            'value': $(this).html()
                        });
                        $(this).parent().append(input);
                        $(this).remove();
                        input.focus();
                    }
                });

                $(document).on('blur', 'input', function () {
                    $(this).parent().append($('<span />').html($(this).val()).addClass('card-title'));
                    $(this).remove();
                });


            });



        </script>
    </main>
    @if(!empty($business))
        @include('modules.footers.sample',['sme'=> $business[0]->business_name,
         'contact' => $business[0]->business_number, 'email' => 'info@business.com',
         'tagline' => 'Buy computers, peripherals and accessories at discounted prices'])
    @endif

</div>

<script>
    $(".button-collapse").sideNav();

    $(document).ready(function(){
        $('.carousel').carousel();
    });
</script>






</body>
</html>
