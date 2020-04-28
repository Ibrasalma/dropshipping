
<header id="home">
    <div class="overlay"></div>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">
                <h3 class="my-heading ">SKEWED</h3>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars mfa-white"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                        <a class="nav-link" href="#overview">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team"> Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="tophead" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 ">
                    <h1 class="title-main wow fadeInLeft" data-wow-duration="1.5s">Dipendra's Designs</h1>
                    <h3 class="subtitle-main wow fadeInUp" data-wow-duration="1.1s">Lorem ipsum dolor sit amet consectetur adipiscing elit proin leo leo ornare nec vulputate tempus velit nam id purus tellus hendrerit mi dapibus.</h3>
                    <div class="top-btn-block wow fadeInUp data-wow-duration="2.5s">
                    @if (Route::has('login'))
                        @auth
                        <a href="{{ url('/home') }}" class="btn-explore ">Explore</a>
                        @else
                        <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-account ">Create Account</a>
                            @endif
                        @endauth
                
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sesgoabajo"></div>
</header>