@extends('frontend.layouts.auth')
@section('content')

<!-- Login -->
<div class="lc-block toggled" id="l-login">
    {!! Form::open(array('url' => URL::route('auth.login.post'), 'id' => 'aform', 'method' => 'post')) !!}
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
            <div class="fg-line">
                {!! Form::email('email', null, array('id' => 'email', 'class' => 'form-control', 'placeholder' => 'Username', 'required')) !!}
            </div>
        </div>
        
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
            <div class="fg-line">
                {!! Form::password('password', array('id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password', 'required')) !!}
            </div>
        </div>
        
        <div class="clearfix"></div>
        
        <div class="checkbox">
            <label>
                {!! Form::checkbox('remember') !!}
                <i class="input-helper"></i>
                Keep me signed in
            </label>
        </div>
        
        <button type="submit" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></button>
    {!! Form::close() !!}
    
    <ul class="login-navigation">
        <li class="bgm-red"><a href="{{ route('auth.register') }}">Register</a></li>
        <li class="bgm-orange"><a href="#">Forgot Password?</a></li>
    </ul>
</div>

@stop

@section('scripts')

@stop