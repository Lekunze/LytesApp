<!DOCTYPE html>
<html>
<head>
    <title>LytesApp: Product View</title>
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
                {{--<a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>--}}
                <a href="/" class="brand-logo center"><img src="{{asset('img/open.png')}}"></a>

            </div>
        </nav>
    </div>
</header>

<main>

    <br> <br>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col offset-m1 m5">
                    <img width="100%" src="img/laptop-1.jpeg" class="materialboxed">
                </div>
                <div class="col m5 s12">
                    <div class="row">
                        <div class="col m4">
                            <img width="100%" src="img/laptop-1.jpeg" class="materialboxed">
                        </div>
                        <div class="col m4">
                            <img width="100%" src="img/laptop-1.jpeg" class="materialboxed">
                        </div>
                        <div class="col m4">
                            <img width="100%" src="img/laptop-1.jpeg" class="materialboxed">
                        </div>
                    </div>


                    <span> <h4>Apple iMac Pro</h4></span>
                    <div style="margin-top: -1em !important;"><a href="#">Lexis Electronics</a>
                        <span class="rating"><span class="fa fa-star"></span><span class="fa fa-star">
                                </span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half-o"></span>
                        </span>
                    </div>
                    {{--<span>27 Inch, 3.4 GHz Intel Core i5, 8GB RAM, 1TB Fusion Drive, Silver</span><br>--}}
                    <div>
                        <p style="color:darkred; font-size: 1.4em"> <strong> ¢1340.00 </strong> </p>
                    </div>
                    <div > <button class="btn" style="background-color: black !important;"> <i class="fa fa-shopping-cart"></i> Go to Shop </button></div>
                    {{--<div><i class="fa fa-phone"></i> 0302444666</div>--}}

                    <br>
                    {{--<a><i class="fa fa-long-arrow-left"></i> Back to search page</a>--}}
                </div>
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
       window.location.href = '{{url('view-sme')}}';
    });


    $(document).ready(function() {
        $('select').material_select();
    });


</script>


</body>
</html>
