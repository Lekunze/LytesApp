<!DOCTYPE html>
<html>
<head>
    <title>Lytes.App: Search Results</title>
    <link rel="icon" href="{!! asset('img/favicon.ico') !!}"/>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('materialize-css/css/materialize.min.css')}}">
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{asset('materialize-css/js/materialize.min.js')}}"></script>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">


    <script src="{{asset('js/search.js')}}"></script>

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


        /*




        .input-field .col .s2{
            color: #c7254e !important;
        }


        a.btn{
            width: 10em;
            padding-top: .3em;
        }

        #search-special{
            background-color: rgb(0,32,96)!important;
            height: 3.24em !important;

        }
        */



        input[type="search"]:focus{
            outline-color: darkred !important;
            border-bottom: 2px solid #9e9e9e !important;
            border-color: rgb(0,32,96)  !important;
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
            background-color: rgb(0,32,96) !important;
        }

        option{
            color: black !important;
        }

        btn{
            color: rgb(191,13,64) !important;
        }




    </style>


</head>

<body>

@include('modules.nav.x-nav', ['link'=>'', 'address'=>''])

<div style="background-color: black!important; height: 2em !important;">

</div>
<div class="row">


    <div class="col s1 m1 l1">


    </div>

    <div class="col s10 m10 l10">
        <div class="row" id="search-section">

            {{--<h4 style="text-align: center; font-size: 1.6em !important;"> Search Results</h4>--}}
            <br>

            <div class="row">
                <div class="col s3 m3 l3">
                    <h4 style="font-size: 1.7em; margin-left: 0.5em; margin-top:1.1em !important;"> Search Results </h4>
                </div>
                <div class="col s5 m5 l5 offset-l1">
                    <form action="{{url('search')}}" method="GET" id="search-form">
                            <button style="float:right; text-transform: none" id="search-special"
                                    class="btn waves-effect waves-light black"
                                    type="submit">Search</button>
                        <div class="input-field" style="overflow:hidden">
                            <input id="search" name="product" type="search" value="{{old('product')}}" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                        </div>
                        <input type="hidden" name="category" value="0" id="category">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </form>

                </div>
                <div class="col s3 l3 m3">
                    <div class="input-field col s12">
                        <select name="filterBy" value="{{old('filterBy')}}" id="filterBy">
                            <option value="">  &nbsp Filter search results by...</option>
                            <option value="2"> Price: Highest to Lowest</option>
                            <option value="3"> Price: Lowest to Highest </option>
                            <option value="4"> Relevance</option>
                        </select>
                    </div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </div>
            </div>
            <div class="divider"></div>
        </div>

        <div class="row">

            <div class="col l3 m3 s3">
                <ul class="collapsible" data-collapsible="expanded">
                    <li>
                        <div class="collapsible-header active">Category</div>
                        <div class="collapsible-body">
                            <ul>
                                {{--<li>--}}
                                    {{--<input type="checkbox" class="filled-in" id="all" checked="" />--}}
                                    {{--<label for="all">All Categories</label>--}}
                                {{--</li>--}}
                                <li>
                                    <input type="checkbox" class="filled-in" id="auto" value="1"/>
                                    <label for="auto">Automobile & Parts</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filled-in" id="beauty" value="2"/>
                                    <label for="beauty">Beauty Products</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filled-in" id="books" value="3"/>
                                    <label for="books">Books & Stationary</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filled-in" id="clothing" value="4"/>
                                    <label for="clothing">Clothing</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filled-in" id="education" value="5"/>
                                    <label for="education">Education</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filled-in" id="electronics" value="6"/>
                                    <label for="electronics">Electronics</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filled-in" id="entertainment" value="7"/>
                                    <label for="entertainment">Entertainment</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filled-in" id="food" value="8"/>
                                    <label for="food">Food</label>
                                </li>
                            </ul>

                        </div>

                    </li>
                </ul>
                <ul class="collapsible" data-collapsible="expanded">
                    <li>
                        <div class="collapsible-header active">Price</div>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <input type="checkbox" class="filled-in"  />
                                    <label for="all">GHS 0 - 30</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filled-in"  />
                                    <label for="all">GHS 31 - 60</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filled-in" />
                                    <label for="all">GHS 61 - 100</label>
                                </li>
                            </ul>
                        </div>

                    </li>

                </ul>

            </div>

            <div class="col s9 m9 l9">
                <div class="row" id="pdt">

                    @if(count($products)>0)
                        @foreach($products as $product)
                            <div class="col l4 m4 s4">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="materialboxed" src="<?php echo asset(str_replace("public","storage",$product->product_images)."/product_1.jpg")?>">
                                    </div>
                                    <div class="card-content">
                                        <h4><a href="#">{{$product->product_name}}</a></h4>
                                        <span> {{$product->business_name}}</span>
                                    </div>
                                    <div class="card-action row">
                                        <span class="col s7 location"><i class="fa fa-map-marker"></i>{{$product->business_area}}</span>
                                        <span class="col s5 price" style="float:right !important;"><b>¢{{$product->product_price}}</b></span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col s12 m12 l12">
                            <h5 style="text-align: center; font-size: large;"><i>Sorry, we couldn't find the product you are looking for!</i></h5>
                        </div>
                    @endif
                </div>
            </div>

        </div>

    </div>
    <div class="col s1 m1 l1"></div>

