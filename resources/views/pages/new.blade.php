<!DOCTYPE html>
<html>
<head>
    <title>LytesApp - Register</title>
    <link rel="icon" href="{!! asset('img/favicon.ico') !!}"/>


    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('materialize-css/css/materialize.min.css')}}">
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{asset('materialize-css/js/materialize.min.js')}}"></script>

    <script src="{{asset('js/uploadPreview.min.js')}}"></script>

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

        .slider .indicators{
            bottom: 120%;
            z-index: 100;
            /* text-align: left; */
        }
        .slider ul.slides{
            height:30% !important;
        }
        .slider{
            height:30% !important;
        }
        .slider .slides li img{
            height:100% !important;
        }

        blockquote{
            border-color: darkred !important;
        }

        .btn{
            background-color: black !important;
        }

        p{
            font-weight: 400;
            font-size: 1.1em;
        }

        form{
            margin-top: -33em !important;
        }

        .nav-wrapper #logo{
            font-family: 'Pacifico', cursive !important;
        }

        nav{
            background-color: rgb(0,32,96) !important;
        }

        .nav-wrapper ul li{
            background-color: rgb(191,13,64) !important;
        }
        .nav-wrapper ul li a{
            color: white !important;
            font-weight: 400 !important;
        }

        small{
            color: firebrick;
        }

    </style>

    <style type="text/css">
        /*Source: http://opoloo.github.io/jquery_upload_preview/ */

        #image-preview{
            text-align: center !important;
        }

        #image-preview, #image-preview-2, #image-preview-6 {
            width: 200px;
            height: 200px;
            position: relative;
            overflow: hidden;
            background-color: #e9cece !important;
            color: #ecf0f1;
        }

        #image-preview-3, #image-preview-4, #image-preview-5{
            width: 100%;
            height: 400px;
            position: relative;
            overflow: hidden;
            background-color: #e9cece;
            color: #ecf0f1;
            text-align: center !important;
        }

        #image-preview input, #image-preview-2 input, #image-preview-4 input,
        #image-preview-5 input, #image-preview-6 input{
            line-height: 200px;
            font-size: 200px;
            position: absolute;
            opacity: 0;
            z-index: 10;
        }

        #image-preview-3 input{
            line-height: 200px;
            font-size: 200px;
            position: absolute;
            opacity: 0;
            z-index: 30;
        }


        #image-preview label, #image-preview-2 label, #image-preview-3 label,
        #image-preview-4 label, #image-preview-5 label, #image-preview-6 label{
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

        #image-preview label:hover{
            cursor: pointer !important;
        }

        /*small{*/
            /*color: firebrick !important;*/
        /*}*/

        .input-field col s6 test{
            border-bottom: 1px solid #c7254e !important;
        }

    </style>
</head>

<body>

@include('modules.nav.x-nav', ['link'=>'Sign In', 'address'=>'/login'])

<div class="slider">
    <ul class="slides">
        <li>
            <img src="{{asset('img/storeee.jpeg')}}"/>
            <div class="caption center-align" style="color:black">
                <h3 style="color:white; font-weight: 500">New Business</h3>
                <h5 class="light grey-text text-lighten-3" style="color:white!important;">Register to sell your products online</h5>
            </div>
        </li>
    </ul>
</div>



