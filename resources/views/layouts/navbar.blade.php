<!--MOBILE MENU-->
<section>
    <div class="mm">
        <div class="mm-inn">
            <div class="mm-logo">
                <a href="/"><img src="{{asset('assets/images/logo.png')}}" alt="">
                </a>
            </div>
            <div class="mm-icon"><span><i class="fa fa-bars show-menu" aria-hidden="true"></i></span>
            </div>
            <div class="mm-menu">
                <div class="mm-close"><span><i class="fa fa-times hide-menu" aria-hidden="true"></i></span>
                </div>
                <ul>
                    <li><a href="/">Home</a>
                    </li>
                    <li><a href="/about-us">About Us</a>
                    </li>
                    <li><a href="/contact-us">Contact Us</a>
                    </li>
                    <li><a href="{{ Route('home.faq') }}">FAQ</a>
                    </li>
                    @guest
                        <li><a href="#!" data-toggle="modal" data-target="#modal1">Login</a>
                        </li>
                    @endguest
                    @auth
                        <li>
                            <a href="{{ Route('dashboard') }}">Dashboard</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</section>
<!--HEADER SECTION-->
<section >
    <!--TOP SECTION-->
    <div class="menu-section">
        <div class="container">
            <div class="row">
                <div class="top-bar">
                    <ul>
                        {{-- <li><a class='dropdown-button' href='#' data-activates='dropdown1'> My Account <i class="fa fa-angle-down"></i></a>
                        </li>
                        <li><a href="/hotel-details">Our Hotels</a>
                        </li> --}}
                        
                        {{-- <li><a class='dropdown-button' href='#' data-activates='dropdown2'>Language <i class="fa fa-angle-down"></i></a>
                        </li> --}}
                        
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="logo">
                    {{-- <a href="/"><img src="{{asset('assets/images/logo.png')}}" alt="" /></a> --}}
                </div>
                <div class="menu-bar">
                    <ul>
                        <li><a href="/">Home</a>
                        </li>
                        <li><a href="/about-us">About Us</a>
                        </li>
                        <li><a href="/contact-us">Contact Us</a>
                        </li>
                        <li><a href="{{ Route('home.faq') }}">FAQ</a>
                        </li>
                        @guest
                        <li><a href="#!" data-toggle="modal" data-target="#modal1">Login</a>
                        </li>
                        @endguest
                        @auth
                        <li>
                            <a href="{{ Route('dashboard') }}">Dashboard</a>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--TOP SECTION-->