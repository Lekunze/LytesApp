<!DOCTYPE html>
<html>
<head>
    <title>LytesApp - Register</title>

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
        }
        @media (min-width: 1200px) {

            .card-content h4{
                /*font-weight: 400 !important;*/
                font-size: 1.1em !important;
            }
            .card-content span{
                font-size: 0.75em !important;
            }

            .col.s7.location{
                font-size: 0.8em !important;
            }
            .col.s5.price{
                font-size: 0.8em !important;
            }
        }

        /* iMac*/
        @media only screen
        and (min-device-width: 1920px)
        and (min-device-height: 1080px){

            .card-content h4{
                /*font-weight: 400 !important;*/
                font-size: 1.3em !important;
            }
            .card-content span{
                font-size: 0.85em !important;
            }

            .col.s7.location{
                font-size: 0.9em !important;
            }
            .col.s5.price{
                font-size: 0.9em !important;
            }

        }



        .nav-wrapper #logo{
            font-family: 'Pacifico', cursive !important;
        }


        .select-wrapper{
            color:black;
            padding-left: 2em !important;

        }
        .select-dropdown{
            -moz-border-radius: 15px 15px 15px 15px !important;
            -webkit-border-radius: 15px 15px 15px 15px  !important;
            border-radius: 15px 15px 15px 15px  !important;
            font-weight: 500;
            border-bottom: 2px solid !important;
            border-top: 2px solid !important;
            border-left: 2px solid !important;
            border-right: 2px solid !important;
            border-color: black !important;
        }

        #search{
            -moz-border-radius: 15px 0px 0px 15px !important;
            -webkit-border-radius: 15px 0px 0px 15px !important;
            border-radius: 15px 0px 0px 15px !important;
            border-bottom: 2px solid !important;
            border-top: 2px solid !important;
            border-left: 2px solid !important;
            border-right: 2px solid !important;
            border-color: black !important;

        }

        #search-special{
            height: 3.3em !important;
            background-color:black;
            padding-top: 0.5em;
            -moz-border-radius: 0px 15px 15px 0px !important;
            -webkit-border-radius: 0px 15px 15px 0px  !important;
            border-radius: 0px 15px 15px 0px  !important;

        }

        input[type="search"]:focus{
            outline-color: darkred !important;
            border-bottom: 2px solid #9e9e9e !important;
            border-top: 2px solid #9e9e9e !important;
            border-left: 2px solid #9e9e9e !important;
            border-right: 2px solid #9e9e9e !important;
            border-color: black !important;
        }



        .input-field .col .s2{
            color: #c7254e !important;
        }


        a.btn{
            width: 10em;
            height: 3em;
            padding-top: .3em;
        }

        #login-btn a{
            background-color: crimson;
        }

        footer{
            background-color: #323232 !important;
        }


        .card-image img{
            width: auto;
            height:auto;
        }

        span.caret{
            padding-right: 1.2em !important;
        }

        h5{
            font-size: 90%;
        }


        nav{
            overflow: visible !important;
        }

        .card-content{
            padding-top: 0em !important;
            padding-bottom: 0.5em !important;
            /*line-height: 80% !important;*/
        }


        .card-content h4{
            font-weight: 400 !important;
            margin-top: 0.5em !important;
            margin-bottom: -0.1em !important;
        }

        .card-content h4 a{
            color: black!important;
        }

        .card-content h4 a:hover{
            /*text-decoration: underline;*/
            color: firebrick !important;
        }

        .card-content span{
            font-style: italic !important;
        }

        .card-action.row{
            padding: 0em !important;
            padding-top: 0.4em !important;
            padding-bottom: 0.4em !important;
            background-color: black !important;
        }

        .col.s7.location{
            padding-left: 1.9em !important;
            color: whitesmoke;
        }
        .col.s5.price{
            padding-left: 1em !important;
            color: whitesmoke!important;
            /*font-size: 0.8em !important;*/

        }

        .select-wrapper input.select-dropdown{
            /*padding-left: 1em !important;*/
        }

        .collapsible-header{
            background-color: black;
            color:white;
        }

        .collapsible-body{
            padding-top: 0.5em !important;
            padding-bottom: 0.5em !important;
        }

        nav{
            background-color: black !important;
        }

        option{
            color: black !important;
        }




    </style>


</head>

<body>

@include('modules.nav.x-nav', ['link'=>'', 'address'=>''])

<div class="row">

    <div class="col s1 m1 l1">


    </div>

    <div class="col s10 m10 l10">
        <div class="row" id="search-section">

            <h4 style="text-align: center; font-size: 1.6em !important;"> Search Results</h4>

            <div class="row">
                <div class="col s6 m6 l6 offset-l1">
                <form action="{{url('search')}}" method="POST" id="search-form">
                        <a style="float:right; text-transform: none" id="search-special" class="btn waves-effect waves-light" onclick="submit()">Search</a>
                    <div class="input-field" style="overflow:hidden">
                        <input id="search" name="search" type="search" value="{{old('search')}}" required>
                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    </div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </form>
                </div>

                <div class="col s3 l3 m3">
                    <div class="input-field col s12">
                        <select name="category" value="{{old('category')}}">
                            <option value="" selected>  &nbsp All Categories</option>
                            <option value="2"> &nbsp Automobile & Parts</option>
                            <option value="3"> &nbsp Beauty Products</option>
                            <option value="4"> &nbsp Books & Stationery</option>
                            <option value="5"> &nbsp Clothing</option>
                            <option value="6"> &nbsp Education</option>
                            <option value="7"> &nbsp Electronics</option>
                            <option value="8"> &nbsp Entertainment</option>
                            <option value="9"> &nbsp Food</option>
                            <option value="10"> &nbsp Others</option>
                        </select>
                    </div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </div>
            </div>

        </div>
        <div class="divider"></div> <br>

        <div class="row">

            <div class="col l2 m2 s2">
                <h5 style="font-size: large; text-align: center"> Filter Search </h5>
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header active">Price</div>
                        <div class="collapsible-body">
                            <span>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dignissim at libero sit amet congue.
                            </span>
                        </div>
                    </li>
                </ul>
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header active">Location</div>
                        <div class="collapsible-body">
                            <span>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dignissim at libero sit amet congue.
                            </span>
                        </div>
                    </li>
                </ul>

            </div>

            <div class="col s10 m10 l10">
                <br> <br>
                @if($products!=null )
                    @foreach($products as $product)
                        <div class="col l3 m3 s3">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="materialboxed" src="{{asset($product->product_image_1)}}">
                                </div>
                                <div class="card-content">
                                    <h4><a href="#">{{$product->product_name}}</a></h4>
                                    <span> {{$product->business_name}}</span>
                                </div>
                                <div class="card-action row">
                                    <span class="col s7 location"><i class="fa fa-map-marker"></i>{{$product->area}}</span>
                                    <span class="col s5 price" style="float:right !important;"><b>¢{{$product->product_price}}</b></span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                @else
                    <div class="col s12 m12 l12">
                        <h5 style="text-align: center; font-size: large">No results to display</h5>
                    </div>
                @endif
            </div>

        </div>

    </div>
    <div class="col s1 m1 l1"></div>

</div>

<script>

    $(document).ready(function() {
        $('select').material_select();
    });

    $(document).ready(function(){
        $('.materialboxed').materialbox();
    });

    function submit(){
        if(document.getElementById('search').value == ""){
            alert('No data');
        }else{
            document.getElementById('search-form').submit();
        }

    }

</script>


</body>
</html>