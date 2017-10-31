<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<style>
    .nav-wrapper #logo{
        font-family: 'Pacifico', cursive !important;
    }
    body {
        font-family: 'Roboto' !important;
    }
</style>
@extends('layouts.app')

@section('nav')
    <nav style="background-color: darkred">
        <div class="nav-wrapper">
            <a href="/" class="brand-logo center" id="logo">Ooh Distin</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li style="background-color: #191919"><a href="/">Logout</a></li>
            </ul>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#">Hello, Hudson</a></li>
                <li><a href="#"><i class="material-icons">shopping_cart</i> </a></li>
            </ul>
        </div>
    </nav>
@endsection