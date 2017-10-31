<!DOCTYPE html>
<html>
<head>
    <title>LAP - Admin|Profile</title>

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

        .slider .indicators{
            bottom: 126%;
            z-index: 100;
            text-align: right;
        }
        .slider ul.slides{
            height:45% !important;
        }
        .slider{
            height:45% !important;
        }
        .slider .slides li img{
            height:100% !important;
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
            margin-top: -22em;
            z-index: 100;
        }

        .profile-name{
            text-align: center;
        }
        .profile-name span{
            font-size: 1.2em;
            font-weight: 500;
        }

        .material-icons{
            display: inline !important;
            vertical-align: middle !important;
        }

        ul li span{
            color: darkblue!important;
            font-weight: 400 !important;
        }

    </style>


</head>

<body>

@include('modules.gen-nav'  )
@include('modules.static-slider',['cover'=> $data->cover_image_1])

<div class="profile-picture">
    <div class="row">
        <div class="col s4 l4 m4"></div>
        <div class="col s4 l4 m4" id="profile-img">
            <img src="{{asset($data->business_logo)}}" alt="" class="circle responsive-img">
        </div>
        <div class="col s4 l4 m4"></div>
    </div>
</div>

<div class="profile-name">
    <h3> <b> {{$data->business_name}} </b> </h3>
    {{--<span>Oxford Street, Osu <br> +233 302-323662 <br> info@dellretail.com</span>--}}
</div>

<br>
<div class="divider"></div> <br>

<div class="row">
    <div class="col s1"></div>
    <div class="col s2">
        {{--<img class="materialboxed" width="200" height="100%" src="{{asset('img/person.jpeg')}}">--}}
    </div>
    <div class="col s6">
        <ul class="collapsible popout" data-collapsible="expandable">

            <li>
                <div class="collapsible-header active"><i class="material-icons">account_circle</i><b> Business Owner Profile </b></div>
                <div class="collapsible-body" >
                    <ul class="collection">
                        <li class="collection-item">Name: <span>{{$data->business_owner_given_names}} {{$data->business_owner_last_name}}</span></li>
                        <li class="collection-item">Nationality: <span>{{$data->nationality}}</span></li>
                        <li class="collection-item">Birthday: <span>{{$data->date_of_birth}}</span></li>
                        <li class="collection-item">ID Type:
                            <span>
                                @if(($data->id_type) == 1)
                                    Driver's License
                                @elseif(($data->id_type) == 2)
                                    National ID
                                @elseif(($data->id_type) == 3)
                                    Non-citizen ID
                                @elseif(($data->id_type) == 4)
                                    NHIS
                                @elseif(($data->id_type) == 5)
                                    Passport
                                @else
                                    Voter's ID
                                @endif
                            </span>
                        </li>
                        <li class="collection-item">ID Number: <span>{{$data->id_number}}</span></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">business</i> <b> Business Profile</b> </div>
                <div class="collapsible-body">
                    <ul class="collection">
                        <li class="collection-item">Business Name: <span>{{$data->business_name}}</span></li>
                        <li class="collection-item">Category:
                            <span>
                                 @if(($data->industry) == 1)
                                    Accommodation
                                @elseif(($data->industry) == 2)
                                    Automobile & Parts
                                @elseif(($data->industry) == 3)
                                    Beauty Products
                                @elseif(($data->industry) == 4)
                                    Books & Stationery
                                @elseif(($data->industry) == 5)
                                    Clothing
                                @elseif(($data->industry) == 6)
                                    Education
                                @elseif(($data->industry) == 7)
                                    Electronics
                                @elseif(($data->industry) == 8)
                                    Entertainment
                                @elseif(($data->industry) == 9)
                                    Food
                                @else
                                    Other
                                @endif
                            </span>
                        </li>
                        <li class="collection-item">Location: <span>{{$data->area}}, {{$data->region}}. {{$data->country}}</span></li>
                        <li class="collection-item">Address: <span>{{$data->address}}</span></li>
                        <li class="collection-item">Business Contact: <span>{{$data->phone_number}}</span></li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
    <div class="col s2">
        <a class="btn green" href="{{url('/dashboard/approve/'.$data->id)}}">Approve<i class="material-icons">done</i></a> <br> <br>
        <a class="btn red" href="{{url('/dashboard/reject/'.$data->id)}}"> Reject <i class="material-icons">close</i></a>
    </div>
    <div class="col s1"></div>
</div>


</body>


<script>
    $(document).ready(function(){
        $('.slider').slider();
        //$('.slider').height(600);
    });

    $(document).ready(function() {
        $('select').material_select();
    });

    $(document).ready(function(){
        $('.collapsible').collapsible();
    });

</script>

</html>