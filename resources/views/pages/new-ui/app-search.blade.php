<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('new-ui/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/shopping-cart.png')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Search - Lytes.App</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{asset('new-ui/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('new-ui/css/material-kit.css')}}" rel="stylesheet"/>

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('new-ui/css/demo.css')}}" rel="stylesheet" />
    <link href="{{asset('new-ui/css/extras.css')}}" rel="stylesheet" />

    <style>
        body{
            background-color: white !important;
        }

        .navbar .navbar-nav > li > a {
            color: inherit;
            font-weight: 400;
            font-size: 12px !important;
            text-transform: uppercase;
            border-radius: 3px;
        }

        .navbar-color-on-scroll{
            background-color: rgb(0,32,96);
        }

        .card .image img{
            width: 100%;
        }

        img{
            vertical-align: middle;
        }

        .card .content {
            padding: 10px 5px 10px 10px;
        }

        .card-refine .header {
            padding: 10px 15px 0px 15px;
        }

        .card .title{
            font-weight: 300;
            margin-top:10px;
            margin-bottom:-5px;
            font-size: 22px;
            
        }

        .card-product .title{
            margin:0;
        }

        .description a{
            color: rgb(0,32,96)!important;
        }
        h4.title:hover{
            color:blueviolet;
        }

        .card-product .price, .location{
            font-size: 16px;
            font-weight: 100 !important;
        }

        .card-product .footer{
            margin-top: -7px !important;
        }

        .footer a:hover{
            color: rgb(0,32,96)!important;
        }

        .price{
            color:black !important;
            font-weight: 400 !important;
        }
        .location{
            color: black !important;
        }

        .card .description{
            font-size: 14px;            
            color: #999999;
            
        }

        .pagination > .active > a, .pagination > .active > a:focus, .pagination > .active > a:hover,
        .pagination > .active > span, .pagination > .active > span:focus,
        .pagination > .active > span:hover{
            border-color: rgb(191,13,64) !important;
            background-color: rgb(191,13,64) !important;
        }

        .card .header{
            box-shadow: none;
        }

        i.fa.fa-refresh{
            top:0px !important;
            margin-top:-50px !important;
        }

        .card-product .footer {
            line-height: 40px;
            margin: 0;
        }
        .card .footer {
            padding: 0;
            background-color: transparent;
        }

        .card-refine .btn-simple, .card-product .btn-simple {
            padding-left: 0;
            padding-right: 0;
        }
        .card-refine .btn-xs, .card-product .btn-xs {
            margin: 8px 0;
        }
        .btn-xs.btn-simple {
            padding: 3px 5px;
        }
        .card-refine .panel-title a {
            display: block;
        }

        .card-refine .panel-group .panel-title {
            font-size: 12px;
            font-weight: bold;
        }

        div.panel-heading{
            background-color: white !important;
        }

        .panel-group .panel {
            border: 0;
            border-bottom: 1px solid #DDDDDD;
            box-shadow: none;
        }

        .panel-title a:hover, .panel-title a:focus{
            color: rgb(191,13,64) !important;
        }

        .copyright{
            margin-top: -10px !important;
        }

        .pull-left{
            margin-top: 10px !important;
        }

        #link{
            color:rgb(0,32,96);
        }

        #fb{
            color: rgb(0,32,96)!important;

        }

        .checkbox input[type=checkbox]:checked + .checkbox-material .check {
            background: rgb(191,13,64)!important;
        }

        .form-control{
            background-image: linear-gradient(#4caf50, #4caf50), linear-gradient(#D2D2D2, #D2D2D2) !important;
        }

        @media only screen
        and (min-device-width: 375px)
        and (max-device-width: 667px)
        and (-webkit-min-device-pixel-ratio: 2)
        and (orientation: portrait) {

            .brand{
                width:200px !important;
            }

            footer ul li a {
                padding: 10px !important;
            }

            nav.pull-left{
               margin-left:3em;
            }

            .copyright{
                text-align: center !important;
            }

            #search-box{
                margin-bottom: -2em !important;
                margin-top: -2em !important;
            }

            input#search-box::-webkit-input-placeholder{
                /*content: "Enter product..." !important;*/
                overflow: hidden !important;
            }

        
        }

        @media screen and (min-width: 360px) {
            .brand {
                width: 200px !important;
            }
        }

        div.copyright{
            padding: 0!important;
            padding-top: 35px !important;
        }


        .logo-container .logo {
            border: 0 !important;
            border-radius: 0 !important;
        }



    </style>
    
    

