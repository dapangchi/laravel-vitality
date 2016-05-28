<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layouts.partials.meta')
    
    <!-- Vendor CSS -->
    {!! Html::style('vendor/bower_components/animate.css/animate.min.css') !!} 
    {!! Html::style('vendor/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') !!} 
    {!! Html::style('vendor/bower_components/alertify-js/alertify.css') !!} 
    
    <!-- CSS -->
    {!! Html::style('assets/frontend/css/app.min.1.css') !!} 
    {!! Html::style('assets/frontend/css/app.min.2.css') !!}
    
    <!--Page CSS--> 
    @yield('styles')
</head>

<body class="login-content">
    @yield('content')    
    
    <!-- Javascript Libraries -->
    {!! Html::script('vendor/bower_components/jquery/dist/jquery.min.js') !!} 
    {!! Html::script('vendor/bower_components/bootstrap/dist/js/bootstrap.min.js') !!} 
    {!! Html::script('vendor/bower_components/moment/min/moment.min.js') !!}
    {!! Html::script('vendor/bower_components/Waves/dist/waves.min.js') !!} 
    {!! Html::script('vendor/bower_components/alertify-js/alertify.js') !!}
    {!! Html::script('vendor/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') !!}
    
    <!-- Placeholder for IE9 -->
    <!--[if IE 9 ]>
        {!! Html::script('vendor/bower_components/jquery-placeholder/jquery.placeholder.min.js') !!} 
    <![endif]-->
    
    {!! Html::script('assets/frontend/js/functions.js') !!} 
    
    <!--Page Scripts-->
    @yield('scripts')    
    
    @include('frontend.layouts.partials.notifications')
</body>
</html>