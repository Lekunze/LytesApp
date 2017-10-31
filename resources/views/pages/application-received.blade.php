<!DOCTYPE html>
<html>
<head>
    <title>LytesApp</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('materialize-css/css/materialize.min.css')}}">
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
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

        blockquote{
            border-color: darkred !important;
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


        .btn{
            -moz-border-radius: 25px !important;
            -webkit-border-radius: 25px !important;
            border-radius: 25px !important;
        }

        .nav-wrapper #logo{
            font-family: 'Pacifico', cursive !important;
        }

        .valign-wrapper .row .col{
            padding-top: 28% !important;
            padding-bottom: 28% !important;
        }

        #contain{
            background-color: silver;
        }





    </style>


</head>

<body>

@include('modules.nav', ['link'=>'Home', 'address'=>'/'])

<div class="valign-wrapper">
    <div class="row">
        <div class="col s12 l12 m12">
            <h3> Application received and pending confirmation</h3>
            <div style="text-align: center">
                <a class="btn waves-effect waves-light btn-large black" href="/" >
                    <span style="font-size: 1.2em;">Homepage</span>
                </a>
            </div>
        </div>
    </div>

</div>

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


@yield('content')

</body>
</html>