</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/">
                <div class="logo-container">
                    <div class="logo">
                        <img src="{{asset('img/shopping-cart.png')}}" alt="Lytes.App" rel="tooltip" title="<b>Lytes.App</b> Is Ghana's premier shopping catalog. Search for anything you need." data-placement="bottom" data-html="true">
                        {{--<img src="{{asset('new-ui/img/logo.png')}}" alt="Creative Tim Logo" rel="tooltip" title="<b>Material Kit</b> was Designed & Coded with care by the staff from <b>Creative Tim</b>" data-placement="bottom" data-html="true">--}}
                    </div>
                    <div class="brand" style="font-size:1.5em;margin-top:0.4em; width:300px">
                        Lytes.App <br><span style="font-size:0.5em; font-weight:200">Join the rest of the world. Let's get online.</span>
                    </div>


                </div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navigation-index">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/" style="font-size:1.2em;">
                        <i class="material-icons">home</i> Home
                    </a>
                </li>
                <li>
                    <a href="/login" style="font-size:1.2em;">
                        <i class="material-icons">input</i> Sign In
                    </a>
                </li>
                <li>
                    <a href="/search" style="font-size:1.2em;">
                        <i class="material-icons">search</i> Search
                    </a>
                </li>
                <!-- <li>
                    <a rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-white btn-simple btn-just-icon">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li> -->
                <li>
                    <a rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/LytesApp/" target="_blank" class="btn btn-white btn-simple btn-just-icon">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <!-- <li>
                    <a rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-white btn-simple btn-just-icon">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li> -->

            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="wrapper">
        <div class="header header-filter" style="background-image: url('new-ui/img/suits.jpeg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h1 class="title text-center" style="color:white; margin-top:120px;">Find Products</h1>
                    </div>
                </div>
            </div>
        </div>

        <!--Search Panel-->
        <div class="container">
                <!-- <h2 class="section-title">Find what you need</h2> -->
                <!-- <div class=section-title> -->
                       
                <!-- </div> --><br>
                <div class="row">
                     <div class="col-md-3">
                         <div class="card card-refine card-plain">
                             
                             <div class="header">
                                 <h4 class="title">Reset
                                     <button class="btn btn-default btn-xs btn pull-right btn-simple" rel="tooltip" title="" data-original-title="Reset Filter">
                                         <i class="fa fa-refresh"></i>
                                     </button>
                                  </h4>
                             </div>
                             <div class="content">
                                   <div class="panel-group" id="accordion">
 
                                   <div class="panel panel-default">
                                     <div class="panel-heading">
                                       <h6 class="panel-title">
                                         <a data-toggle="collapse" href="#refineClothing" class="collapsed">
                                           Categories
                                           <i class="fa fa-caret-up pull-right"></i>
                                         </a>
                                       </h6>
                                     </div>
                                     <div id="refineClothing" class="panel-collapse collapse in">
                                       <div class="panel-body checkbox">
                                            <label>
                                                    <input type="checkbox" name="optionsCheckboxes" value="1">Accommodation
                                            </label><br>
                                           <label>
                                                    <input type="checkbox" name="optionsCheckboxes" value="2">Automobile & Parts
                                            </label><br>
                                            <label>
                                                    <input type="checkbox" name="optionsCheckboxes" value="3">Beauty Products
                                            </label><br>
                                            <label>
                                                    <input type="checkbox" name="optionsCheckboxes" value="4">Books & Stationary
                                            </label><br>
                                            <label>
                                                    <input type="checkbox" name="optionsCheckboxes" value="5">Clothing
                                            </label><br>
                                            <label>
                                                    <input type="checkbox" name="optionsCheckboxes" value="6">Education
                                            </label><br>
                                            <label>
                                                    <input type="checkbox" name="optionsCheckboxes" value="7">Electronics
                                            </label><br>
                                            <label>
                                                    <input type="checkbox" name="optionsCheckboxes" value="8">Entertainment
                                            </label><br>
                                            <label>
                                                    <input type="checkbox" name="optionsCheckboxes" value="9">Food
                                            </label>
                                       </div>
                                     </div>
                                   </div>

                                   <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h6 class="panel-title">
                                            <a data-toggle="collapse" href="#refinePrice" class="collapsed">
                                              Price Range
                                              <i class="fa fa-caret-up pull-right"></i>
                                            </a>
                                          </h6>
                                        </div>
                                        <div id="refinePrice" class="panel-collapse collapse">
                                          <div class="panel-body">
                                             <span class="price price-left">
                                                   <div class="col-sm-4">
                                                           <div class="form-group label-floating">
                                                               <label class="control-label">Min</label>
                                                               <input type="text" value="" class="form-control" name="min" id="min"/>
                                                           </div>
                                                   </div>
                                               </span>
                                             <span class="price price-right">
                                                   <div class="col-sm-4">
                                                           <div class="form-group label-floating">
                                                               <label class="control-label">Max</label>                                                                
                                                               <input type="text" value=""class="form-control" name="max" id="max"/>
                                                           </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                           <button class="btn btn-success btn-just-icon" id="price">
                                                           <i class="fa fa-search"></i>
                                                           </button>
                                                   </div>
                                               </span>
                                             <div class="clearfix"></div>
                                          </div>
                                        </div>
                                      </div>
                                    <!-- end panel -->
                                 </div>
                             </div>
                         </div> <!-- end card -->
                     </div>
 
                     <div class="col-md-9">
                            
                         <div class="row">

                            <div class="col-md-12">
                                <div class="row">
                                        <div class="col-sm-10 col-sm-offset-1" id="search-box" style="margin-bottom:1em;">
                                            <form action="{{url('search')}}" method="GET" id="search-form">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-search"></i>
                                                    </span>

                                                    <input type="text" class="form-control" name="product" id="search" placeholder="Enter product to search for...">
                                                    <input type="hidden" name="category" value="0" id="category">
                                                    <input type="hidden" name="filter" value="0" id="filter">
                                                    <input type="hidden" name="min" value="0" id="minP">
                                                    <input type="hidden" name="max" value="100000000" id="maxP">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <span class="input-group-addon">
                                                        <button class="btn btn-success" type="submit">Search</button>
                                                    </span>
                                                
                                                </div>
                                            </form>
                                        </div>
                                        
                                </div>
                            </div> 
                            <br>
                            <br>
                             @if(!empty($products))
                                 @if(count($products)>0)
                                 @foreach($products as $product)
                                     <div class="col-md-4">
                                         <div class="card card-product card-plain">
                                             <div class="image">
                                                 <a href="#">
                                                     <img src="<?php echo asset(str_replace("public","storage",$product->product_images)."/product_1.jpg")?>" alt="...">
                                                 </a>
                                             </div>
                                             <div class="content">
                                                 <a href="#">
                                                     <h4 class="title"><a href="/{{$product->business_slug}}/{{$product->product_slug}}">{{$product->product_name}}</a></h4>
                                                 </a>
                                                 <p class="description">
                                                     <a> {{$product->business_name}} </a>
                                                 </p>
                                                 <div class="footer">
                                                     <span class="price" style="font-weight: 400 !important;"> GHS {{$product->product_price}}</span>
                                                     <span style="float:right" class="location">  <i class="fa fa-map-marker"></i> {{$product->business_area}}</span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                 @endforeach

                                 @endif
                             @else
                                 <div class="col-md-12">
                                     <h5 style="text-align: center; font-size: large;" id="search-message"><i>Sorry, we couldn't find the product you are looking for!</i></h5>
                                 </div>
                              @endif
                         @if(!empty($products))

                             @if(count($products)>0)
                                     <div class="col-md-12" style="text-align: center !important;">
                                     {{$products->appends($_GET)->links()}}
                                     </div>
                             @endif
                         @endif
                              </div>
                         </div>
                     </div>
                </div>

