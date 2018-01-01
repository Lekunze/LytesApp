@extends('layouts.smes')
@section('products')
    <style>


        #search-special{
            height: 3em !important;
            background-color: black;
            padding-top: 0.3em;
            -moz-border-radius: 0px;
            -webkit-border-radius: 0px;
            border-radius: 0px;
            margin-left: 0.5em;

        }

        td{
            font-weight: 300;
        }

    </style>

    <div class="row">
        <div class="col s3"></div>
        <div class="col s6">

            <h4 style="text-align: center">Manage Store Layout</h4>
            <p style="font-size: small; color:crimson; font-weight: 400; text-align: center">
                You currently have a maximum of four shelves only, with five products per shelf.
            <br>Shelves help you organize your store.</p>


            <div class="row">
                <div class="col s8 m8 l8 offset-l2">
                    @if(!empty($error))
                        <p> {{$error}}</p>
                    @endif
                    <form id="search-form">
                        @if($count_shelves == 5)
                            <a style="float:right; text-transform: none" id="search-special" class="btn waves-effect waves-light disabled">Add Shelf</a>
                        @else
                            <a style="float:right; text-transform: none" id="search-special" class="btn waves-effect waves-light">Add Shelf</a>
                        @endif
                            <div class="input-field" style="overflow:hidden">
                            <input id="shelf" name="shelf" type="search" value="{{old('shelf')}}" required>
                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </form>

                    <br>

                    <div>
                        <table class="centered">
                            <thead>
                                <tr>
                                    <th>Shelf Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="shelf-list">
                                    @if(!empty($shelves))
                                        @foreach($shelves as $shelf)
                                            <tr id="task{{$shelf->id}}">
                                                <td> {{$shelf->shelf_name}}</td>
                                                <td>
                                                    <button value="{{$shelf->id}}" class="btn-small yellow" data-token="{{ csrf_token() }}"> Edit </button>
                                                    <button value="{{$shelf->id}}" class="btn-small red delete" data-token="{{ csrf_token() }}"> Delete </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <script>

                $("#search-special").click(function(event) {
                    event.preventDefault();

                    $.ajax({
                        type: 'post',
                        url: 'shelf',
                        data: {
                            '_token': $('input[name=_token]').val(),
                            'shelf': $('#shelf').val()
                        },
                        success: function(data) {
                            var shelf = '<tr id="task' + data.id + '"> <td>'+ data.shelf_name+' </td>';
                            shelf += '<td>' + '<button value= "' + data.id + '" class ="btn-small yellow" data-token="{{csrf_token()}}"> Edit </button>';
                            shelf += '<button value="' + data.id + '" class ="btn-small red delete" data-token="{{csrf_token()}}"> Delete </button> </td> </tr>';
                            $('#shelf-list').append(shelf);
                            $('#shelf').val("");
                            console.log(data.id);
                        }
                    });
                    console.log('Form Submitted');
                });

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

        </div>
        <div class="col s3"></div>
    </div>
@endsection