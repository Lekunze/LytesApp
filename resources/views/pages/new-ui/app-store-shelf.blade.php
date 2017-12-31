<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('new-ui/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('new-ui/img/favicon.png')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Shelf - Lytes.App</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{asset('new-ui/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('new-ui/css/material-kit.css')}}" rel="stylesheet"/>

</head>

<body class="profile-page">
	<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="app.blade.php" style="line-height:15px!important;">Lytes.App<br>
                    <span style="font-size:0.5em; font-weight:200; margin-bottom:-8em !important;">Shop anywhere</span>
                </a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
					<li>
                            <a href="/{{$business->business_slug}}">
                                    <i class="material-icons">store</i> Store
                            </a>
    				</li>
    				<li>
                            <a href="/{{$business->business_slug}}/new">
                                    <i class="material-icons">shopping_basket</i> New Product
                            </a>
                    </li>
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings &nbsp<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="/change">Change Password</a></li>
                              <li><a href="#">Edit Profile</a></li>
                            </ul>
                    </li>
		            <li>
                            <a href="/logout">
                                    <i class="material-icons">exit_to_app</i> Logout
                            </a>
                    </li>
		            <!-- <li>
		                <a href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-facebook-square"></i>
						</a>
		            </li>
					<li>
		                <a href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-instagram"></i>
						</a>
		            </li> -->
        		</ul>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('../new-ui/img/storeee.jpeg');">
            <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h1 class="title text-center" style="color:white; margin-top:100px;">Manage Store Layout</h1>
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
	                            <h3 class="title">Add Shelves to Organize Products</h3>
                                <h6 style="text-transform:none">You currently have a maximum of 5 shelves with 6 products each.</h6>
	                        </div>
	                    </div>
	                </div>
	                <div class="description text-center">
                        <p>
                        </p>
	                </div>

					<div class="row">
                        <div class="col-md-5 col-md-offset-4" style="margin-top:-30px; margin-bottom:20px;">
                                <div class="col-sm-12">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Name of Shelf" id="shelf" name="shelf">
                                            <span class="input-group-addon">
                                                <a class="btn btn-primary" id="addShelf">Add Shelf</a>
                                            </span>
                                        </div>
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    </form>
                                </div>
                        </div>
						<div class="col-md-8 col-md-offset-2">
                                <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Shelf Name</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody id="shelf-list">
                                        @if(!empty($shelves))
                                            @foreach($shelves as $shelf)
                                                <tr id="task{{$shelf->id}}">
                                                    <td class="text-center">{{$shelf->id}}</td>
                                                    <td> {{$shelf->shelf_name}}</td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Shelf" class="btn btn-success btn-simple btn-xs edit" value="{{$shelf->id}}" data-token="{{csrf_token()}}">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button value="{{$shelf->id}}" data-token="{{ csrf_token() }}" type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs delete">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                            <!--<tr>
                                                <td class="text-center">1</td>
                                                <td>Desktop</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Shelf" class="btn btn-success btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Laptop</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Shelf" class="btn btn-success btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>Motherboard</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Shelf" class="btn btn-success btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>-->
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

    
    <footer class="footer">
        <div class="container">
                <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="/">
                                    Lytes.App
                                </a>
                            </li>
                            <li>
                                <a href="">
                                   About Us
                                </a>
                            </li>
                            <li>
                                <a href="/search">
                                   Search
                                </a>
                            </li>
                            <li>
                                <a href="/register">
                                    Join Us
                                </a>
                            </li>
                        </ul>
                    </nav>
            <div class="copyright pull-right">
                &copy; 2018 Lytes.App | Theme <i>by </i> <a href="http://www.creative-tim.com" target="_blank"> &nbspCreative Tim</a>    
            </div>
        </div>
    </footer>


</body>
    <!--   Core JS Files   -->
    <script src="{{asset('new-ui/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('new-ui/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('new-ui/js/material.min.js')}}"></script>

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
        $(".delete").click(function(event) {
            event.preventDefault();

            var id = $(this).val();
            var token = $(this).data("token");

            $.ajax({
                type: 'delete',
                url: 'deleteShelf',
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
