@extends('layouts.smes')
@section('products')
    <script>
        $(document).ready(function(){
            $('.slider').slider();
            //$('.slider').height(600);
        });

        $(document).ready(function() {
            $('select').material_select();
        });



    </script>
<!--
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="/img/sme-1.jpg"/>
            </li>
            <li>
                <img src="/img/sme-2.jpg"/>
            </li>
            <li>
                <img src="/img/sme-3.jpg"/>
            </li>
        </ul>
    </div>-->
    <!--Shelf A -->
    <br>

    @if($shelves)
        @foreach($shelves as $shelf)
            <div class="shelf-name" id="top-shelf">
                <h5>{{$shelf->product_shelf}} Shelf </h5> <br>
                <div class="row">
                    <div class="col l2 m2 s2"></div>
                    <div class="col l8 m8 s8">
            @foreach($products as $product)
                   @if($product->product_shelf == $shelf->product_shelf)
                                <div class="col l3 m3 s3">
                                    <div class="card" id="card-1">
                                        <div class="card-image">
                                            <a class="btn-floating halfway-fab waves-effect waves-light red" style="top: -3em !important; right:-1.1em; display: none" id="close"><i class="material-icons">close</i></a>
                                            <img src="{{$product->product_image_1}}">
                                            <a class="btn-floating halfway-fab waves-effect waves-light red" style="right:-1.1em; display: none" id="image"><i class="material-icons">photo_camera</i></a>
                                        </div>
                                        <div class="card-content">
                                            <a> <span class="card-title">{{$product->product_name}}</span> </a>
                                            <span class="card-title"> <h5>GHS {{$product->product_price}}</h5></span>
                                        </div>
                                    </div>
                                </div>
                   @endif
            @endforeach
                    </div>
                </div>
                <div class="divider"></div> <br>
            @endforeach
    @endif

    <!--<div class="shelf-name" id="top-shelf">
        <h5>Laptop Shelf</h5>
    </div>

    <div class="shelf">
        <div class="row">
            <div class="col l2 m2 s2"></div>

            <div class="col l8 m8 s8">

                <div class="col l3 m3 s3">
                    <div class="card" id="card-1">
                        <div class="card-image">
                            <a class="btn-floating halfway-fab waves-effect waves-light red" style="top: -3em !important; right:-1.1em; display: none" id="close"><i class="material-icons">close</i></a>
                            <img src="img/laptop-1.jpeg">
                            <a class="btn-floating halfway-fab waves-effect waves-light red" style="right:-1.1em; display: none" id="image"><i class="material-icons">photo_camera</i></a>
                        </div>
                        <div class="card-content">
                            <a> <span class="card-title">Apple iMac Pro</span> </a>
                            <span class="card-title"> <h5>GHS 12,200.55</h5></span>
                            {{--<p>Delali Computers</p>--}}
                        </div>
                    </div>
                </div>
                <div class="col l3 m3 s3">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/laptop-2.jpeg">
                            {{--<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">aspect_ratio</i></a>--}}
                        </div>
                        <div class="card-content">
                            <a><span class="card-title">HP Ultrabook i7</span> </a>
                            <span class="card-title"> <h5> GHS 3,000.00</h5></span>
                            {{--<p>Delali Computers</p>--}}
                        </div>
                    </div>
                </div>
                <div class="col l3 m3 s3">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/laptop-3.jpeg">
                            {{--<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">aspect_ratio</i></a>--}}
                        </div>
                        <div class="card-content">
                            <a><span class="card-title">Macbook Pro i5</span> </a>
                            <span class="card-title"> <h5>GHS 15,000.00</span>
                            {{--<p>Delali Computers</p>--}}
                        </div>
                    </div>
                </div>
                <div class="col l3 m3 s3">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/laptop-4.jpeg">
                            {{--<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">aspect_ratio</i></a>--}}
                        </div>
                        <div class="card-content">
                            <a><span class="card-title" id="pdt-name">Blue HP Netbook</span> </a>
                            <span class="card-title"> <h5> GHS 2,100.00</h5></span>
                            {{--<p>Delali Computers</p>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col l2 m2 s2">
                <a class="btn" style="background-color: darkred" id="manage">
                    <b> manage</b>
                    <i class="large material-icons" style="display: inline !important;; vertical-align: middle !important;">mode_edit</i>
                </a>
            </div>
            <br>


    </div>-->


    <!--<div class="load-btn">
        <a class="waves-effect waves-light btn-large"><i class="material-icons right">arrow_forward</i>See more</a>
    </div> -->
    <script>
        $("#manage").on("click",function(){

            if($("#manage").text() == "Save") {
                $("#manage").html("Manage <i class=\"large material-icons\" style=\"display: inline !important; vertical-align: middle !important;\">mode_edit</i>");
                $("#manage").css({'background-color': 'darkred', 'font-weight': 'bold'});
                $("#close").hide();
                $("#image").hide();
                exit;
            }
            console.log($("#manage").text());
            $("#manage").text("Save");
           $("#manage").css({'background-color': 'green', 'font-weight': 'bold'});
           $("#close").show();
           $("#image").show();

            console.log($("#manage").text());

        });

        $("#close").hover(function(){
            //alert('Hello');
           //$("#close").attr("class","btn red");
           //$("#close").text("Close");
        });

        $("#close").on("click", function () {
            $("#card-1").hide();


        });

        $(function () {
                $(document).on('click', 'span', function () {
                    if($("#manage").text() == "Save") {
                        var input = $('<input />', {
                            'type': 'text',
                            'name': 'unique',
                            'value': $(this).html()
                        });
                        $(this).parent().append(input);
                        $(this).remove();
                        input.focus();
                    }
                });

                $(document).on('blur', 'input', function () {
                    $(this).parent().append($('<span />').html($(this).val()).addClass('card-title'));
                    $(this).remove();
                });


        });



    </script>



    <!--Shelf B

    <div class="shelf-name">
        <h5>Motherboard Shelf</h5>
    </div>

    -->
    <!--<div class="shelf-name">
        <h5>Motherboard Shelf</h5>
    </div>
    <div class="shelf">
        <div class="row">
            <div class="col l2 m2 s2"></div>

            <div class="col l8 m8 s8">

                <div class="col l3 m3 s3">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/mother-1.jpeg">
                        </div>
                        <div class="card-content">
                            <a><span class="card-title">ATX 380 Motherboard</span> </a>
                            <span class="card-title"> <h5><sup>GHS</sup> 1,200. <span class="amt-dec">55</span></h5></span>
                            {{--<p>Delali Computers</p>--}}
                        </div>




                    </div>
                </div>
                <div class="col l3 m3 s3">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/mother-2.jpg">
                        </div>
                        <div class="card-content">
                            <a><span class="card-title">Pico BTX Motherboard</span> </a>
                            <span class="card-title"> <h5><sup>GHS</sup> 600. <span class="amt-dec">00</span></h5></span>
                            {{--<p>Delali Computers</p>--}}
                        </div>
                    </div>
                </div>
                <div class="col l3 m3 s3">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/mother-3.jpeg">
                        </div>
                        <div class="card-content">
                            <a><span class="card-title">Mini ITX Motherboard</span> </a>
                            <span class="card-title"> <h5><sup>GHS</sup> 950. <span class="amt-dec">33</span></h5></span>
                            {{--<p>Delali Computers</p>--}}
                        </div>
                    </div>
                </div>
                <div class="col l3 m3 s3">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/mother-4.jpeg">
                        </div>
                        <div class="card-content">
                            <a><span class="card-title">LPX 730G Mboard</span> </a>
                            <span class="card-title"> <h5><sup>GHS</sup> 1,100. <span class="amt-dec">00</span></h5></span>
                            {{--<p>Delali Computers</p>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col l2 m2 s2"></div>
            <br>

        </div>


        <br>
    </div>-->
    <!-- <div class="load-btn">
       <a class="waves-effect waves-light btn-large"><i class="material-icons right">arrow_forward</i>See more</a>
   </div> <br> -->

@endsection