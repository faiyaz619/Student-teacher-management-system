<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Educentre - The online Learning Platform</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('/')}}plugins/bootstrap/bootstrap.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{asset('/')}}plugins/slick/slick.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{asset('/')}}plugins/themify-icons/themify-icons.css">
    <!-- animation css -->
    <link rel="stylesheet" href="{{asset('/')}}plugins/animate/animate.css">
    <!-- aos -->
    <link rel="stylesheet" href="{{asset('/')}}plugins/aos/aos.css">
    <!-- venobox popup -->
    <link rel="stylesheet" href="{{asset('/')}}plugins/venobox/venobox.css">

    <!-- Main Stylesheet -->
    <link href="{{asset('/')}}css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('/')}}images/favicon.png" type="image/x-icon">
    <link rel="icon" href="{{asset('/')}}images/favicon.png" type="image/x-icon">

</head>

<body>
<!-- preloader start -->
<div class="preloader">
    <img src="{{asset('/')}}images/preloader.gif" alt="preloader">
</div>
<!-- preloader end -->
<!-- header -->
<header class="fixed-top header">
    <!-- navbar -->
    <div class="navigation w-100">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('/')}}images/logo.png" alt="logo"></a>
                <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item @@courses">
                            <a class="nav-link" href="{{route('all.courses')}}">COURSES</a>
                        </li>
                        @if(Session::get('student_id'))
                            <li class="dropdown">
                                <a href="{{ route('student-dashboard') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    {{ Session::get('student_name') }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('student-dashboard') }}" class="dropdown-item">Dashboard</a></li>
                                    <li><a href="" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('studentLogoutForm').submit();">Logout</a></li>
                                    <form action="{{ route('student-logout') }}" method="POST" id="studentLogoutForm">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        @else
                        <li class="nav-item @@events">
                            <a class="nav-link" href="{{route('login.user')}}">LOGIN</a>
                        </li>
                        <li class="nav-item @@blog">
                            <a class="nav-link" href="{{route('register.user')}}">REGISTER</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- /header -->

@yield('body')

<!-- footer -->
<footer>
    <!-- newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
                    <h3 class="text-white">Subscribe Now</h3>
                    <form action="#">
                        <div class="input-wrapper">
                            <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Enter Your Email..."/>
                            <button type="submit" value="send" class="btn btn-primary">Join</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- footer content -->
    <div class="footer bg-footer section border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
                    <!-- logo -->
                    <a class="logo-footer" href="{{route('home')}}"><img class="img-fluid mb-4" src="{{asset('/')}}images/logo.png" alt="logo"></a>
                    <ul class="list-unstyled">
                        <li class="mb-2">23621 15 Mile Rd #C104, Clinton MI, 48035, New York, USA</li>
                        <li class="mb-2">+1 (2) 345 6789</li>
                        <li class="mb-2">+1 (2) 345 6789</li>
                        <li class="mb-2">contact@yourdomain.com</li>
                    </ul>
                </div>
                <!-- company -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-5">COMPANY</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a class="text-color" href="">About Us</a></li>
                        <li class="mb-3"><a class="text-color" href="">Our Teacher</a></li>
                        <li class="mb-3"><a class="text-color" href="">Contact</a></li>
                        <li class="mb-3"><a class="text-color" href="">Blog</a></li>
                    </ul>
                </div>
                <!-- links -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-5">LINKS</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a class="text-color" href="">Courses</a></li>
                        <li class="mb-3"><a class="text-color" href="">Events</a></li>
                        <li class="mb-3"><a class="text-color" href="">Gallary</a></li>
                        <li class="mb-3"><a class="text-color" href="">FAQs</a></li>
                    </ul>
                </div>
                <!-- support -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-5">SUPPORT</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a class="text-color" href="#">Forums</a></li>
                        <li class="mb-3"><a class="text-color" href="#">Documentation</a></li>
                        <li class="mb-3"><a class="text-color" href="#">Language</a></li>
                        <li class="mb-3"><a class="text-color" href="#">Release Status</a></li>
                    </ul>
                </div>
                <!-- support -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-5">RECOMMEND</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a class="text-color" href="#">WordPress</a></li>
                        <li class="mb-3"><a class="text-color" href="#">LearnPress</a></li>
                        <li class="mb-3"><a class="text-color" href="#">WooCommerce</a></li>
                        <li class="mb-3"><a class="text-color" href="#">bbPress</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="copyright py-4 bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text-sm-left text-center">
                    <p class="mb-0">Copyright
                        <script>
                            var CurrentYear = new Date().getFullYear()
                            document.write(CurrentYear)
                        </script>
                        © themefisher</p>
                </div>
                <div class="col-sm-5 text-sm-right text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-facebook text-primary"></i></a></li>
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-twitter-alt text-primary"></i></a></li>
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-linkedin text-primary"></i></a></li>
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-instagram text-primary"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="{{asset('/')}}plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{asset('/')}}plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="{{asset('/')}}plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="{{asset('/')}}plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="{{asset('/')}}plugins/venobox/venobox.min.js"></script>
<!-- filter -->
<script src="{{asset('/')}}plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="{{asset('/')}}plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="{{asset('/')}}js/script.js"></script>

</body>
</html>
