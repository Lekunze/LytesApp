@extends('layouts.smes')
@section('products')
<div class="row">
    <div class="col s4"></div>
    <div class="col s4 offset-s1">
        <br> <br>
        <h4 style="text-align: center">Manage Password</h4>
        <br> <br>

        <form>
            <div class="input-field col s12">
                <input id="first_name" type="password" class="validate">
                <label for="first_name">Enter Current Password</label>
            </div>
            <div class="input-field col s12">
                <input id="first_name" type="password" class="validate">
                <label for="first_name">Enter New Password</label>
            </div>
            <div class="input-field col s12">
                <input id="first_name" type="password" class="validate">
                <label for="first_name">Confirm Password</label>
            </div>

            <div class="row">
                <div class="input-field col s12" style="text-align: center">
                    <br>
                    <button class="btn waves-effect waves-light btn-large black" type="submit" name="action" style="background-color: darkred !important;"><b>Change Password</b>
                    </button>
                </div>
            </div>
        </form>

    </div>
    <div class="col s4"></div>
</div>
@endsection