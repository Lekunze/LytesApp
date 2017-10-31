<!--

        input[type=file]{
            padding:10px;
            background:#2d2d2d;
        }

        img{
            max-width:200px;
        }

        .btn{
            background-color: black !important;
            text-align: center !important;
        }

        .btn span{
            text-transform: none !important;

        }

        .col.s4{
            text-align: center !important;
        }

        p{
            margin-left: 30px !important;
            font-size: 1.1em;
        }
-->
@extends('layouts.smes')
@section('products')
    <style>
        blockquote{
            border-color:darkred !important;
        }

        body{
            background-color: whitesmoke !important;
            font-family: 'Roboto';
        }
    </style>
    <script src="js/uploadPreview.min.js"></script>

    <br>



    <div class="row">

        <div class="col s2 l2 m2"></div>
        <div class="col s8 l8 m8 offset-s1 offset-l1 offset-m1">
            <h4 style="text-align: center"> New Product </h4> <br>
            <div class="row">
                <form class="col s12" >
                    <div class="row">
                        <blockquote>
                            <h5>Product Details</h5>
                        </blockquote>
                        <div class="input-field col s12">
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">Product Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="id_number" type="text" class="validate">
                            <label for="id_number">Product Brand</label>
                        </div>
                        <div class="input-field col s6">
                            <select>
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
                            <label>Category</label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <div class="chips chips-autocomplete" id="color"></div>
                            <label for="color">Price (GHS) </label>
                        </div>
                        <div class="input-field col s6">
                            <input id="phone_number" type="text" class="validate">
                            <label for="phone_number">Quantity</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <div class="chips chips-autocomplete" id="color"></div>
                            <label for="color">Color</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="phone_number" type="text" class="validate">
                            <label for="phone_number">Shelf Name</label>
                        </div>
                    </div>

                    <div class="row">
                        <blockquote>
                            <h5>Display</h5>
                        </blockquote>
                        <p>Upload three images of the product</p>
                        <div class="input-field col s12">
                            <div class="row" >
                                <div class="col s4" >
                                    <div id="image-preview">
                                        <label for="image-upload" id="image-label">Image 1</label>
                                        <input type="file" name="image" id="image-upload" />
                                    </div>
                                </div>
                                <div class="col s4">
                                    <div id="image-preview-2">
                                        <label for="image-upload-2" id="image-label-2">Image 2</label>
                                        <input type="file" name="image" id="image-upload-2" />
                                    </div>
                                </div>
                                <div class="col s4">
                                    <div id="image-preview-3">
                                        <label for="image-upload-3" id="image-label-3">Image 3</label>
                                        <input type="file" name="image" id="image-upload-3" />
                                    </div>
                                </div>
                            </div>

                            <br>

                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12" style="text-align: center">
                            <button class="btn waves-effect waves-light btn-large black" type="submit" name="action" style="background-color: darkred !important;"><b>Add Product</b>
                                <i class="material-icons right">add</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col s2 l2 m2"></div>
        <!--<input id="files" type="file" multiple="multiple" />
        <output id="result" /> -->

    </div>

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

    <script>
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 200, // Creates a dropdown of 15 years to control year,
            today: 'Today',
            clear: 'Clear',
            max:true,
            close: 'Ok',
            closeOnSelect: false // Close upon selecting a date,
        });
    </script>

@endsection

<!--
</body>

</html>
-->