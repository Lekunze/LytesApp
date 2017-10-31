@extends('pages.login')
@section('nav')
    {{--@include('modules.nav', ['link'=>'New Business', 'address'=>'/register'])--}}
    @include('modules.gen-nav')
@endsection

@section('content')
    <div class="row">
        <div class="col s4 l4 m4"></div>
        <div class="col s4 l4 m4">
            <form class="col s12" style="margin-top: -10em !important;" action="{{url('admin_login')}}" method="POST">
                <div class="card white darken-1">
                    <div class="card-content white-text">
                        <div class="row">
                            <blockquote>
                                <h5>Administrator</h5>
                            </blockquote>
                            <div class="input-field col s12">
                                <input id="first_name" type="text" class="validate" name="username">
                                <label for="first_name">Admin Username</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="pass" type="password" class="validate" name="password">
                                <label for="pass">Password</label>
                            </div>
                            <div class="row">
                                <br>
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="input-field col s12" style="text-align: center">
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
@endsection