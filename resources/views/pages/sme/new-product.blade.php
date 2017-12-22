
@extends('layouts.smes')
@section('products')
    <style>

        #image-preview-3, #image-preview, #image-preview-2{
            background-color: whitesmoke !important;
            color: black;
            width: 100%;
            height: 250px;
            position: relative;
            overflow: hidden;
            text-align: center !important;
        }

        #image-preview input, #image-preview-2 input, #image-preview-3 input{
            line-height: 200px;
            font-size: 200px;
            position: absolute;
            opacity: 0;
            z-index: 10;
        }

        #image-preview label, #image-preview-2 label, #image-preview-3 label{
            position: absolute;
            z-index: 5;
            opacity: 0.8;
            background-color: black;
            width: 100px;
            height: 50px;
            font-size: 15px;
            line-height: 50px;
            color: white;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            text-align: center;
            text-transform: none;
        }

        @media only screen
        and (min-device-width: 1920px)
        and (min-device-height: 1080px){

            #image-preview-3, #image-preview, #image-preview-2{
                height: 300px;
            }

        }

        label{
            font-weight: 400;
        }

        select option{
            font-weight: 400 !important;
        }






    </style>
    <script src="{{asset('js/uploadPreview.min.js')}}"></script>

    <br>



    <div class="row">

        <div class="col s2 l2 m2"></div>
        <div class="col s8 l8 m8">
            <h4 style="text-align: center"> New Product </h4> <br>
            <div class="row">
                <form class="col s12" action="{{url('product')}}" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <h5>Product Details</h5>
                        <div class="input-field col s12">
                            <input id="product-name" type="text" class="validate" name="product_name" required>
                            <label for="product-name">Product Name*</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <select name="product_shelf">
                                <option value="" disabled selected>Choose shelf</option>
                            @if(!empty($shelves))
                                    @foreach($shelves as $shelf)
                                        <option value="{{$shelf->shelf_name}}"> {{$shelf->shelf_name}}</option>
                                    @endforeach
                                @endif
                            </select>
                            <label>Shelf*</label>
                        </div>
                        <div class="input-field col s6">
                            <select name="product_category">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="1">Accommodation</option>
                                <option value="2">Automobile & Parts</option>
                                <option value="3">Beauty Products</option>
                                <option value="4">Books & Stationery</option>
                                <option value="5">Clothing</option>
                                <option value="6">Education</option>
                                <option value="7">Electronics</option>
                                <option value="8">Entertainment</option>
                                <option value="9">Food</option>
                                <option value="10">Other</option>
                            </select>
                            <label>Category*</label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="product-price" type="text" class="validate" name="product_price" required>
                            <label for="product-price">Price (GHS)* </label>
                        </div>
                        <div class="input-field col s6">
                            <input id="product-color" type="text" class="validate" name="product-color">
                            <label for="product-color">Color</label>
                        </div>
                    </div>


                    <div class="row">
                        <h5>Display</h5>
                        <p style="font-weight: 400; color: rgb(0,32,96)!important;">Upload three images of the product</p>
                        <div class="input-field col s12">
                            <div class="row" >
                                <div class="col s4" >
                                    <div id="image-preview">
                                        <label for="image-upload" id="image-label">Image 1</label>
                                        <input type="file" name="products[]" id="image-upload" />
                                    </div>
                                </div>
                                <div class="col s4">
                                    <div id="image-preview-2">
                                        <label for="image-upload-2" id="image-label-2">Image 2</label>
                                        <input type="file" name="products[]" id="image-upload-2" />
                                    </div>
                                </div>
                                <div class="col s4">
                                    <div id="image-preview-3">
                                        <label for="image-upload-3" id="image-label-3">Image 3</label>
                                        <input type="file" name="products[]" id="image-upload-3" />
                                    </div>
                                </div>
                            </div>

                            <br>

                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">


                    <div class="row">
                        <div class="input-field col s12" style="text-align: center">
                            @if($shelves=="[]")
                                <button class="btn waves-effect waves-light btn-large black disabled" type="submit" name="action" ><b>Add Product</b>
                                    <i class="material-icons right">add</i>
                                </button>
                            @else
                                <button class="btn waves-effect waves-light btn-large black " type="submit" name="action" ><b>Add Product</b>
                                    <i class="material-icons right">add</i>
                                </button>
                            @endif

                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col s2 l2 m2"></div>


    </div>
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

        $('.chips-autocomplete').material_chip({
            autocompleteOptions: {
                data: {
                    'Apple': null,
                    'Microsoft': null,
                    'Google': null
                },
                limit: Infinity,
                minLength: 1
            }
        });

        var chip = {
            tag: 'chip content',
            image: '', //optional
            id: 1, //optional
        };


    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $.uploadPreview({
                input_field: "#image-upload",
                preview_box: "#image-preview",
                label_field: "#image-label"
            });

            $.uploadPreview({
                input_field: "#image-upload-2",
                preview_box: "#image-preview-2",
                label_field: "#image-label-2"
            });

            $.uploadPreview({
                input_field: "#image-upload-3",
                preview_box: "#image-preview-3",
                label_field: "#image-label-3"
            });
        });
    </script>







@endsection

<!--
</body>

</html>
-->