<!DOCTYPE html>
<html lang="en">

<head>
    <title>MyHotel - Hotel Booking and Room Booking</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="{{ asset('assets/images/fav.ico') }}" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- ALL CSS FILES -->
    <link href="{{ asset('assets/css/materialize.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
 <script src="js/html5shiv.js"></script>
 <script src="js/respond.min.js"></script>
 <![endif]-->
</head>

<body data-ng-app="">
    @include('layouts.navbar')

    <!--TOP SECTION-->
    @yield('container')
    <!--TOP SECTION-->

    </section>
    <!--END HEADER SECTION-->
    <section>
        <!-- LOGIN SECTION -->
        <div id="modal1" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello... <span>User</span></h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png"
                            alt="" />
                    </a>
                    <h4>Login</h4>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <form method="POST" action="{{ route('login') }}" class="s12">
                        @csrf
                        <div>
                            <div class="input-field s12">
                                <input type="email" id="email" name="email" :value="old('email')" required
                                    autofocus class="validate">
                                <label>Email</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" id="password" name="password" :value="old('password')" required
                                    autofocus class="validate">
                                <label>Password</label>
                            </div>
                        </div>
                        <div>
                            <div class="s12 log-ch-bx">
                                <p>
                                    <input type="checkbox" name="remember" id="remember_me" type="checkbox" />
                                    <label for="remember_me">Remember me</label>
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" class="waves-effect waves-light log-in-btn">
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="{{ route('password.request') }}">Forgot password</a>
                                | <a href="#" data-dismiss="modal" data-toggle="modal"
                                    data-target="#modal2">Create a new account</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- REGISTER SECTION -->
        <div id="modal2" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello... <span>User</span></h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png"
                            alt="" />
                    </a>
                    <h4>Create an Account</h4>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name1" class="validate">
                                <label>User name</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="email" class="validate">
                                <label>Email id</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate">
                                <label>Password</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate">
                                <label>Confirm password</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Register" class="waves-effect waves-light log-in-btn">
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal"
                                    data-target="#modal1">Are you a already member ? Login</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- FORGOT SECTION -->
        <div id="modal3" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello... <span>User</span></h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png"
                            alt="" />
                    </a>
                    <h4>Forgot password</h4>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name3" class="validate">
                                <label>User name or email id</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Submit" class="waves-effect waves-light log-in-btn">
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal"
                                    data-target="#modal1">Are you a already member ? Login</a> | <a href="#"
                                    data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new
                                    account</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--FOOTER FIXED SECTION-->
    <div class="hom-footer-section">
        <div class="container">
            <div class="row">
                <div class="foot-com foot-1">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="foot-com foot-2">
                    <h5>Phone: (+62) 823 - 7710 - 2513</h5>
                </div>
                <div class="foot-com foot-3">
                    <!--<a class="waves-effect waves-light" href="#">online room booking</a>--><a
                        class="waves-effect waves-light" href="booking.html">room reservation</a>
                </div>
                <div class="foot-com foot-4">
                    <a href="#"><img src="{{ asset('assets/images/card.png') }}" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--ALL SCRIPT FILES-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/angular.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/materialize.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.mixitup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
