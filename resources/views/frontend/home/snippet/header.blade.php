<!-- Navigation -->
<!-- Note: navbar-default and navbar-inverse are both supported with this theme. -->
<nav class="navbar navbar-inverse navbar-fixed-top navbar-expanded">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">
                <img src="{{ asset('assets/frontend/img/home/logo.png') }}" class="img-responsive" alt="">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a class="page-scroll" href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#work">Work</a>
                </li>
                
                @if(isset($currentCustomer->id))
                <li>
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                @else
                <li>
                    <a href="{{ route('auth.login') }}">Login</a>
                </li>
                <li>
                    <a href="{{ route('auth.register') }}">Register</a>
                </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<header style="background-image: url({{ asset('assets/frontend/img/home/bg-header.jpg') }});">
    <div class="intro-content">
        <img src="{{ asset('assets/frontend/img/home/profile.png') }}" class="img-responsive img-centered" alt="">
        <div class="brand-name">DMNDR</div>
        <hr class="colored">
        <div class="brand-name-subtext">*****</div>
    </div>
    <div class="scroll-down">
        <a class="btn page-scroll" href="#work"><i class="fa fa-angle-down fa-fw"></i></a>
    </div>
</header>