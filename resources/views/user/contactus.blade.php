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
<style>
body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .maincontainer {
            max-width: 700px;
            margin: 50px auto;
            padding: 50px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .section-heading {
            color: #333;
        }

        .contact-info {
            margin-bottom: 16px;
            color: #555;
        }

        .map-container {
            width: 100%;
            height: 300px;
            margin-bottom: 16px;
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
            <a class="nav-link text-muted" href="{{url('about')}}">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted" href="{{url('doctorsPage')}}">Doctors</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted" href="{{url('ourNews')}}">News</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-secondary" href="{{url('contactus')}}">Contact</a>
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

<div class="maincontainer">
    <h2 class="section-heading"><strong>Contact Us</strong></h2>
    <p class="contact-info">If you have any questions or concerns, feel free to reach out to us:</p>

    <p class="contact-info"><strong>Email:</strong> onlinehealthconnect@gmail.com</p>
    <p class="contact-info"><strong>Phone:</strong> +91 74521 12540 </p>
    <p class="contact-info"><strong>Address:</strong> 123 Main Street, Bengaluru</p>

    <div class="map-container">
        <!-- Replace with your own Google Maps embed code -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d248849.5665922269!2d77.46612507506701!3d12.954280237612375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1698927312986!5m2!1sen!2sin"width="600"
        height="300"
        style="border:0"
        loading="lazy"
        width = "600"
        allowfullscreen></iframe>
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