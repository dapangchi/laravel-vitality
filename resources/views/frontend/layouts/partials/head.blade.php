@include('frontend.layouts.partials.meta')
    
<!-- Vendor CSS -->
{!! Html::style('vendor/bower_components/animate.css/animate.min.css') !!} 
{!! Html::style('vendor/bower_components/alertify-js/alertify.css') !!} 
{!! Html::style('vendor/bower_components/bootstrap-sweetalert/lib/sweet-alert.css') !!} 
{!! Html::style('vendor/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') !!} 
{!! Html::style('vendor/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') !!} 

<!-- CSS -->
{!! Html::style('assets/frontend/css/app.min.1.css') !!} 
{!! Html::style('assets/frontend/css/app.min.2.css') !!}

<!--Page CSS--> 
@yield('styles')

{!! Html::style('assets/frontend/css/custom.css') !!}