</div>


@include('modules.footers.main-footer')


</body>
    <!--   Core JS Files   -->
    <script src="{{asset('new-ui/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('new-ui/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('new-ui/js/material.min.js')}}"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
{{--    <script src="{{asset('new-ui/js/nouislider.min.js')}}"type="text/javascript"></script>--}}

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    {{--<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>--}}

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="{{asset('new-ui/js/material-kit.js')}}" type="text/javascript"></script>


    <script>
        var categories = [];

        $(window).load(function(){
            //alert("Hello");
            if(!getUrlParameter("product")){
                //alert("Hellor");
                $("#search-message").html("We can help you find what you want");
            }else{
                $("#search").val(getUrlParameter("product"));
            }
            if(getUrlParameter("min")>0){
                $("#min").val(getUrlParameter("min"));
            }
            if(getUrlParameter("max")>0){
                $("#max").val(getUrlParameter("max"));
            }


        });

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

        if(getUrlParameter("category")){
            if(getUrlParameter("category").length == 1){
                $(":checkbox[value="+getUrlParameter("category")+"]").prop("checked","true");
            }else if(getUrlParameter("category").length > 1){
                var selectedCategories = getUrlParameter("category").split(',');
                for(var i=0; i<selectedCategories.length; i++){
                    $(":checkbox[value="+selectedCategories[i]+"]").prop("checked","true");
                }
                //console.log("No of categories = " + selectedCategories.length);
            }
        }







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

        $("#price").click(function(){
            //alert("here");
            var min = $("#min").val();
            var max = $("#max").val();
            $.each($('input[type=checkbox]:checked'),function(){
                //if(category !== $(this).val()){
                categories.push($(this).val());
                //}
            });
            $("#search").val(getUrlParameter("product"));
            $("#category").val(categories);
            $("#minP").val(min);
            $("#maxP").val(max);
            document.getElementById('search-form').submit();

        });

        $("#filterBy").change(function(){
            //alert("Heya");
            var filter = $("#filterBy").val();
            $.each($('input[type=checkbox]:checked'),function(){
                categories.push($(this).val());
            });

            $("#search").val(getUrlParameter("product"));
            $("#category").val(categories);
            $("#filter").val(filter);
            document.getElementById('search-form').submit();
        });

    </script>

<script type="text/javascript">

    $().ready(function(){
        // the body of this function is in assets/material-kit.js
        // materialKit.initSliders();
        window_width = $(window).width();

        if (window_width >= 992){
            big_image = $('.wrapper > .header');

            $(window).on('scroll', materialKitDemo.checkScrollForParallax);
        }

    });
</script>

</html>
