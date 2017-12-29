<!DOCTYPE html>
<html>
<head>
    <title>
        @if(!empty($productX))
            {{$productX[0]->product_name}} | {{$business_name}}
        @endif
    </title>
    <link rel="icon" href="{!! asset('img/favicon.ico') !!}"/>


    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('materialize-css/css/materialize.min.css')}}">
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="{{asset('materialize-css/js/materialize.min.js')}}"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            font-family: 'Roboto';
            background-color: white;
        }

        main {
            flex: 1 0 auto;
        }


        blockquote{
            border-color: darkred !important;
        }


        form input{
            color: black !important;
        }


        .btn{
            background-color: black !important;
        }

        button.btn{
            background-color: darkred !important;
        }

        p{
            font-weight: 400;
            font-size: 1.1em;
        }

        h5{
            color: black !important;
        }



        .nav-wrapper #logo{
            font-family: 'Pacifico', cursive !important;
        }

        nav{
            background-color: rgb(0,32,96) !important;
        }

        .rating{
            color: gold;
        }


    </style>


</head>

<body>

<header>
    <div class="navbar-fixed">
        <nav class="top-nav" style="background-color: black">
            <div class="nav-wrapper">
                <a href="/" class="brand-logo center"><img src="{{asset('img/open.png')}}"></a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li style="background-color: black"><a href="/login">Sign In</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<main>
    <a href="{{URL::previous()}}"> <p style="margin-left: 1em"> <i class="tiny material-icons" style="">keyboard_backspace</i> <span style="font-size: 0.9em"> Return to main search </span></p></a>
    <div class="section">
        <div class="container">
            <div class="row">
                @if(!empty($productX))
                    <div class="col offset-m1 m5">
                        <img width="100%" src="{{asset(str_replace("public","storage",$productX[0]->product_images)."/product_1.jpg")}}" class="materialboxed">
                    </div>
                    <div class="col m5 s12">
                        <div class="row">
                            <div class="col m4">
                                <img width="100%" src="{{asset(str_replace("public","storage",$productX[0]->product_images)."/product_2.jpg")}}" class="materialboxed">
                            </div>
                            <div class="col m4">
                                <img width="100%" src="{{asset(str_replace("public","storage",$productX[0]->product_images)."/product_3.jpg")}}" class="materialboxed">
                            </div>
                            <div class="col m4">
                                <img width="100%" src="{{asset(str_replace("public","storage",$productX[0]->product_images)."/product_1.jpg")}}" class="materialboxed">
                            </div>
                        </div>


                        <span> <h4>{{$productX[0]->product_name}}</h4></span>
                        <div style="margin-top: -1em !important;"><a href="/{{$sme}}">{{$business_name}}</a>
                            <!--<span class="rating"><span class="fa fa-star"></span><span class="fa fa-star">
                                    </span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half-o"></span>
                            </span>-->
                        </div>
                        {{--<span>27 Inch, 3.4 GHz Intel Core i5, 8GB RAM, 1TB Fusion Drive, Silver</span><br>--}}
                        <div style="margin-top: -1em !important;">
                            <p style="color:darkred; font-size: 1.4em"> <strong> ¢{{$productX[0]->product_price}}</strong> </p>
                        </div>
                        <div style="margin-top: -1em !important;">
                            <h5 style="font-size:1.2em">Description</h5>
                            <p style="font-size:0.8em">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ornare in est vel scelerisque. In hac habitasse platea dictumst. Nunc congue, odio sed fermentum lacinia,
                            </p>
                        </div>
                        <div > <button class="btn" style="background-color: black !important;"> <i class="fa fa-shopping-cart"></i> Go to Shop </button></div>
                        {{--<div><i class="fa fa-phone"></i> 0302444666</div>--}}

                        <br>
                    </div>
                @endif
            </div>
        </div>
    </div>


</main>

<footer>
    @include('modules.footer')
</footer>



<script>

    $(document).ready(function(){
        $('.materialboxed').materialbox();
    });

    $('.btn').click(function(){
        window.location.href = '{{url('/sme/'.$sme)}}';
    });


    $(document).ready(function() {
        $('select').material_select();
    });


</script>


</body>
</html>
