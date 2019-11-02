<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/now-ui-kit/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/now-ui-kit/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    SEECS Net - Where ideas become realities
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="/now-ui-kit/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/now-ui-kit/assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/now-ui-kit/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
      <a class="navbar-brand" href=" {{ url('/forum') }}" rel="tooltip" title="SEECS Net" data-placement="bottom" style="font-size: 15px">
            SEECS Net Forums
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="/now-ui-kit/assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
        @auth
          <li class="nav-item">
          <a class="nav-link" href="{{ url('/')}}">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p style="font-size: 15px">Home</p>
          </a>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
              <i class="now-ui-icons design_app"></i>
              <p style="font-size: 15px">{{ Auth::user()->name }}</p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                <p style="font-size: 15px">Logout</p>
              </a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          </li>

          @else
          <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}" method="POST">
            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
            <p style="font-size: 15px">Login</p>
         </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">
                  <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                  <p style="font-size: 15px">Sign Up</p>
                </a>
          </li>
         @endauth
          
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/Siraj_Qazi1" target="_blank">
              <i class="fab fa-twitter"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/sirajx1" target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/siraj_qazi1" target="_blank">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header clear-filter" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('/now-ui-kit/assets/img/header.jpg');">
      </div>
      <div class="container">
        <div class="content-center brand">
          <img class="n-logo" src="/now-ui-kit/assets/img/now-logo.png" alt="">
          <h1 class="h1-seo">SEECS Net</h1>
          <h3>Where ideas meet realities.</h3>
        </div>
      </div>
    </div>
    <div class="main">
      <div class="section section-basic" id="basic-elements">
        <div class="container">
          <h3 class="title">The Forum for SEECS Engineers</h3>
          <h4>Top Trending</h4>
          <p class="category">Channels</p>
          <div class="row">
            <div class="col-md-10">
              <a class="btn btn-primary" href="http://127.0.0.1:8000/channel/general">General</a>
              <a class="btn btn-primary btn-round" href="http://127.0.0.1:8000/channel/programming">Programming</a>
              <a class="btn btn-primary btn-round" href="http://127.0.0.1:8000/channel/web-engineering">Web Engineering</a>
              <a class="btn btn-primary btn-round" href="http://127.0.0.1:8000/channel/cyber-security">
              <i class="now-ui-icons ui-2_favourite-28"></i> Cyber Security</a>
            </div>
          </div>
          <p class="category">Pick your channel</p>
          <div class="row">
            <div class="col-md-10">
              <a class="btn btn-primary btn-sm" href="http://127.0.0.1:8000/channel/steganography">Steganography</a>
              <a class="btn btn-primary" href="http://127.0.0.1:8000/channel/tukl-nust">TUKL-NUST</a>
              <a class="btn btn-primary btn-lg" href="http://127.0.0.1:8000/channel/web-engineering">Web ENGINEERING</a>
            </div>
          </div>
          <p class="category">Pick your thread</p>
          <div class="row">
            <div class="col-md-10">
              <a class="btn" href="http://127.0.0.1:8000/discussion/c-static-if">C++ Static if</a>
              <button class="btn btn-primary">Dual boot Kali with Windows</button>
              <a class="btn btn-info" href="http://127.0.0.1:8000/discussion/the-types-and-techniques-of-steganography">The Types And Techniques Of Steganography</a>
              <button class="btn btn-success">Decryption</button>
              <a class="btn btn-warning" href="http://127.0.0.1:8000/discussion/a-new-method-of-image-steganography-using-7th-bit-of-a-pixel-as-indicator">A New Method of Image Steganography</a>
            </div>
          </div>
      
          <div class="space-70"></div>
         
          <div class="space-70"></div>
          
        </div>
      </div>

    
 
    
      
      <div class="section section-download" id="#download-section" data-background-color="black">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="text-center col-md-12 col-lg-8">
              <h3 class="title">Want to be a part of SEECS Net?</h3>
              <h5 class="description">Sign up right now!</h5>
            </div>
            <div class="text-center col-md-12 col-lg-8">
            <a href="{{ route('login')}}" class="btn btn-primary btn-lg btn-round" role="button">
                Login
              </a>
            <a href=" {{ route('register') }}" target="_blank" class="btn btn-lg btn-outline-primary btn-round" role="button">
                Sign Up
              </a>
            </div>
          </div>
 
          <div class="row justify-content-md-center sharing-area text-center">
            <div class="text-center col-md-12 col-lg-8">
              <h3>Thank you for supporting us!</h3>
            </div>
            <div class="text-center col-md-12 col-lg-8">
              <a target="_blank" href="https://www.twitter.com/SirajQazi1" class="btn btn-neutral btn-icon btn-twitter btn-round btn-lg" rel="tooltip" title="Follow us">
                <i class="fab fa-twitter"></i>
              </a>
              <a target="_blank" href="https://www.facebook.com/sirajx1" class="btn btn-neutral btn-icon btn-facebook btn-round btn-lg" rel="tooltip" title="Like us">
                <i class="fab fa-facebook-square"></i>
              </a>
              <a target="_blank" href="https://www.linkedin.com/siraj_qazi1/" class="btn btn-neutral btn-icon btn-linkedin btn-lg btn-round" rel="tooltip" title="Follow us">
                <i class="fab fa-linkedin"></i>
              </a>
              <a target="_blank" href="https://github.com/Siraj-Qazi" class="btn btn-neutral btn-icon btn-github btn-round btn-lg" rel="tooltip" title="Star on Github">
                <i class="fab fa-github"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer" data-background-color="black">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href="#">
                SEECS-NET
              </a>
            </li>
            <li>
              <a href="#">
                About Us
              </a>
            </li>
            <li>
              <a href="#">
                Blog
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>
            Coded by
          <a href="#">Siraj Qazi</a>.
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="/now-ui-kit/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="/now-ui-kit/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="/now-ui-kit/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="/now-ui-kit/assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="/now-ui-kit/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="/now-ui-kit/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="/now-ui-kit/assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>