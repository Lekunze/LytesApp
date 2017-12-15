<!DOCTYPE html>
<html>
<head>
    <title>LytesApp: Ghana's Leading SME Catalog</title>
    <link rel="icon" href="{!! asset('img/favicon.ico') !!}"/>
    <!-- <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>-->


    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('materialize-css/css/materialize.min.css')}}">
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{asset('materialize-css/js/materialize.min.js')}}"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            /*display: table;*/
            font-family: 'Lato';
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        footer{
            background-color: #323232 !important;
        }


        main{
            flex: 1 1 auto;

        }

        .card-image img{
            width: auto;
            height:auto;
        }



        h5{
            font-size: 90%;
        }

        .light.grey-text.text-lighten-3{
            font-size:130%;
        }

        blockquote{
            border-color: darkred !important;
            /*background-color: silver;*/
        }

        .card-content{
            padding-top: 0em !important;
            padding-bottom: 0.5em !important;
            /*line-height: 80% !important;*/
        }


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
            /*text-decoration: underline;*/
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
            padding-left: 1.9em !important;
            font-size: 0.9em !important;
        }
        .col.s5.price{
            padding-left: 1em !important;
            font-size: 0.9em !important;
            color: rgb(0,32,96)!important;
            /*font-size: 0.8em !important;*/

        }

        .resize{
            background-image: url({{asset('img/shopping-1.jpeg')}});
            height: 30% !important;
            /*zoom: 10% !important;*/
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        /*img.resize{
        }*/

        .logo{
            position: relative;
            bottom: 20%;
            text-align: center;
        }



    </style>


</head>

<body>


{{--<div class="page-flexbox-wrapper">--}}
    <header>

    </header>

    <div class="resize"></div>
    <div class="logo"> <img src="{{asset('img/whole.png')}}"> </div>







    <main>

    </main>

    <footer>
        @include('modules.footer')

    </footer>


{{--</div>--}}



</body>
</html>
