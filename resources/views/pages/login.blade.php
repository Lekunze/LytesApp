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
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 300;
            font-family: 'Roboto';
            background-color: whitesmoke;
        }

        .slider .indicators{
            bottom: 120%;
            z-index: 100;
            /* text-align: left; */
        }
        .slider ul.slides{
            height:40% !important;
        }
        .slider{
            height:40% !important;
        }
        .slider .slides li img{
            height:100% !important;
        }

        blockquote{
            border-color: darkred !important;
        }

        .tabs{
            margin-top: -13em !important;
        }

        form{
            margin-top: -13em !important;
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
            -moz-border-radius: 25px !important;
            -webkit-border-radius: 25px !important;
            border-radius: 25px !important;
        }

        .nav-wrapper #logo{
            font-family: 'Pacifico', cursive !important;
        }

    </style>


</head>

<body>

@include('modules.nav', ['link'=>'New Business', 'address'=>'/register'])


<div class="slider">
    <ul class="slides">
        <li>
            <img src="{{asset('img/login.jpeg')}}"/>
            <div class="caption left-align" style="color:whitesmoke">
                <h3>Get Started</h3>
                <h5 class="light grey-text text-lighten-3" style="color:#000019!important;">Your ultimate shopping experience</h5>
            </div>
        </li>
    </ul>
</div>

@yield('content')

@include('modules.footer')



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

<script>
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 200, // Creates a dropdown of 15 years to control year,
        today: 'Today',
        clear: 'Clear',
        max:true,
        close: 'Ok',
        closeOnSelect: false // Close upon selecting a date,
    });
</script>

</body>
</html>
