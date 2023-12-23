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
                    <li><a href="#" class='dropdown-button' data-activates='drop-room'>Rooms <i class="fa fa-angle-down"></i></a>
                    </li>
                    <li><a href="/about-us">About Us</a>
                    </li>
                    <li><a href="/contact-us">Contact Us</a>
                    </li>
                    <li><a href="#!" data-toggle="modal" data-target="#modal1">Login</a>
                    </li>
                    {{-- <li><a href="/index-1">Home - Reservation</a>
                    </li>
                    <li><a href="/index-2">Home - FullSlider</a>
                    </li>
                    </li>
                    <li><a href="/room-details">Room Details</a>
                    </li>
                    <li><a href="/room-details-block">Room Details Block</a>
                    </li>
                    <li><a href="/hotel-details">Hotel Details</a>
                    </li>
                    <li><a href="/hotel-detail">Hotel Details - 1</a>
                    </li>
                    <li><a href="/about-us">About Us</a>
                    </li>
                    <li><a href="/aminities">Aminities</a>
                    </li>
                    <li><a href="/aminities1">Aminities - 1</a>
                    </li>
                    <li><a href="/menu">Food Menu</a>
                    </li>
                    <li><a href="/menu1">Food Menu - 1</a>
                    </li>
                    <li><a href="/blog">Blog</a>
                    </li>
                    <li><a href="/blog-inner">Blog Inner</a>
                    </li>
                    <li><a href="/dashboard">User Dashboard</a>
                    </li>
                    <li><a href="/db-activity">DB Activity</a>
                    </li>
                    <li><a href="/db-booking">DB-Booking</a>
                    </li>
                    <li><a href="/db-event">DB-Event</a>
                    </li>
                    <li><a href="/db-new-booking">DB New Booking</a>
                    </li>
                    <li><a href="/booking">Booking</a>
                    </li>
                    <li><a href="/collapsible">Collapsible</a>
                    </li>
                    <li><a href="/events">Events</a>
                    </li>
                    <li><a href="/form-fields">Form Fields</a>
                    </li>
                    <li><a href="/preloading">Preloading</a>
                    </li>
                    <li><a href="/gallery">Gallery</a>
                    </li>
                    <li><a href="/gallery1">Gallery - 1</a>
                    </li>
                    <li><a href="/gallery2">Gallery - 2</a>
                    </li>
                    <li><a href="/detail">Room Detail</a>
                    </li>
                    <li><a href="/all-rooms">All Rooms</a>
                    </li>
                    <li><a href="/all-rooms1">All Rooms - 1</a>
                    </li>
                    <li><a href="/services">Services</a>
                    </li>
                    <li><a href="/services1">Services - 1</a>
                    </li>
                    <li><a href="/typho-grid">Grid Layout</a>
                    </li>
                    <li><a href="/typo-alert">Alert Messages</a>
                    </li>
                    <li><a href="/typo-all-head">All Headers</a>
                    </li>
                    <li><a href="/typo-badges-labels">Labels</a>
                    </li>
                    <li><a href="/typo-buttons">Buttons</a>
                    </li>
                    <li><a href="/typo-pagination">Pagination</a>
                    </li>
                    <li><a href="/typo-progressbar">Progressbar</a>
                    </li>
                    <li><a href="/typo-slider">Image Sliders</a>
                    </li>
                    <li><a href="/typo-table">Table</a>
                    </li>
                    <li><a href="/typo-buttons">Buttons</a>
                    </li>
                    <li><a href="/typo-pagination">Pagination</a>
                    </li>
                    <li><a href="/typo-progressbar">Progressbar</a>
                    </li>
                    <li><a href="/sitemap">Sitemap</a>
                    </li> --}}
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
                <div class="all-drop-down">
                    <!-- Dropdown Structure -->
                    <ul id='dropdown1' class='dropdown-content drop-con-man'>
                        <li>
                            <a href="/dashboard"><img src="{{asset('assets/images/icon/15.png')}}" alt=""> My Account</a>
                        </li>
                        <li>
                            <a href="/db-profile"><img src="{{asset('assets/images/icon/15.png')}}" alt=""> My Profile</a>
                        </li>
                        <li>
                            <a href="/db-booking"><img src="{{asset('assets/images/icon/15.png')}}" alt=""> My Bookings</a>
                        </li>
                        <li>
                            <a href="/db-event"><img src="{{asset('assets/images/icon/15.png')}}" alt=""> My Events</a>
                        </li>
                        <li>
                            <a href="/db-activity"><img src="{{asset('assets/images/icon/15.png')}}" alt=""> My Activity</a>
                        </li>
                        <li>
                            <a href="#!" data-toggle="modal" data-target="#modal2"><img src="{{asset('assets/images/icon/15.png')}}" alt=""> Register</a>
                        </li>
                        <li>
                            <a href="#!" data-toggle="modal" data-target="#modal1"><img src="{{asset('assets/images/icon/15.png')}}" alt=""> Log In</a>
                        </li>
                        <li>
                            <a href="#!" data-toggle="modal" data-target="#modal3"><img src="{{asset('assets/images/icon/15.png')}}" alt=""> Forgot Password</a>
                        </li>
                    </ul>
                    <!-- Dropdown Structure -->
                    <ul id='drop-home' class='dropdown-content drop-con-man'>
                        <li><a href="/">Home - Default</a>
                        </li>
                        <li><a href="/index-1">Home - Reservation</a>
                        </li>
                        <li><a href="/index-2">Home - FullSlider</a>
                        </li>
                        
                    </ul>
                    <!-- Dropdown Structure -->
                    <ul id='dropdown2' class='dropdown-content drop-con-man'>
                        <li><a href="#!">English</a>
                        </li>
                        <li><a href="#!">Spanish</a>
                        </li>
                        <li><a href="#!">Hindi</a>
                        </li>
                        <li><a href="#!">Russian</a>
                        </li>
                        <li><a href="#!">Portuguese</a>
                        </li>
                    </ul>
                    <!-- ROOM Dropdown Structure -->
                    <ul id='drop-room' class='dropdown-content drop-con-man'>
                        <li><a href="/all-rooms">All Suite Rooms</a>
                        </li>
                        <li><a href="/room-details">Room Details</a>
                        </li>
                        <li><a href="/room-details-block">Room Details Block</a>
                        </li>
                        <li><a href="/room-details-1">Room Parallax</a>
                        </li>
                    </ul>
                    <!-- PAGES Dropdown Structure -->
                    <div id='drop-page' class='dropdown-content drop-con-man drop-full'>
                        <div class="mm-1">
                            <h4>Pages</h4>
                            <ul>
                                <li><a href="/room-details">Room Details - 1</a>
                                </li>
                                <li><a href="/room-details-1">Room Details - 2</a>
                                </li>
                                <li><a href="/room-details-block">Room Details - 3</a>
                                </li>
                                <li><a href="/all-rooms">All Rooms</a>
                                </li>
                                <li><a href="/all-rooms1">All Rooms - 1</a>
                                </li>
                                <li><a href="/aminities">Aminities</a>
                                </li>
                                <li><a href="/aminities1">Aminities - 1</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mm-1">
                            <h4>Pages</h4>
                            <ul>
                                <li><a href="/dashboard">User Dashboard</a>
                                </li>
                                <li><a href="/db-activity">DB Activity</a>
                                </li>
                                <li><a href="/db-booking">DB-Booking</a>
                                </li>
                                <li><a href="/db-event">DB-Event</a>
                                </li>
                                <li><a href="/db-new-booking">DB New Booking</a>
                                </li>
                                <li><a href="/booking">Booking</a>
                                </li>
                                <li><a href="/contact-us">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mm-1">
                            <h4>Pages</h4>
                            <ul>
                                <li><a href="/blog">Blog</a>
                                </li>
                                <li><a href="/blog-inner">Blog Inner</a>
                                </li>
                                <li><a href="/events">Events</a>
                                </li>
                                <li><a href="/gallery">Gallery</a>
                                </li>
                                <li><a href="/gallery1">Gallery - 1</a>
                                </li>
                                <li><a href="/gallery2">Gallery - 2</a>
                                </li>
                                <li><a href="/collapsible">Collapsible</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mm-1">
                            <h4>Pages</h4>
                            <ul>
                                <li><a href="/about-us">About Us</a>
                                </li>
                                <li><a href="/services">Services</a>
                                </li>
                                <li><a href="/services1">Services - 1</a>
                                </li>
                                <li><a href="/typho-grid">Grid Layout</a>
                                </li>
                                <li><a href="/typo-alert">Alert Messages</a>
                                </li>
                                <li><a href="/form-fields">Form Fields</a>
                                </li>
                                <li><a href="/menu">Food Menu</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mm-1">
                            <h4>Pages</h4>
                            <ul>
                                <li><a href="/typo-all-head">All Headers</a>
                                </li>
                                <li><a href="/typo-badges-labels">Labels</a>
                                </li>
                                <li><a href="/typo-buttons">Buttons</a>
                                </li>
                                <li><a href="/typo-pagination">Pagination</a>
                                </li>
                                <li><a href="/typo-progressbar">Progressbar</a>
                                </li>
                                <li><a href="/preloading">Preloading</a>
                                </li>
                                <li><a href="/menu1">Food Menu - 1</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mm-1">
                            <h4>Pages</h4>
                            <ul>
                                <li><a href="/typo-slider">Image Sliders</a>
                                </li>
                                <li><a href="/typo-table">Table</a>
                                </li>
                                <li><a href="/typo-buttons">Buttons</a>
                                </li>
                                <li><a href="/typo-pagination">Pagination</a>
                                </li>
                                <li><a href="/typo-progressbar">Progressbar</a>
                                </li>
                                <li><a href="/sitemap">Sitemap</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="logo">
                    {{-- <a href="/"><img src="{{asset('assets/images/logo.png')}}" alt="" /></a> --}}
                </div>
                <div class="menu-bar">
                    <ul>
                        {{-- <li><a href="#" class='dropdown-button' data-activates='drop-home'>Home <i class="fa fa-angle-down"></i></a>
                        </li> --}}
                        <li><a href="/">Home</a>
                        </li>
                        {{-- <li><a href="#" class='dropdown-button' data-activates='drop-room'>Rooms <i class="fa fa-angle-down"></i></a>
                        </li> --}}
                        <li><a href="/about-us">About Us</a>
                        </li>
                        <li><a href="/contact-us">Contact Us</a>
                        </li>
                        <li><a href="#!" data-toggle="modal" data-target="#modal1">Login</a>
                        </li>
                        {{-- <li><a href="/services">Services</a>
                        </li>
                        <li><a href="/menu">Menu</a>
                        </li>
                        <li><a href="/events">Events</a>
                        </li>
                        <li><a href="/aminities1">Amenities</a>
                        </li>
                        <li><a href="#" class='dropdown-button' data-activates='drop-page'>Pages <i class="fa fa-angle-down"></i></a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--TOP SECTION-->