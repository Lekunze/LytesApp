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
                    <a href="/" class="brand-logo center"><img src="{{asset('img/open.png')}}"></a>
                </div>
            </nav>
        </div>

    </header>

    <div class="resize"> <img class="responsive-img" src="{{asset('img/banner.jpg')}}" width="100%"> </div>
    <div class="logo"> <img class="class responsive-img"  src="{{asset('img/logo-6.png')}}" width="200px" height="200px"> </div>

    <main>
        <br><br><br>
        <div style="text-align: center; font-size: 1.2em; font-weight: bold">
            @if(!empty($business))
                <h4 style="color:rgb(191,13,64)"> <strong> {{((array) $business[0])['business_name']}} </strong></h4>
                <span>{{((array) $business[0])['area']}}, {{((array) $business[0])['region']}}</span> <br>
                <span>(+233) {{((array) $business[0])['business_number']}}</span> <br>
                <span>{{((array) $business[0])['email']}}</span>
            @endif
            <br> <br>
        </div>
        <div class="row">
            <div class="col s10 offset-s1">
                <hr>
            </div>
        </div>
        @if(!empty($shelves))
            @foreach($shelves as $shelf)
                <div class="shelf-name" id="top-shelf">
                    <div class="row">
                        <div class="col l1 m1 s1">
                            {{--<img class="circle responsive-img" src="img/laptop.png" style="margin-top: 30% !important;">--}}
                            {{--<h5 style="color:black; text-decoration: underline !important;">{{$shelf->product_shelf}} </h5>--}}
                        </div>
                        <div class="col l8 m8 s8">
                            @foreach($products as $product)
                                @if($product->product_shelf == $shelf->product_shelf)
                                    <div class="col l3 m3 s3">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <img class="materialboxed" src="{{asset($product->product_image_1)}}">
                                            </div>
                                            <div class="card-content">
                                                <h4>
                                                    <a href="/product/{{((array) $business[0])['slug']}}/{{$product->slug}}">
                                                        {{$product->product_name}}
                                                    </a>
                                                </h4>
                                                <span>@if(!empty($business))
                                                        {{((array) $business[0])['business_name']}}
                                                    @endif
                                            </span>
                                            </div>
                                            <div class="card-action row">
                                            <span class="col s7 location"><i class="fa fa-map-marker"></i>
                                                @if(!empty($business))
                                                    {{((array) $business[0])['area']}}
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
