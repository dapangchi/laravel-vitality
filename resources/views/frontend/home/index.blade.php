@extends('frontend.layouts.wrapper')

@section('content')
    @include('frontend.home.snippet.header')
    @include('frontend.home.snippet.work')
    @include('frontend.home.snippet.footer')
    @include('frontend.home.snippet.additional')
@stop

@section('styles')
    <!-- Bootstrap Core CSS -->
    {!! Html::style('vendor/bootstrap/bootstrap.min.css') !!} 
    
    <!-- Retina.js - Load first for faster HQ mobile images. -->
    {!! Html::script('vendor/retina/retina.min.js') !!} 
    
    <!-- Font Awesome -->
    {!! Html::style('assets/frontend/fonts/font-awesome/css/font-awesome.min.css') !!} 
    
    <!-- Default Fonts -->
    {!! Html::style('http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic') !!} 
    {!! Html::style('http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900') !!} 
    
    <!-- Modern Style Fonts (Include these is you are using body.modern!) -->
    {!! Html::style('http://fonts.googleapis.com/css?family=Montserrat:400,700') !!} 
    
    <!-- Vintage Style Fonts (Include these if you are using body.vintage!) -->
    {!! Html::style('http://fonts.googleapis.com/css?family=Cardo:400,400italic,700') !!} 
    {!! Html::style('http://fonts.googleapis.com/css?family=Sanchez:400italic,400') !!} 
    
    <!-- Plugin CSS -->
    {!! Html::style('vendor/owl-carousel/owl.carousel.css') !!} 
    {!! Html::style('vendor/owl-carousel/owl.theme.css') !!} 
    {!! Html::style('vendor/owl-carousel/owl.transitions.css') !!} 
    {!! Html::style('vendor/jquery.magnific-popup/magnific-popup.css') !!} 
    {!! Html::style('vendor/background/background.css') !!} 
    {!! Html::style('vendor/misc/animate.css') !!} 
    
    <!-- Vitality Theme CSS -->
    <!-- Uncomment the color scheme you want to use. -->
    {!! Html::style('assets/frontend/css/home/vitality-red.css') !!} 
@stop

@section('scripts')
    <!-- Core Scripts -->
    {!! Html::script('vendor/jquery.js') !!} 
    {!! Html::script('vendor/bootstrap/bootstrap.min.js') !!} 

    <!-- Plugin Scripts -->
    {!! Html::script('vendor/jquery.easing.min.js') !!} 
    {!! Html::script('vendor/classie.js') !!} 
    {!! Html::script('vendor/cbpAnimatedHeader.js') !!}     
    {!! Html::script('vendor/owl-carousel/owl.carousel.js') !!}     
    {!! Html::script('vendor/jquery.magnific-popup/jquery.magnific-popup.min.js') !!}     
    {!! Html::script('vendor/background/core.js') !!}     
    {!! Html::script('vendor/background/transition.js') !!}     
    {!! Html::script('vendor/background/background.js') !!}     
    {!! Html::script('vendor/jquery.mixitup.js') !!}     
    {!! Html::script('vendor/wow/wow.min.js') !!}     

    <!-- Vitality Theme Scripts -->
    {!! Html::script('assets/frontend/js/vitality.js') !!}     
@stop
