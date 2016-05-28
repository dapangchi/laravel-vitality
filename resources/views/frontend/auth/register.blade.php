@extends('frontend.layouts.auth')
@section('content')

<!-- Login -->
<div class="lc-block toggled" id="l-login">
    {!! Form::open(array('url' => URL::route('auth.register.post'), 'id' => 'aform', 'method' => 'post')) !!}
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-email zmdi-hc-fw"></i></span>
            <div class="fg-line">
                {!! Form::email('email', null, array('id' => 'email', 'class' => 'form-control', 'placeholder' => 'Email', 'required')) !!}
            </div>
        </div>
        
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
            <div class="fg-line">
                {!! Form::text('first-name', null, array('id' => 'first-name', 'class' => 'form-control', 'placeholder' => 'First Name', 'required')) !!}
            </div>
        </div>
        
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
            <div class="fg-line">
                {!! Form::text('last-name', null, array('id' => 'last-name', 'class' => 'form-control', 'placeholder' => 'Last Name', 'required')) !!}
            </div>
        </div>
        
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
            <div class="fg-line">
                {!! Form::select('gender', array(GENDER_MALE => 'Male', GENDER_FEMALE => 'Female'), null, array('id' => 'gender', 'class' => 'form-control', 'required')) !!}
            </div>
        </div>
        
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i></span>
            <div class="fg-line">
                {!! Form::text('birthday', null, array('id' => 'birthday', 'class' => 'form-control date-picker', 'data-toggle' => 'dropdown', 'required')) !!}
            </div>
        </div>
        
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-key zmdi-hc-fw"></i></span>
            <div class="fg-line">
                {!! Form::password('password', array('id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password', 'required')) !!}
            </div>
        </div>
        
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-key zmdi-hc-fw"></i></span>
            <div class="fg-line">
                {!! Form::password('password-confirm', array('id' => 'password-confirm', 'class' => 'form-control', 'placeholder' => 'Password Confirmation', 'required')) !!}
            </div>
        </div>
        
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-phone zmdi-hc-fw"></i></span>
            <div class="fg-line">
                {!! Form::text('phone', null, array('id' => 'phone', 'class' => 'form-control', 'placeholder' => 'Phone', 'required')) !!}
            </div>
        </div>
        
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-facebook zmdi-hc-fw"></i></span>
            <div class="fg-line">
                {!! Form::text('facebook-name', null, array('id' => 'facebook-name', 'class' => 'form-control', 'placeholder' => 'Facebook', 'required')) !!}
            </div>
        </div>
        
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-twitter zmdi-hc-fw"></i></span>
            <div class="fg-line">
                {!! Form::text('twitter-name', null, array('id' => 'twitter-name', 'class' => 'form-control', 'placeholder' => 'Twitter', 'required')) !!}
            </div>
        </div>
        
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-pin zmdi-hc-fw"></i></span>
            <div class="fg-line">
                {!! Form::text('address', null, array('id' => 'address', 'class' => 'form-control', 'placeholder' => 'Address', 'required')) !!}
            </div>
        </div>
        
        <div class="clearfix"></div>
        
        <button type="submit" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></button>
    {!! Form::close() !!}
    
    <ul class="login-navigation">
        <li class="bgm-red"><a href="{{ route('auth.login') }}">Login</a></li>
        <li class="bgm-orange"><a href="#">Forgot Password?</a></li>
    </ul>
</div>

@stop

@section('scripts')

@stop