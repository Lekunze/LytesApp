<!DOCTYPE html>
<html>
<head>
    {{--<title>{{config('app.name')}}</title>--}}
    <title>Ooh Distin: Some shopping experience distin</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('materialize-css/css/materialize.min.css')}}">
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{asset('materialize-css/js/materialize.min.js')}}"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-family: 'Lato';
        }

        /*.container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }*/

        .slider .indicators {
            bottom: 38%;
            z-index: 100;
            /* text-align: left; */
        }
        .slider ul.slides{
            height:65% !important;
        }
        .slider{
            height:65% !important;
        }
        .slider .slides li img{
            height:100% !important;
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

        #search-section{
           margin-top: -10em;
        }

        .main-btns{
            position:relative;
            float: right;
            z-index: 100;
            margin-top: 1%!important;

        }

        #create-btn{
            display: inline-block !important;
        }
        #create-btn a{
            background-color: darkblue !important;
         }

        a.btn{
            width: 10em;
            height: 3em;
            padding-top: .3em;
        }

        #login-btn{
            display: inline-block !important;
        }

        #login-btn a{
            background-color: crimson;
        }

        footer{
            background-color: #323232 !important;
        }

        .white-text{
            font-size: 150%;
        }

        #latest-deals{
            background-color: crimson;
            text-align: center;
            height: 2em !important;
            padding-top: .5em !important;
            padding-bottom: 2.5em !important;
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

        .amt-dec{
            font-size: 100%;
            /*margin-left: -2%;*/
        }

        #ac{
            font-style: normal;
        }

        .light.grey-text.text-lighten-3{
            font-size:130%;
        }

        blockquote{
            border-color: darkred !important;
            /*background-color: silver;*/
        }

        .card-content{
            padding-top: 0.8em !important;
            padding-bottom: 0.1em !important;
        }




    </style>
</head>

<body>

@yield('nav')
@yield('buttons')


<div class="slider">
    <ul class="slides">
        <li>
            <img src="{{asset('img/shopping-1.jpeg')}}"/>
            <div class="caption right-align" style="color:black">
                <h3>Summer Deals</h3>
                <h5 class="light grey-text text-lighten-3" style="color:black!important;">Shop tops, shirt, blouses for the season</h5>
            </div>
        </li>
        <li>
            <img src="{{asset('img/shopping-2.jpeg')}}"/>
            <div class="caption right-align">
                <h3>Father's Day Packages</h3>
                <h5 class="light grey-text text-lighten-3">Find that perfect gift for Dad</h5>
            </div>
        </li>
        <li>
            <img src="{{asset('img/shopping-3.jpeg')}}"/>
            <div class="caption left-align">
                <h3>Fresh Vegetables</h3>
                <h5 class="light grey-text text-lighten-3">Get fresh vegetables from farmers now</h5>
            </div>
        </li>
        <li>
            <img src="{{asset('img/shopping-4.jpeg')}}"/>
            <div class="caption right-align">
                <h3>Shop Christmas Gifts</h3>
                <h5 class="light grey-text text-lighten-3">Choose from amazing Christmas packages</h5>
            </div>
        </li>
    </ul>
</div>


<!--<div class="section">-->
    <div class="row" id="search-section">
        <div class="col s4 offset-s2">
            <form action="{{url('search')}}" method="POST" id="search-form">
                <a style="float:right; text-transform: none" id="search-special" class="btn waves-effect waves-light" onclick="document.getElementById('search-form').submit();">Search</a>
                <div class="input-field" style="overflow:hidden">
                    <input id="search" name="search" type="search" required>
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </form>
        </div>

        <div class="input-field col s2">
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

        <div class="input-field col s2">
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
    </div>
<!--</div>-->


<div id="second-half">
    <div class="row">

        <!--Latest deals pane-->
        {{--<div class="col s8 l4 offset-l4 offset-s1">--}}
            {{--<div class="card-panel" id="latest-deals">--}}
                {{--<span class="white-text"> Latest Deals</span>--}}
            {{--</div>--}}
        {{--</div>--}}

        <!--Display different items-->
    </div>


    <div class="section">
        <div class="row">
            <div class="cards">
                <div class="col l2 m2 s2"></div>

                <div class="col l8 m8 s8">
                    <blockquote>
                        <h4> Latest Deals </h4>
                    </blockquote>

                    <div class="col l3 m3 s3">
                        <div class="card">
                            <div class="card-image">
                                <img class="materialboxed" src="img/shoes-1.jpeg">
                            </div>
                            <div class="card-content">
                                <span class="card-title" id="pdt-name"> Men's Loafers</span>
                                <span class="card-title"> <h5>GHS 200.00</h5></span>
                                {{--<p>Horseman Shoes</p>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col l3 m3 s3">
                        <div class="card">
                            <div class="card-image">
                                <img class="materialboxed" src="img/shoes-2.jpeg">
                            </div>
                            <div class="card-content">
                                <span class="card-title" id="pdt-name"> Men's Loafers</span>
                                <span class="card-title"> <h5>GHS 200.00</h5></span>
                                {{--<p>Horseman Shoes</p>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col l3 m3 s3">
                        <div class="card">
                            <div class="card-image">
                                <img class="materialboxed" src="img/laptop-1.jpeg">
                            </div>
                            <div class="card-content">
                                <span class="card-title" id="pdt-name"> Men's Loafers</span>
                                <span class="card-title"> <h5>GHS 200.00</h5></span>
                                {{--<p>Horseman Shoes</p>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col l3 m3 s3">
                        <div class="card">
                            <div class="card-image">
                                <img class="materialboxed" src="img/shoes-1.jpeg">
                            </div>
                            <div class="card-content">
                                <span class="card-title" id="pdt-name"> Men's Loafers</span>
                                <span class="card-title"> <h5>GHS 200.00</h5></span>
                                {{--<p>Horseman Shoes</p>--}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col l2 m2 s2"></div>
            </div>

            <div class="divider"></div>


        </div>

    </div>
   <br>

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
        $('.materialboxed').materialbox();
    });

    $(document).ready(function(){
        $('.carousel').carousel();
    });


</script>



</body>
</html>
