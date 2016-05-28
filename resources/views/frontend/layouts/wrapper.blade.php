<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layouts.partials.meta')
    
    @yield('styles')    
</head>

<body id="page-top">
    @yield('content')    
    
    @include('frontend.layouts.partials.analytics')
    
    @yield('scripts')    
</body>
</html>