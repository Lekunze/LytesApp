<!DOCTYPE html>
<html>
<head>
    <title>LytesApp - Register</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('materialize-css/css/materialize.min.css')}}">
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="{{asset('materialize-css/js/materialize.min.js')}}"></script>

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
            background-color: whitesmoke;
        }

        main {
            flex: 1 0 auto;
        }

        .slider .indicators{
            display: none !important;
            /* text-align: left; */
        }
        .slider ul.slides{
            height:55% !important;
        }
        .slider{
            height:55% !important;
        }
        .slider .slides li img{
            height:100% !important;
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

        .tabs li{
            text-transform: none !important;
        }

        .tabs li a{
            color: darkred !important;
            font-size: 1.2em !important;
            /*font-weight: bold !important;*/
        }

        .tabs .indicator{
            background-color: darkred !important;
        }

        .btn{
            /*-moz-border-radius: 25px !important;*/
            /*-webkit-border-radius: 25px !important;*/
            /*border-radius: 25px !important;*/
        }

        button.btn{
            background-color:  rgb(191,13,64) !important;
        }

        .nav-wrapper #logo{
            font-family: 'Pacifico', cursive !important;
        }

        .row{
            /*margin-bottom: -1em !important;*/
        }

        nav{
            background-color: rgb(0,32,96) !important;
        }

        .nav-wrapper ul li{
            background-color: rgb(191,13,64) !important;
        }
        .nav-wrapper ul li a{
            color: white !important;
            font-weight: 400 !important;
        }

    </style>


</head>

<body>

<header>
    @include('modules.nav.x-nav', ['link'=>'New Shop', 'address'=>'/register'])
</header>

<main>
    <br> <br> <br>
    @yield('content')


</main>

<footer>
    @include('modules.footer')
</footer>



<script>
    $(document).ready(function(){
        $('.slider').slider();
        //$('.slider').height(600);
    });

    $(document).ready(function() {
        $('select').material_select();
    });

    $(document).ready(function(){
        $('ul.tabs').tabs();
    });

    $(document).ready(function(){
        $('ul.tabs').tabs('select_tab', 'tab_id');
    });

</script>


</body>
</html>
