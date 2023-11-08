<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta http-equiv="X-UA-Compatible" content="ie=edge">

<meta name="copyright" content="MACode ID, https://macodeid.com/">

<title>Online Health Connect</title>

<link rel="stylesheet" href="../assets/css/maicons.css">

<link rel="stylesheet" href="../assets/css/bootstrap.css">

<link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

<link rel="stylesheet" href="../assets/vendor/animate/animate.css">

<link rel="stylesheet" href="../assets/css/theme.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .page-section {
            padding: 60px 0;
        }

        .section-heading {
            color: #333;
            margin-bottom: 50px;
        }

        .iconic-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .iconic-card:hover {
            transform: scale(1.05);
            cursor: pointer;
        }

        .iconic-card-icon {
            font-size: 36px;
            color: #3498db;
        }

        .iconic-card-title {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        .iconic-card-text {
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>

<!-- Back to top button -->
<div class="back-to-top"></div>

<header>
<div class="topbar">
    <div class="container">
    <div class="row">
        <div class="col-sm-8 text-sm">
        <div class="site-info">
            <a href="#"><span class="mai-call text-info"></span> +91 74521 12540</a>
            <span class="divider">|</span>
            <a href="#"><span class="mai-mail text-info"></span> onlinehealthconnect@gmail.com</a>
        </div>
        </div>
        <div class="col-sm-4 text-right text-sm">
        <div class="social-mini-button">
            <a href="https://www.facebook.com/"><span class="mai-logo-facebook-f text-info"></span></a>
            <a href="https://www.twitter.com/"><span class="mai-logo-twitter text-info"></span></a>
            <a href="https://www.dribble.com/"><span class="mai-logo-dribbble text-info"></span></a>
            <a href="https://www.instagram.com/"><span class="mai-logo-instagram text-info"></span></a>
        </div>
        </div>
    </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- .topbar -->

<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container">
    <a class="navbar-brand" href="{{url('/')}}"><span class="text-info">Online</span>-Health-<span class="text-info">Connect</span></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupport">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link text-muted" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-secondary" href="{{url('about')}}">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted" href="{{url('doctorsPage')}}">Doctors</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted" href="{{url('ourNews')}}">News</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted" href="{{url('contactus')}}">Contact</a>
        </li>

        @if(Route::has('login'))
        @auth
        <li class="nav-item">
            <a class="nav-link" style = "background-color: skyblue;color:white;border-radius:5px" href="{{url('myAppointment')}}">My Appointment</a>
        </li>
        <x-app-layout>
        </x-app-layout>
        @else

        <li class="nav-item">
            <a class="btn btn-info ml-lg-3" href="{{route('login')}}">Login </a>
        </li>

        <li class="nav-item">
            <a class="btn btn-info ml-lg-3" href="{{route('register')}}">Register</a>
        </li>

        @endauth
        @endif
        </ul>
    </div> <!-- .navbar-collapse -->
    </div> <!-- .container -->
</nav>
</header>

<div class="page-section pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3 wow fadeInUp">
                <h1 style = "color:blue"><strong>Welcome to Your Health Center</strong></h1>
                <h3>Best Medical Care for Your Family</h3>
                <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
                <a href="{{url('consult')}}" class="btn btn-info">Let's Consult</a>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                <div class="img-place custom-img-1">
                    <img src="../assets/img/bg-doctor.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div> <!-- .bg-light -->

<div class="page-section">
    <div class="container">
    <h2 class="section-heading text-center mb-5"><strong>Excellent Medical Services</strong></h2>
        <div class="row">
            <div class="col-lg-4 py-3">
                <div class="iconic-card iconic-card-1"style = "padding:20px">
                    <span class="iconic-card-icon">
                        <i class="fas fa-stethoscope "></i>
                    </span>
                    <div class="iconic-card-body" >
                        <h4 class="iconic-card-title">Expert Doctors</h4>
                        <p class="iconic-card-text">Our team consists of experienced and dedicated healthcare professionals to ensure your well-being.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 py-3">
                <div class="iconic-card iconic-card-2"style = "padding:20px">
                    <span class="iconic-card-icon">
                        <i class="fas fa-hospital"></i>
                    </span>
                    <div class="iconic-card-body">
                        <h4 class="iconic-card-title">State-of-the-Art Facilities</h4>
                        <p class="iconic-card-text">We provide modern and advanced facilities to deliver high-quality healthcare services.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 py-3">
                <div class="iconic-card iconic-card-3" style = "padding:20px">
                    <span class="iconic-card-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </span>
                    <div class="iconic-card-body">
                        <h4 class="iconic-card-title">Flexible Appointments</h4>
                        <p class="iconic-card-text">Schedule appointments at your convenience through our easy-to-use online booking system.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="page-footer">
<div class="container">
    <div class="row px-md-3">
    <div class="col-sm-6 col-lg-3 py-3">
        <h5>Company</h5>
        <ul class="footer-menu">
        <li><a href="#">About Us</a></li>
        <li><a href="#">Career</a></li>
        <li><a href="#">Editorial Team</a></li>
        <li><a href="#">Protection</a></li>
        </ul>
    </div>
    <div class="col-sm-6 col-lg-3 py-3">
        <h5>More</h5>
        <ul class="footer-menu">
        <li><a href="#">Terms & Condition</a></li>
        <li><a href="#">Privacy</a></li>
        <li><a href="#">Advertise</a></li>
        <li><a href="#">Join as Doctors</a></li>
        </ul>
    </div>
    <div class="col-sm-6 col-lg-3 py-3">
        <h5>Our partner</h5>
        <ul class="footer-menu">
        <li><a href="#">One-Fitness</a></li>
        <li><a href="#">One-Drugs</a></li>
        <li><a href="#">One-Live</a></li>
        </ul>
    </div>
    <div class="col-sm-6 col-lg-3 py-3">
        <h5>Contact</h5>
        <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
        <a href="#" class="footer-link">701-573-7582</a>
        <a href="#" class="footer-link">healthcare@temporary.net</a>

        <h5 class="mt-3">Social Media</h5>
        <div class="footer-sosmed mt-3">
        <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
        <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
        <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
        <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
        <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
        </div>
    </div>
    </div>

    <hr>

    <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p>
</div>
</footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>