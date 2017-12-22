<!DOCTYPE html>
<html>
<head>
    <title>LytesApp</title>
    <link rel="icon" href="{!! asset('img/favicon.ico') !!}"/>

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
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            font-weight: 300;
            font-family: 'Roboto';
            background-color: whitesmoke;
        }



        p{
            font-weight: 400;
            font-size: 1.1em;
        }



        .valign-wrapper .row .col{
            padding-top: 28% !important;
            padding-bottom: 25% !important;
        }

        nav{
            background-color: rgb(0,32,96) !important;

        }

        main {
            flex: 1 0 auto;
        }

    </style>


</head>

<body>

<header>
    @include('modules.nav.x-nav', ['link'=>'Login', 'address'=>'/login'])
</header>

<main>
    <div class="valign-wrapper">
        <div class="row">
            <div class="col s12 l12 m12">
                <h4> Check your inbox and confirm registration to login</h4>
                {{--<div style="text-align: center">--}}
                {{--<a class="btn waves-effect waves-light btn-large black" href="/" >--}}
                {{--<span style="font-size: 1.1em;">Homepage</span>--}}
                {{--</a>--}}
                {{--</div>--}}
            </div>
        </div>

    </div>
</main>


<footer>
    @include('modules.footer')
</footer>

</body>
</html>
