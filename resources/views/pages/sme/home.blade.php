@extends('layouts.smes')
@section('products')

<style>
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
        padding-left: 0 !important;
        margin: 0 !important;
        font-size: 0.85em !important;
        font-weight: 400 !important;
    }
    .col.s5.price{
        padding-left: 0em !important;
        font-size: 0.85em !important;
        color: rgb(0,32,96)!important;
    }

    .card-content{
        padding-top: 0em !important;
        padding-bottom: 0.5em !important;
    }

</style>

<div class="resize"> <img class="responsive-img" src="{{asset('img/banner.jpg')}}" width="100%"> </div>
<br>

    @if(!empty($shelves))
        @foreach($shelves as $shelf)
            <div class="shelf-name" id="top-shelf">
                <div class="row">

                    <div class="col l2 m2 s2">
                        {{--<img class="circle responsive-img" src="img/laptop.png" style="margin-top: 30% !important;">--}}
                        {{--<h5 style="color:black; text-decoration: underline !important;">{{$shelf->product_shelf}} </h5>--}}
                    </div>
                    <div class="col l8 m8 s8">
                        <nav style="background-color:rgb(191,13,64) !important;">
                            <div class="nav-wrapper">
                                <a href="#" class="brand-logo center">{{$shelf->product_shelf}}</a>
                            </div>
                        </nav> <br>
            @foreach($products as $product)
                   @if($product->product_shelf == $shelf->product_shelf)
                                <div class="col l3 m3 s3">
                                    <div class="card">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="materialboxed" src="{{$product->product_image_1}}">
                                        </div>
                                        <div class="card-content">
                                            <h4><a href="/view-product">{{$product->product_name}}</a></h4>
                                            <span>@if(!empty($business))
                                                    {{((array) $business[0])['business_name']}}
                                                @endif
                                            </span>
                                        </div>
                                        <div class="card-action row">
                                            <span class="col s7 location"><i class="fa fa-map-marker"></i>
                                                @if(!empty($business))
                                                    {{((array) $business[0])['area']}}
                                                @endif
                                            </span>
                                            <span class="col s5 price" style="float:right !important;"><b>GHS {{$product->product_price}}</b></span>
                                        </div>
                                    </div>
                                </div>
                   @endif
            @endforeach
                    </div>
                </div>
                <div class="divider"></div> <br>
            </div>
        @endforeach
    @endif


    <script>


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


@endsection