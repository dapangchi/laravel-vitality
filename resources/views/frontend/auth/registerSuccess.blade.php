@extends('frontend.layouts.auth')
@section('content')

<!-- Login -->
<div class="lc-block toggled" id="l-login">
    <div class="row">
        <div class="col-md-12 section-title">
            <h1>Congratulation!</h1>
            <h4>Your account has been created sucessfully, you are now login as <span class="logged-as">{{ $email }}</span></h4>
            
            <a class="btn btn-primary btn-sm" href="{{ route('auth.login') }}">Login</a> 
        </div>
    </div>
</div>

@stop

@section('scripts')

@stop