@extends('frontend.layouts.default')

@section('content')

<div class="card" id="profile-main">
    @include('frontend.account.profile.left')
    
    <div class="pm-body clearfix">
        @include('frontend.account.profile.menu')
        
        @include('frontend.account.profile.summary')
        @include('frontend.account.profile.basic')
        @include('frontend.account.profile.contact')
        @include('frontend.account.profile.password')
        
        <br/><br/><br/>
    </div>
</div>

@stop

@section('additional')
@stop

@section('styles')
@stop

@section('plugin_scripts')
@stop

@section('scripts')
@stop
