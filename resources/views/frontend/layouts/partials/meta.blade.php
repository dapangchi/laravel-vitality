<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}" id="csrf-token"/>

<title>@if($pageTitle != ''){{ $pageTitle }} | @endif {{ $settings['site.title'] }}</title>

@section('meta_keywords')
<meta name="keywords" content="{!! $settings['site.keywords'] !!}"/>
@show

@section('meta_author')
<meta name="author" content="{{ $settings['site.author'] }}"/>
@show

@section('meta_description')
<meta name="description" content="{!! $settings['site.description'] !!}"/>
@show

<!--Favicon-->
<!--<link rel="shortcut icon" href="{{ asset('frontend/img/favicon.ico') }} "/>-->