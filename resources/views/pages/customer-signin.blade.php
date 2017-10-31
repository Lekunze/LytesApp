
@extends('pages.login')

@section('content')

<div class="row">
    <div class="col s4 l4 m4"></div>
    <div class="col s4 l4 m4">
        <div class="row">
                <div class="col s10 offset-s1">
                    <ul class="tabs">
                        <li class="tab col s6"><a class="active" href="#test1">Customer Login</a></li>
                        <li class="tab col s6"><a href="#test2">Business Owner</a></li>
                    </ul>
                </div>

                <div id="test1" class="col s12">
                    <form class="col s12" style="margin-top: -10em !important;" action="{{url('customer_login')}}" method="POST">
                        <div class="card white darken-1">
                            <div class="card-content white-text">
                                <div class="row">
                                    <blockquote>
                                        <h5>Shopper</h5>
                                    </blockquote>
                                    <div class="input-field col s12">
                                        <input id="first_name" type="text" class="validate" name="username">
                                        <label for="first_name">Email Address</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="pass" type="password" class="validate" name="password">
                                        <label for="pass">Password</label>
                                    </div>
                                    <!--<div class="input-field col s12">
                                        <input type="checkbox" id="remember" />
                                        <label for="test6">Keep me logged in</label>
                                    </div>-->
                                    <div class="row">
                                        <br>
                                        <div class="input-field col s6" style="text-align: center">
                                            <a class="btn waves-effect waves-light btn-large black" href="/signup">
                                                Sign Up
                                            </a>
                                        </div>
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <div class="input-field col s6" style="text-align: center">
                                            <button class="btn waves-effect waves-light btn-large" type="submit" name="action">
                                                Login
                                            </button>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </form>
                </div>

                <div id="test2" class="col s12">
                    <form class="col s12" style="margin-top: -10em !important;" action="{{url('business_login')}}" method="POST">
                        <div class="card white darken-1">
                            <div class="card-content white-text">
                                <div class="row">
                                    <blockquote>
                                        <h5>Business Owner</h5>
                                    </blockquote>
                                    <div class="input-field col s12">
                                        <input id="first_name" type="text" class="validate" name="username">
                                        <label for="first_name">Email Address</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="pass" type="password" class="validate" name="password">
                                        <label for="pass">Password</label>
                                    </div>
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="row" >
                                        <div class="input-field col s6" style="text-align: center">
                                            <a class="btn waves-effect waves-light btn-large black" href="/register">
                                                Sign Up
                                            </a>
                                        </div>
                                        <div class="input-field col s6" style="text-align: center">
                                            <button class="btn waves-effect waves-light btn-large" type="submit" name="action">
                                                Login
                                            </button>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </form>

                </div>

        </div>
    </div>

    <div class="col s4 l4 m4"></div>

</div>
@endsection
