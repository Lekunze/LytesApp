
<style>
    body {
        font-family: 'Roboto' !important;
    }

    .card-title{
        font-family: 'Lato';
    }

    #pdt-name{
        color: #01579b !important;
    }

    .card-title h5{
        font-weight: bold !important;
    }

    .select-wrapper span.caret{
        /*color: red !important;*/
        padding-right: 1em !important;
    }

    .select-dropdown li.optgroup.selected > span{
        /*border-top: 1px solid #eee;*/
        margin-left: 1em !important;
    }

    .select-dropdown li{
        color: tomato !important;
    }

    option{
        color: black !important;
    }



</style>
@extends('layouts.app')

@section('buttons')
    <div class="main-btns">
        <div class="row" >
            <div class="col s6" id="create-btn">
                <a class="waves-effect waves-light btn" href="{{url('register')}}">New Shop</a>
            </div>
            <div class="col s6" id="login-btn">
                <a class="waves-effect waves-light btn" href="/login">Sign In</a>
            </div>
        </div>

    </div>

@endsection
