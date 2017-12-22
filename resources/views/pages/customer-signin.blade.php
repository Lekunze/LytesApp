
@extends('pages.login')

@section('content')

    <div class="row">
        <div class="col l5 s5 offset-s4 offset-l4">
            <form class="col s8"  action="{{url('login')}}" method="POST">
                <div class="card white darken-1">
                    <div class="card-content white-text">
                        <h5 style="text-align: center"> SME Login </h5>
                        <p style="text-align: center; font-size: 1em; font-weight: 400; color:firebrick">
                            @if(!empty($error))
                                {{$error}}
                            @endif
                        </p>
                        <div class="input-field col s12">
                            <input id="first_name" type="text" class="validate" name="username" required>
                            <label for="first_name">Email Address</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="pass" type="password" class="validate" name="password" required>
                            <label for="pass">Password</label>
                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row" >
                            <div class="input-field col s12" style="text-align: center">
                                <button class="btn waves-effect waves-light btn-large" type="submit" name="action">
                                    Login
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
