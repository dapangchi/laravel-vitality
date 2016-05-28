<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layouts.partials.head')
</head>

<body>
    
    @include('frontend.layouts.partials.header')

    <section id="main" data-layout="layout-1">
        @include('frontend.layouts.partials.sidebar')
        
        <section id="content">
            <div class="container">
                <div class="block-header">
                    <h2>{{ $pageHeaderTitle }}</h2>
                </div>
                
                @yield('content')
            </div>
        </section>
    </section>

    @include('frontend.layouts.partials.footer')

    <div>
        @yield('additional')
    </div>

    @include('frontend.layouts.partials.foot')

    @include('frontend.layouts.partials.notifications')
    @include('frontend.layouts.partials.analytics')

</body>
</html>