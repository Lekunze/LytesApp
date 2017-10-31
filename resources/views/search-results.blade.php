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
            background-color: whitesmoke;
        }


        .nav-wrapper #logo{
            font-family: 'Pacifico', cursive !important;
        }

        input:not([type]), input[type=text], input[type=password], input[type=email], input[type=url], input[type=time],
        input[type=date], input[type=datetime], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], select,
        textarea.materialize-textarea {
            /*background-color: transparent;
            border: none;*/
            border-bottom: 2px solid !important;
            border-top: 2px solid !important;;
            border-left: 2px solid !important;;
            border-right: 2px solid !important;;
            border-color: darkblue !important;;
            /*color: red !important;
            border-radius: 0;
            outline: none;
            height: 3rem;
            width: 100%;
            font-size: 1rem;
            margin: 0 0 20px 0;
            padding: 0;
            box-shadow: none;
            box-sizing: content-box;
            transition: all 0.3s;*/
        }

        #search-special{
            height: 3.3em !important;
            background-color: darkblue;
            padding-top: 0.5em;
            -moz-border-radius: 0px;
            -webkit-border-radius: 0px;
            border-radius: 0px;

        }

        input[type="search"]:focus{
            outline-color: darkred !important;
            border-bottom: 2px solid #9e9e9e !important;
            border-top: 2px solid #9e9e9e !important;
            border-left: 2px solid #9e9e9e !important;
            border-right: 2px solid #9e9e9e !important;
            border-color: black !important;
        }

        select multiple{
            border-color: darkred !important;
            outline: 2px;
            color: rebeccapurple !important;
            border: 1px solid #AAA;
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
            /*max-width: 150px;
            height: auto;
            max-height: 100px;*/

        }

        h5{
            font-size: 90%;
        }


        blockquote{
            border-color: darkred !important;
            /*background-color: silver;*/
        }

        nav{
            overflow: visible !important;
        }


    </style>


</head>

<body>

@include('modules.nav', ['link'=>'Sign In', 'address'=>'/login'])

<div class="row">

    <div class="col s2 m2 l2" style="background-color: white !important; height: 57.8em!important;"></div>

    <div class="col s8 m8 l8">
        <div class="row" id="search-section">
            <h4 style="text-align: center"> Search Results</h4>

            <div class="row">
                <div class="col s5 m5 l5 offset-l1">
                <form action="{{url('search')}}" method="POST" id="search-form">
                        <a style="float:right; text-transform: none" id="search-special" class="btn waves-effect waves-light" onclick="document.getElementById('search-form').submit();">Search</a>
                    <div class="input-field" style="overflow:hidden">
                        <input id="search" name="search" type="search" required>
                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    </div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                </form>
                </div>

                <div class="col s3 l3 m3">
                    <div class="input-field col s12">
                        <select >
                            <option value="" selected>  &nbsp Any Location</option>
                            <option value="37M"> &nbsp 37</option>
                            <option value="ABK"> &nbsp Abelenkpe</option>
                            <option value="ACC"> &nbsp Accra Central </option>
                            <option value="ACH"> &nbsp Achimota </option>
                            <option value="ADT"> &nbsp Adenta </option>
                            <option value="ALJ"> &nbsp Alajo </option>
                            <option value="CIC"> &nbsp Circle</option>
                            <option value="DNS"> &nbsp Dansoman</option>
                            <option value="ELG"> &nbsp East Legon</option>
                            <option value="HTS"> &nbsp Haatso</option>
                            <option value="KWM"> &nbsp Kwashieman</option>
                            <option value="LAP"> &nbsp Lapaz</option>
                            <option value="MAD"> &nbsp Madina</option>
                            <option value="RDG"> &nbsp Ridge</option>
                            <option value="SPI"> &nbsp Spintex</option>
                            <option value="TEM"> &nbsp Tema</option>
                        </select>
                    </div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </div>

                <div class="col s2 l2 m2">
                    <div class="input-field col s12">
                        <select >
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

        @if($products)
            @foreach($products as $product)
                <div class="col s12 m7">
                    {{--<h2 class="header">{{$product->product_name}}</h2>--}}
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="{{$product->product_image_1}}">
                        </div>
                        <div class="card-stacked">
                            <span class="card-title" style="margin-left: 1em; margin-top: 0.5em; "><b> {{$product->product_name}} </b></span>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">This is a link</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif


    </div>
    <div class="col s2 m2 l2" style="background-color: white !important; height: 57.8em!important;"></div>

</div>

<script>

    $(document).ready(function() {
        $('select').material_select();
    });

</script>


</body>
</html>