<nav class="navbar navbar-expand-lg {{$navbar ?? 'navbar-white'}} fixed-top" id="banner">
    <div class="container">
        <!-- Brand --><a class="navbar-brand" href="{{url('/')}}"><span><img src="{{asset('img/core-img/logo.png')}}" alt="logo"></span> Nitrix</a><!-- Toggler/collapsibe Button --><button class="navbar-toggler" type="button" data-toggle="collapse"
          data-target="#collapsibleNavbar"><span class="navbar-toggler-icon"></span></button><!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/about-us')}}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/services')}}">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/pricing')}}">Pricing</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/contact-us')}}">Contact</a></li>
                <li class="lh-55px"><a href="#" class="btn login-btn ml-50">Login!</a></li>
            </ul>
        </div>
    </div>
</nav>
