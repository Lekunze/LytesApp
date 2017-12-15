@extends('layouts.smes')
@section('products')
    <style>
        input[type="search"]:focus{
            outline-color: darkred !important;
            border-bottom: 2px solid #9e9e9e !important;
            border-top: 2px solid #9e9e9e !important;
            border-left: 2px solid #9e9e9e !important;
            border-right: 2px solid #9e9e9e !important;
            border-color: black !important;
        }
        input:not([type]), input[type=text],input[type=search], select {
            border-bottom: 2px solid !important;
            border-top: 2px solid !important;;
            border-left: 2px solid !important;;
            border-right: 2px solid !important;;
            border-color: black !important;;
        }

        #search-special{
            height: 3.3em !important;
            background-color: black;
            padding-top: 0.5em;
            -moz-border-radius: 0px;
            -webkit-border-radius: 0px;
            border-radius: 0px;

        }

        td{
            font-weight: 300;
        }

    </style>

    <div class="row">
        <div class="col s4"></div>
        <div class="col s4">
            <br> <br>
            <h4 style="text-align: center">Manage Store Layout</h4>
            <p style="font-size: large; color:darkblue; font-weight: 400">You currently have a maximum of four shelves only, with five products per shelf</p>


            <div class="row">
                <div class="col s8 m8 l8 offset-l2">
                    @if(!empty($error))
                        <p> {{$error}}</p>
                    @endif
                    <form action="{{url('shelf')}}" method="POST" id="search-form">
                        <a style="float:right; text-transform: none" id="search-special" class="btn waves-effect waves-light">Add Shelf</a>
                        <div class="input-field" style="overflow:hidden">
                            <input id="search" name="search" type="search" value="{{old('search')}}" required>
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
                            <tbody>
                                    @if(!empty($shelves))
                                        @foreach($shelves as $shelf)
                                            <tr>
                                                <td> {{$shelf->fullname}}</td>
                                                <td> <button data-id="{{$shelf->id}}" class="btn red" data-id="{{ $shelf->id }}" data-token="{{ csrf_token() }}" id="del"> Delete </button></td>
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
                        url: '/shelf',
                        data: {
                            '_token': $('input[name=_token]').val(),
                            'search': $('#search').val()
                        },
                        success: function(data) {
                            //Bad practice: check later
                            setInterval(function() {
                                window.location.reload();
                            }, 100);
                            console.log(data);
                        }
                    });
                })
                $("#del").click(function(event) {
                    event.preventDefault();

                    var id = $(this).attr("data-id");
                    var token = $(this).data("token");

                    $.ajax({
                        type: 'post',
                        url: '/deleteshelf',
                        data: {
                            '_token': token,
                            'id': id
                        },
                        success: function(data) {
                            //Bad practice: check later
                            setInterval(function() {
                                window.location.reload();
                            }, 100);
                            console.log(data);
                        }
                    });
                })

            </script>

        </div>
        <div class="col s4"></div>
    </div>
@endsection