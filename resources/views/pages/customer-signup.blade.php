@extends('pages.login')

@section('content')
<div class="row">
    <div class="col s4 l4 m4"></div>
    <div class="col s4 l4 m4">
        <div class="row">

                    <form class="col s10 offset-s1" action="{{url('customer')}}" method="POST" enctype="multipart/form-data">
                        <div class="card white darken-1">
                            <div class="card-content white-text">
                                <div class="row">
                                    <blockquote>
                                        <h5>New Customer</h5>
                                    </blockquote>
                                    @if($error)
                                        <small class="text-danger">{{ $error }}</small>
                                    @endif
                                    <!--<div class="input-field col s12">
                                        <input id="first_name" type="text" class="validate" name="fullname">
                                        <label for="first_name">Full name</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="first_name" type="text" class="validate" name="customer_id">
                                        <label for="first_name">Username or Email</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="pass" type="password" class="validate" name="password">
                                        <label for="pass">Password</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="pass" type="password" class="validate" name="password">
                                        <label for="pass">Confirm Password</label>
                                    </div>-->
                                    <input type="file" name="test"/>
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="row">
                                        <div class="input-field col s12" style="text-align: center">
                                            <button class="btn waves-effect waves-light btn-large" style="background-color: black !important;" type="submit" name="action">
                                                Create Account
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
    <div class="col s4 l4 m4"></div>
</div>
@endsection