<div class="row">
    <div class="col s2 l2 m2" style="background-color: white !important;"></div>
    <div class="col s8 l8 m8">
        <div class="row">

            <form class="col s12" action="{{url('store')}}" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <br>
                    <br>
                    <h4 style="margin-left:0.3em; font-size:1.8em;"> Personal Details </h4>
                    <br>

                    <div class="input-field col s6" @if($errors->first('business_owner_last_name')){{' test'}}} @endif >
                        <input id="first_name" type="text" class="validate" name="business_owner_last_name" value="{{old('business_owner_last_name')}}" required>
                        <label for="first_name">Surname*</label>
                        <small class="text-danger">{{ $errors->first('business_owner_last_name') }}</small>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate" name="business_owner_given_names" value="{{old('business_owner_given_names')}}" required >
                        <label for="last_name"> Given names*</label>
                        <small class="text-danger">{{ $errors->first('business_owner_given_names') }}</small>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="dob" type="text" class="datepicker" name="date_of_birth" value="{{old('date_of_birth')}}">
                        <label for="dob">Date of Birth*</label>
                    </div>
                    <div class="input-field col s6">
                        <select name="nationality" value="{{old('nationality')}}">
                            @include('modules.countrylist')
                        </select>
                        <label>Nationality*</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select name="id_type" value="{{old('id_type')}}">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="1">Driver's License</option>
                            <option value="2">National ID</option>
                            <option value="3">Non-citizen ID</option>
                            <option value="4">NHIS</option>
                            <option value="5">Passport</option>
                            <option value="6">Voter's ID</option>
                        </select>
                        <label>ID Type*</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="id_number" name="id_number" type="text" class="validate" value="{{old('id_number')}}" required>
                        <label for="id_number">ID Number*</label>
                        <small class="text-danger">{{ $errors->first('id_number') }}</small>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="phone_number" type="text" class="validate" name="phone_number" value="{{old('phone_number')}}" required>
                        <label for="phone_number">Phone Number*</label>
                        <small class="text-danger">{{ $errors->first('phone_number') }}</small>
                    </div>
                    <div class="input-field col s6">
                        <input id="other_number" type="text" class="validate" name="phone_number_2" value="{{old('phone_number_2')}}">
                        <label for="other_number">Other Number</label>
                        <small class="text-danger">{{ $errors->first('phone_number_2') }}</small>
                    </div>
                </div>

                <br>

                <!---Business Details -->

                <div class="row">
                    <h4 style="margin-left:0.3em; font-size:1.8em;"> Business Details </h4>
                    <br>
                    <div class="input-field col s12">
                        <input id="first_name" type="text" name="business_name" value="{{old('business_name')}}" required>
                        <label for="first_name">Business/Shop Name*</label>
                        <small class="text-danger">{{ $errors->first('business_name') }}</small>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <select name="country" disabled>
                            @include('modules.countrylist')
                        </select>
                        <label>Country*</label>
                    </div>
                    <div class="input-field col s4">
                        <select name="region" value="{{old('region')}}">
                            <option value="" disabled selected>Choose your region</option>
                            <option value="AS"> Ashanti Region</option>
                            <option value="BA"> Brong Ahafo Region</option>
                            <option value="CR"> Central Region</option>
                            <option value="ER"> Eastern Region</option>
                            <option value="GR"> Greater Accra Region </option>
                            <option value="NR"> Northern Region</option>
                            <option value="UE"> Upper East Region</option>
                            <option value="UW"> Upper West Region</option>
                            <option value="VR"> Volta Region</option>
                            <option value="WR"> Western Region</option>
                        </select>
                        <label>Region*</label>
                    </div>
                    <div class="input-field col s4">
                        <select name="area" value="{{old('area')}}">
                            <option value="" disabled selected>Choose your location</option>
                            <option value="37M"> 37</option>
                            <option value="ABK"> Abelenkpe</option>
                            <option value="ACC"> Accra Central </option>
                            <option value="ACH"> Achimota </option>
                            <option value="ADT"> Adenta </option>
                            <option value="ALJ"> Alajo </option>
                            <option value="CIC"> Circle</option>
                            <option value="DNS"> Dansoman</option>
                            <option value="ELG"> East Legon</option>
                            <option value="HTS"> Haatso</option>
                            <option value="KWM"> Kwashieman</option>
                            <option value="LAP"> Lapaz</option>
                            <option value="MAD"> Madina</option>
                            <option value="RDG"> Ridge</option>
                            <option value="SPI"> Spintex</option>
                            <option value="TEM"> Tema</option>
                        </select>
                        <label>Area or Location*</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="address" type="text" class="validate" name="address" value="{{old('address')}}" required>
                        <label for="address">Address*</label>
                        <small class="text-danger">{{ $errors->first('address') }}</small>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate" name="business_number" value="{{old('business_number')}}" required>
                        <label for="first_name">Business Contact 1*</label>
                        <small class="text-danger">{{ $errors->first('business_number') }}</small>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate" name="business_number_2" value="{{old('business_number_2')}}">
                        <label for="last_name">Business Contact 2</label>
                        <small class="text-danger">{{ $errors->first('business_number_2') }}</small>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field inline col s6" required>
                        Do you provide delivery services?*
                        <span style="display: inline-block">
                            <input class="with-gap" name="delivery_services" type="radio" id="yes" value="yes"/>
                            <label for="yes">Yes</label>
                        </span>
                        <span style="display: inline-block">
                            <input class="with-gap"  name="delivery_services" type="radio" id="no" value="no"/>
                            <label for="no">No</label>
                        </span>
                    </div>
                    <div class="input-field col s6">
                        <select name="industry" value="{{old('industry')}}">
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
                        <label>Industry/Category*</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate" name="email" value="{{old('email')}}" required>
                        <label for="email">Email address*</label>
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                    </div>
                </div>

                <br>
                <h4 style="margin-left:0.3em; font-size:1.8em;"> Media </h4>

                <br>
                <div class="row">
                    <div class="input-field col s12">
                        <p> Upload business logo or display picture (resolution at least 720 X 569)</p>
                        <div id="image-preview-2">
                            <label for="image-upload-2" id="image-label-2">Add Photo*</label>
                            <input type="file" name="business_logo" id="image-upload-2" value="{{old('business_logo')}}" required/>
                        </div>
                        <small class="text-danger">{{ $errors->first('business_logo') }}</small>
                    </div>
                </div>



                <div class="row">
                    <p> Upload 3 cover images for business (resolution at least 1280 X 720)</p>
                    <div class="col s12">
                        <div id="image-preview-3">
                            <label for="image-upload-3" id="image-label-3">Add Image*</label>
                            <input type="file" name="cover_image_1" id="image-upload-3" required/>
                        </div>
                        <small class="text-danger">{{ $errors->first('cover_image_1') }}</small>
                    </div>
                </div>
                <div class="row">
                    <br>
                    <div class="col s6">
                        <div id="image-preview-5">
                            <label for="image-upload-5" id="image-label-5">Add Photo*</label>
                            <input type="file" name="cover_image_2" id="image-upload-5" required/>
                        </div>
                        <small class="text-danger">{{ $errors->first('cover_image_2') }}</small>
                    </div>
                    <div class="col s6">
                        <div id="image-preview-4">
                            <label for="image-upload-4" id="image-label-4">Add Photo*</label>
                            <input type="file" name="cover_image_3" id="image-upload-4" required/>
                        </div>
                        <small class="text-danger">{{ $errors->first('cover_image_3') }}</small>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row">
                    <div class="input-field col s12" style="text-align: center">
                        <button class="btn waves-effect waves-light btn-large black" type="submit" name="action"><b>Register</b></button>
                    </div>
                </div>

            </form>


        </div>
    </div>

    <div class="col s2 l2 m2"></div>

</div>

@include('modules.footer')

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
        $.uploadPreview({
            input_field: "#image-upload-4",
            preview_box: "#image-preview-4",
            label_field: "#image-label-4"
        });
        $.uploadPreview({
            input_field: "#image-upload-5",
            preview_box: "#image-preview-5",
            label_field: "#image-label-5"
        });
        $.uploadPreview({
            input_field: "#image-upload-6",
            preview_box: "#image-preview-6",
            label_field: "#image-label-6"
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


@yield('content')

</body>
</html>