</div>

<script>

    var categories = [];

    /*https://stackoverflow.com/questions/19491336/get-url-parameter-jquery-or-how-to-get-query-string-values-in-js*/
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    };

    console.log("Categories: " + getUrlParameter("category"));
    if(getUrlParameter("category").length == 1){
        $(":checkbox[value="+getUrlParameter("category")+"]").prop("checked","true");
    }else if(getUrlParameter("category").length > 1){
        var selectedCategories = getUrlParameter("category").split(',');
        for(var i=0; i<selectedCategories.length; i++){
            $(":checkbox[value="+selectedCategories[i]+"]").prop("checked","true");
        }
        //console.log("No of categories = " + selectedCategories.length);
    }

    /*$.each($('input[type=checkbox]'),function(){
        if($(this).val()== getUrlParameter("category")){
            //console.log("Search.js Category: " + $(this).val());
            $(this).prop('checked',true);

        }
    });*/

    var search_val = "";
    //$("#search").click(function(event) {

    $('input[type=checkbox]').change(function(){
       //alert('Value: ' + $(this).val());
        var category = $(this).val();

        if($(this).is(':checked')){
            categories.push(category);
            console.log("Pushed");
            //alert('Checked');

        }else{
            var index = categories.indexOf(category);
            if (index > -1) {
                categories.splice(index, 1);
            }
            console.log("Popped");
            //alert('Unchecked');
        }

        $.each($('input[type=checkbox]:checked'),function(){
            if(category !== $(this).val()){
                categories.push($(this).val());
            }
        });
        $("#search").val(getUrlParameter("product"));
        $("#category").val(categories);
        document.getElementById('search-form').submit();
    });

    /*
        event.preventDefault();
        //var categories = $('#food').is(':checked');
        var categories = [];
        $.each($('input[type=checkbox]:checked'),function(){
            categories.push($(this).val());
        });


        $.ajax({
            type: 'GET',
            url: 'product',
            data: {
                '_token': $('input[name=_token]').val(),
                'product': $('#search').val(),
                'category': categories
            },
            processData:false,
            success: function(data) {
                var result = '';
                var content = '<div class="col s12 m12 l12">' +
                    '<h5 style="text-align: center; font-size: large;">Sorry, we couldn\'t find the product you are looking for!</h5>' +
                    '</div>';
                if(data.length==0){
                    document.getElementById("pdt").innerHTML = content;
                }else{
                    document.getElementById("pdt").innerHTML = result;
                    for(var i=0; i<data.length; i++){
                        result += '<div class="col l4 m4 s4">\n' +
                            '                                <div class="card">\n' +
                            '                                    <div class="card-image waves-effect waves-block waves-light">\n' +
                            '                                        <img class="materialboxed" src="/product_1.jpg">\n' +
                            '                                    </div>\n' +
                            '                                    <div class="card-content">\n' +
                            '                                        <h4><a href="#">'+ data[i].product_name+'</a></h4>\n' +
                            '                                        <span> '+ data[i].business_name+'</span>\n' +
                            '                                    </div>\n' +
                            '                                    <div class="card-action row">\n' +
                            '                                        <span class="col s7 location"><i class="fa fa-map-marker"></i>'+ data[i].business_area+'</span>\n' +
                            '                                        <span class="col s5 price" style="float:right !important;"><b>¢'+ data[i].product_price+'</b></span>\n' +
                            '                                    </div>\n' +
                            '                                </div>\n' +
                            '                            </div>';
                        //console.log("Index " + i + ": " + data[i].product_name);
                    }
                }
                content = '';

               //data = null;

            }
        });*/
        //console.log('Form Submitted');
    //})
</script>

<script>

    $(document).ready(function() {
        $('select').material_select();
    });

    $(document).ready(function(){
        $('.materialboxed').materialbox();
    });


</script>


</body>
</html>