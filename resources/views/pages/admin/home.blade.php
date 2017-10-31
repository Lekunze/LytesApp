<!DOCTYPE html>
<html>
<head>
    <title>LAP - Admin|Dashboard</title>

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

@include('modules.gen-nav')

<br>
<div class="row">
    <div class="col l8 offset-l2">
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Business name</th>
                <th>Application Status</th>
            </tr>
            </thead>

            <tbody>
            @if(!empty($data))
                @foreach($data as $row)
                <tr>
                    <td>{{$row->business_owner_given_names}} {{$row->business_owner_last_name}}</td>
                    <td><a href="{{url('/profile/'.$row->id)}}"> {{$row->business_name}} </a></td>
                    <td>
                        <div class="row">
                            <div class="col s6">
                                <a class="btn-floating green"><i class="material-icons">done</i></a>
                                <a class="btn-floating red"><i class="material-icons">close</i></a>
                            </div>
                            <div class="col s6">

                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            @endif
            <!--<tr>
                <td>Alan</td>
                <td>Jellybean</td>
                <td>$3.76</td>
            </tr>
            <tr>
                <td>Jonathan</td>
                <td>Lollipop</td>
                <td>$7.00</td>
            </tr>-->
            </tbody>
        </table>

    </div>
</div>

</body>