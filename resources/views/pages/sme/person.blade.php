@extends('layouts.smes')
@section('products')
<div class="row">
    <div class="col s4"></div>
    <div class="col s4">
        <br> <br>
        <h4 style="text-align: center">Manage Password</h4>
        <br> <br>

        <form action="{{url('changePassword')}}" method="post">
            <p style="text-align: center; font-size: 1em; font-weight: 400; color:firebrick">
                @if(!empty($message))
                    {{$message}}
                @endif
            </p>
            <div class="input-field col s12">
                <input id="old-password" type="password" class="validate" name="old-password" required>
                <label for="old-password">Enter Current Password</label>
            </div>
            <div class="input-field col s12">
                <input id="password" type="password" class="validate" name="password" required >
                <label for="password">Enter New Password</label>
            </div>
            <div class="input-field col s12">
                <input id="confirm" type="password" class="validate" onchange="comparePasswords()" required>
                <label for="confirm">Confirm Password</label>
                <div id="alert-msg" style="color:firebrick; font-weight: 400; margin-left: 0.3em"> </div>
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
                <div class="input-field col s12" style="text-align: center">
                    <br>
                    <button class="btn waves-effect waves-light btn-large black" type="submit" name="action" id="change" ><b>Change Password</b>
                    </button>
                </div>
            </div>
        </form>

    </div>
    <div class="col s4"></div>
</div>

<script>

    function comparePasswords(){
        var password = $('#password').val();
        var confirm = $('#confirm').val();

        if(password!==confirm){
            $('#alert-msg').html('Passwords do not match');
            $('#change').prop('disabled',true);
        }else{
            $('#alert-msg').hide();
            $('#change').prop('disabled',false);
        }
    }

    $(document).ready(function(){
       $('#confirm').keyup(comparePasswords);
    });

</script>
@endsection