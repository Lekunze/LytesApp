<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('new-ui/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/shopping-cart.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Product List - {{$business->business_name}}</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{asset('new-ui/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('new-ui/css/material-kit.css')}}" rel="stylesheet"/>
    <link href="{{asset('new-ui/css/extras.css')}}" rel="stylesheet"/>
    <link href="{{asset('new-ui/css/shops.css')}}" rel="stylesheet"/>



    <style>
        .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
            vertical-align: inherit !important;

        }

        td.td-actions.text-right{
            /*vertical-align: baseline !important;*/
        }
    </style>

</head>

<body class="profile-page">
@include('modules.headers.shop-headers')

<div class="wrapper">
    <div class="header header-filter" style="background-image: url(<?php echo asset($business->business_images."/cover_image.jpg")?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1 class="title text-center" style="color:white; margin-top:100px;">Manage Products</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="profile">
                        <div class="name">
                            <h3 class="title">Modify Product Information</h3>
                            <h6 style="text-transform:none">You currently have a maximum of 30 products - 6 per shelf</h6>
                        </div>
                    </div>
                </div>
                <div class="description text-center">
                    <p>
                    </p>
                </div>

                <div class="row">
                    <div class="col-md-5 col-md-offset-4" style="margin-top:-30px; margin-bottom:20px;">
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody id="shelf-list">
                            @if(!empty($products))
                            @foreach($products as $product)
                                <tr id="task{{$product->id}}">
                                    <td class="text-center">{{$product->id}}</td>
                                    <td id="name{{$product->id}}"> {{$product->product_name}}</td>
                                    <td id="price{{$product->id}}"> {{$product->product_price}}</td>
                                    <td class="td-actions text-right">
                                        <button data-toggle="modal" data-target="#myModal" type="button" rel="tooltip" title="Edit Shelf" class="btn btn-success btn-simple btn-xs edit" value="{{$product->id}}" data-token="{{csrf_token()}}">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button value="{{$product->id}}" data-token="{{ csrf_token() }}" type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs delete">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            @endif
                            </tbody>
                        </table>

                        <!-- End Profile Tabs -->
                        <br>
                    </div>


                </div>

            </div>
        </div>
    </div>


</div>


@include('modules.footers.main-footer')

<!--   Core JS Files   -->
<script src="{{asset('new-ui/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('new-ui/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('new-ui/js/material.min.js')}}"></script>

<!-- Modal Core -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Edit Product Information</h4>
            </div>
            <form id="edit_product_form" method="POST">
                <div class="modal-body">
                    <div class="col-md-5 col-md-offset-1">
                        <div class="form-group label-floating has-validation">
                            <label class="control-label">Product Name*</label>
                            <input type="text" class="form-control" id="edit_product_name" name="edit_product_name" value="NA" required>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                        <div class="form-group label-floating has-validation">
                            <label class="control-label">Price*</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="edit_product_price" id="edit_product_price" value="0" required>
                                <span class="input-group-addon">GHS</span>
                            </div>
                        </div>

                    </div>
                    <input type="hidden" name="edit_product_id" value="" id="edit_product_id">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info btn-simple">Modify</button>
                </div>
            </form>

        </div>
    </div>
</div>


</body>


<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('new-ui/js/nouislider.min.js')}}"type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
{{--<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>--}}

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="{{asset('new-ui/js/material-kit.js')}}" type="text/javascript"></script>

<script>
    $('[data-toggle="tooltip"]').tooltip();
</script>

<script>

    $(".edit").click(function (event) {
        event.preventDefault();
        // $("#edit_shelf_name").val($(this).val());
        //$(this).val()
        $("#edit_product_id").val($(this).val());
        $("#edit_product_name").val($("#name" + $(this).val()).html()); /* + $(this).val()).text());*/
        $("#edit_product_price").val($("#price" + $(this).val()).html()); /* + $(this).val()).text());*/
        var url_form = 'products/edit';
        var actions = {1: url_form};
        $("#edit_product_form").attr('action',actions[1]);
    });

    $("#addShelf").click(function(event) {
        event.preventDefault();

        $.ajax({
            type: 'post',
            url: 'shelf',
            data: {
                '_token': $('input[name=_token]').val(),
                'shelf': $('#shelf').val()
            },
            success: function(data) {
                var shelf = '<tr id="task' + data.id + '"> <td class="text-center">'+data.id+'</td><td>'+ data.shelf_name+' </td>';
                shelf += '<td class="td-actions text-right">' + '<button type="button" rel="tooltip" title="Edit Shelf" value= "' + data.id + '" class ="btn btn-success btn-simple btn-xs edit" data-token="{{csrf_token()}}"> <i class="fa fa-edit"></i> </button>';
                shelf += '<button type="button" rel="tooltip" title="Remove" value="' + data.id + '" class ="btn btn-danger btn-simple btn-xs delete" data-token="{{csrf_token()}}"> <i class="fa fa-times"></i> </button> </td> </tr>';
                $('#shelf-list').append(shelf);
                $('#shelf').val("");
                console.log(data.id);
            }
        });
        console.log('Form Submitted');
    })

    //Delete shelf Using AJAX

    $(".delete").click(function(event) {
        event.preventDefault();

        var id = $(this).val();
        var token = $(this).data("token");

        $.ajax({
            type: 'delete',
            url: 'deleteProduct',
            data: {
                '_token': token,
                'id': id
            },
            success: function(data) {
                $('#task' + data).remove();
                console.log(data);
            }, error: function (data) {
                console.log('Error:' + data);

            }
        });
    })

</script>



</html>
