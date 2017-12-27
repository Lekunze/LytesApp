<!DOCTYPE html>
<html>
<head>
    {{--<title>{{config('app.name')}}</title>--}}
    <title>Lytes.App: Your online shopping Mall</title>
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
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-family: 'Lato';
        }

        @media (min-width: 1200px) {
            .row.search-section{
                margin-top: -22em !important;
            }

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

        /* Portrait */
        @media only screen
        and (min-device-width: 375px)
        and (max-device-width: 667px)
        and (-webkit-min-device-pixel-ratio: 2)
        and (orientation: portrait) {

            .row.search-section{
                margin-top: -27em !important;
            }

        }



        /* iMac*/
        @media only screen
        and (min-device-width: 1920px)
        and (min-device-height: 1080px){

            .row.search-section{
                margin-top: -26em !important;
            }

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



        /* Portrait */
        @media only screen
        and (min-device-width: 750px)
        and (max-device-width: 1334px)
        and (orientation: portrait) {

            .row.search-section{
                margin-top: -24em !important;
            }

        }

        div.slider{
            margin: 0 !important;
            padding: 0 !important;
        }

        .slider .indicators{
            bottom: 48%;
            z-index: 20;
             text-align: right;
        }
        .slider ul.slides{
            height:55% !important;
            padding-bottom: 0em !important;

        }
        .slider{
            height:55% !important;
            padding-bottom: 0em !important;
        }
        .slider .slides li img{
            height:100% !important;
            padding-bottom: 0em !important;
        }

        input:not([type]), input[type=text], input[type=password], input[type=email], input[type=url], input[type=time],
        input[type=date], input[type=datetime], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], select,
        textarea.materialize-textarea {
            border-bottom: 2px solid !important;
            border-top: 2px solid !important;;
            border-left: 2px solid !important;;
            border-right: 2px solid !important;;
            border-color:  rgb(0,32,96) !important;

        }

        #search-special{
            height: 3.27em !important;
            background-color:  rgb(0,32,96);
            padding-top: 0.5em;
            margin-top: 1em !important;
            -moz-border-radius: 0px 15px 15px 0px !important;
            -webkit-border-radius: 0px 15px 15px 0px  !important;
            border-radius: 0px 15px 15px 0px  !important;
        }

        form{
            /*overflow: hidden !important;*/
            /*vertical-align: top !important;*/
        }

        /*input[type="search"]:focus{*/
            /*outline-color: darkred !important;*/
            /*border-bottom: 2px solid #9e9e9e !important;*/
            /*border-top: 2px solid #9e9e9e !important;*/
            /*border-left: 2px solid #9e9e9e !important;*/
            /*border-right: 2px solid #9e9e9e !important;*/
            /*border-color: black !important;*/
        /*}*/


        div#select.input-field.col.s2{

        }

        .select-wrapper{
            color:rgb(0,32,96);
            padding-left: 2em !important;

        }
        .select-dropdown{
            -moz-border-radius: 15px 15px 15px 15px !important;
            -webkit-border-radius: 15px 15px 15px 15px  !important;
            border-radius: 15px 15px 15px 15px  !important;
            font-weight: 500;
        }

        #search{
            -moz-border-radius: 15px 0px 0px 15px !important;
            -webkit-border-radius: 15px 0px 0px 15px !important;
            border-radius: 15px 0px 0px 15px !important;
        }

        select multiple{
            /*border-color: darkred !important;*/
            /*outline: 2px;*/
            /*color: rebeccapurple !important;*/
            /*border: 1px solid #AAA;*/
        }

        .input-field .col .s2{
            color:rgb(191,13,64) !important;
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
            background-color: rgb(0,32,96) !important;
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
            background-color: rgb(191,13,64);
        }

        footer{
            background-color: #323232 !important;
        }


        .card-image img{
            width: auto;
            height:auto;
        }



        h5{
            font-weight: 500 !important;
            font-size: 1.8em !important;
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


        .row.search-section{
            padding: 0em !important;
        }

        .section{
            padding-top: 0em !important;
            bottom: -10em !important;
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
            background-color: rgb(191,13,64) !important;
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

        h5 span a{
            color: rgb(0,32,96);
        }

        h5 span a:hover{
            text-decoration: underline;
        }

       #second-half{
           z-index: 50 !important;
       }

        #hidden{
            display: none !important;
        }

        .card-image.waves-effect.waves-block.waves-light:hover{
            cursor: zoom-in !important;
            transition: none !important;
            /*-webkit-tap-highlight-color:*/
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
                <h1 style="font-weight: 500; color:rgb(191,13,64)">Lytes.App</h1>
                <h5 class="light grey-text text-lighten-3" style="color:rgb(0,32,96)!important;">Your online shopping Mall</h5>
            </div>
        </li>
        <li>
            <img src="{{asset('img/shopping-2.jpeg')}}"/>
            <div class="caption right-align">
                <h3 style="font-weight: bold;">Father's Day Packages</h3>
                <h5 class="light grey-text text-lighten-3" style="color:rgb(191,13,64) !important;">Find that perfect gift for Dad</h5>
            </div>
        </li>
        <li>
            <img src="{{asset('img/shopping-3.jpeg')}}"/>
            <div class="caption left-align">
                <h3 style="color:rgb(191,13,64) !important; font-weight: bold;">Fresh Vegetables</h3>
                <h5 class="light grey-text text-lighten-3" style="color:rgb(0,32,96) !important;">Get fresh vegetables from farmers now</h5>
            </div>
        </li>
        <li>
            <img src="{{asset('img/shopping-4.jpeg')}}"/>
            <div class="caption right-align">
                <h3 style="font-weight: bold; color:rgb(191,13,64) !important;">Shop Christmas Gifts</h3>
                <h5 class="light grey-text text-lighten-3">Choose from amazing Christmas packages</h5>
            </div>
        </li>
    </ul>
</div>


<!--<div class="section">-->
<div class="row search-section" id="hidden">
    <form action="{{url('search')}}" method="GET" id="search-form">

        <div class="col s6 offset-s2">
                <a style="float:right; text-transform: none" id="search-special" class="btn waves-effect waves-light" onclick="searchPdt()">Search</a>
                <div class="input-field" style="overflow:hidden">
                    <input id="search" name="product" type="search" required>
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            <script>
                function searchPdt(){
                    if($('#search').val()==""){
                        location.reload();
                    }else{
                        document.getElementById('search-form').submit();
                    }
                }
            </script>
        </div>
        <div class="input-field col s2" id="select">
            <select name="category">
                <option value="0" selected>  &nbsp All Categories</option>
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
    </form>

</div>

<div id="second-half">
    <div class="section">
        <div class="row">
            <div class="cards">
                <div class="col l1 m1 s1"></div>

                <div class="col l10 m10 s10">
                    <h5 style="font-size: 1.6em; margin-left: 0.6em">Most viewed products <span style="font-size: 0.5em !important;float: right; margin-right: 1em"> <a href="#"> See more</a> </span></h5>

                    <div class="col l3 m3 s12">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="materialboxed" src="img/laptop-1.jpeg">
                            </div>
                            <div class="card-content">
                                <h4><a href="/view-product">iMac Pro 2015</a></h4>
                                <span> <a href="/sme/lexis-electronics"> Lexis Electronics </a></span>
                            </div>
                            <div class="card-action row">
                                <span class="col s7 location"><i class="fa fa-map-marker"></i> Achimota</span>
                                <span class="col s5 price" style="float:right !important;"><b>¢349.99</b> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col l3 m3 s3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="materialboxed" src="img/laptop-2.jpeg">
                            </div>
                            <div class="card-content">
                                <h4><a href="/view-product">Dell Inspiron X5</a></h4>
                                <span> <a href="/view-sme"> Lexis Electronics </a></span>
                            </div>
                            <div class="card-action row">
                                <span class="col s7 location"><i class="fa fa-map-marker"></i> Achimota</span>
                                <span class="col s5 price" ><b>¢1349.99</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col l3 m3 s3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="materialboxed" src="img/laptop-3.jpeg">
                            </div>
                            <div class="card-content">
                                <h4><a href="/view-product">Macbook Pro</a></h4>
                                <span> <a href="/view-sme"> Lexis Electronics </a></span>
                            </div>
                            <div class="card-action row">
                                <span class="col s7 location"><i class="fa fa-map-marker"></i> Achimota</span>
                                <span class="col s5 price" style="float:right !important;"><b>¢2549.99</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col l3 m3 s3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="materialboxed" src="img/laptop-4.jpeg">
                            </div>
                            <div class="card-content">
                                <h4><a href="/view-product">HP 360</a></h4>
                                <span> <a href="/view-sme"> Lexis Electronics </a></span>
                            </div>
                            <div class="card-action row">
                                <span class="col s7 location"><i class="fa fa-map-marker"></i> Achimota</span>
                                <span class="col s5 price" style="float:right !important;"><b>¢1049.99</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col l3 m3 s3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="materialboxed" src="img/mother-1.jpeg">
                            </div>
                            <div class="card-content">
                                <h4><a href="/view-product">Network Card</a></h4>
                                <span> <a href="/view-sme"> Lexis Electronics </a></span>
                            </div>
                            <div class="card-action row">
                                <span class="col s7 location"><i class="fa fa-map-marker"></i> Achimota</span>
                                <span class="col s5 price" style="float:right !important;"><b>¢2549.99</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col l3 m3 s3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="materialboxed" src="img/mother-4.jpeg">
                            </div>
                            <div class="card-content">
                                <h4><a href="/view-product">TX Motherboard</a></h4>
                                <span> <a href="/view-sme"> Lexis Electronics </a></span>
                            </div>
                            <div class="card-action row">
                                <span class="col s7 location"><i class="fa fa-map-marker"></i> Achimota</span>
                                <span class="col s5 price" style="float:right !important;"><b>¢2549.99</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col l3 m3 s3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="materialboxed" src="img/mother-2.jpg">
                            </div>
                            <div class="card-content">
                                <h4><a href="/view-product">Power TX</a></h4>
                                <span> <a href="/view-sme"> Lexis Electronics </a></span>
                            </div>
                            <div class="card-action row">
                                <span class="col s7 location"><i class="fa fa-map-marker"></i> Achimota</span>
                                <span class="col s5 price" style="float:right !important;"><b>¢2549.99</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col l3 m3 s3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="materialboxed" src="img/mother-1.jpeg">
                            </div>
                            <div class="card-content">
                                <h4><a href="/view-product">Ipsum Dolor</a></h4>
                                <span> <a href="/view-sme"> Lexis Electronics </a></span>
                            </div>
                            <div class="card-action row">
                                <span class="col s7 location"><i class="fa fa-map-marker"></i> Achimota</span>
                                <span class="col s5 price" style="float:right !important;"><b>¢2549.99</b></span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col l1 m1 s1"></div>
            </div>

        </div>



        <div class="row">
            <div class="cards">
                <div class="col l1 m1 s1"></div>

                <div class="col l10 m10 s10">
                    <hr> <br>
                    <h5 style="font-size: 1.6em; margin-left: 0.6em">Featured Businesses<span style="font-size: 0.5em !important;float: right; margin-right: 1em"> <a href="#"> See more</a> </span></h5>

                    <div class="col l3 m3 s3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="materialboxed" src="img/mother-1.jpeg">
                            </div>
                            <div class="card-content">
                                <h4><a href="/view-product">Network Card</a></h4>
                                <span> <a href="/view-sme"> Lexis Electronics </a></span>
                            </div>
                            <div class="card-action row">
                                <span class="col s7 location"><i class="fa fa-map-marker"></i> Achimota</span>
                                <span class="col s5 price" style="float:right !important;"><b>¢2549.99</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col l3 m3 s3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="materialboxed" src="img/mother-4.jpeg">
                            </div>
                            <div class="card-content">
                                <h4><a href="/view-product">TX Motherboard</a></h4>
                                <span> <a href="/view-sme"> Lexis Electronics </a></span>
                            </div>
                            <div class="card-action row">
                                <span class="col s7 location"><i class="fa fa-map-marker"></i> Achimota</span>
                                <span class="col s5 price" style="float:right !important;"><b>¢2549.99</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col l3 m3 s3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="materialboxed" src="img/mother-2.jpg">
                            </div>
                            <div class="card-content">
                                <h4><a href="/view-product">Power TX</a></h4>
                                <span> <a href="/view-sme"> Lexis Electronics </a></span>
                            </div>
                            <div class="card-action row">
                                <span class="col s7 location"><i class="fa fa-map-marker"></i> Achimota</span>
                                <span class="col s5 price" style="float:right !important;"><b>¢2549.99</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col l3 m3 s3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="materialboxed" src="img/mother-1.jpeg">
                            </div>
                            <div class="card-content">
                                <h4><a href="/view-product">Ipsum Dolor</a></h4>
                                <span> <a href="/view-sme"> Lexis Electronics </a></span>
                            </div>
                            <div class="card-action row">
                                <span class="col s7 location"><i class="fa fa-map-marker"></i> Achimota</span>
                                <span class="col s5 price" style="float:right !important;"><b>¢2549.99</b></span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col l1 m1 s1"></div>
            </div>

            <div class="divider"></div>


        </div>


    </div>
    <br>



</div>

@include('modules.footer')

<script>
    $(document).ready(function(){
        $('.card-image.waves-effect.waves-block.waves-light').materialbox();
    });

    $(document).ready(function(){
       $('#hidden').removeAttr('id');
    });
    $(document).ready(function(){
        $('.slider').slider();
        //$('.slider').height(600);
    });

    $(document).ready(function() {
        $('select').material_select();
    });


    $(document).ready(function(){
        $('.carousel').carousel();
    });




</script>



</body>
</html>
