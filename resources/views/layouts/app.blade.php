<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SEECS-NET') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @toastr_css
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="/now-ui-kit/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/now-ui-kit/assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/now-ui-kit/assets/demo/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/styles/atom-one-dark.min.css">

  <!-- CSS Files -->
  
</head>
<body>
    <div id="app">

         <!-- Navbar -->
  <nav class="navbar navbar-expand bg-primary">
        <div class="container">
          <div class="navbar-translate">
          <a class="navbar-brand" href=" {{ url('/forum') }}" rel="tooltip" title="SEECS Net" data-placement="bottom" style="font-size: 15px">
                SEECS Net Forums
            </a>
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

            <div class="container">
                <div class="col-md-4" style="float: left;">
                        <br>
                        <a href="{{ route('discussion.create') }}" class="btn btn-primary btn-lg" style="font-size: 17px">Create a new discussion</a><br>
        
                        @if (Auth::check())
                          @if (Auth::user()->admin)
                            <a href="{{ route('channels.index') }}" class="btn btn-primary" style="font-size: 14px">All Channels</a><br>
                          @endif   
                        @endif

                        <div class="list-group col-md-10" role="tablist">
                              @foreach($channels as $channel)
                                <a href="{{ route('channel', ['slug' => $channel->slug])}} " class="btn btn-info btn-xs" style="font-size: 13px">{{ $channel->title}}</a>
                              @endforeach
            
                        </div>           
        
                    </div>
      
                <div class="col-md-8" style="float: left;">
                        @yield('content')
                </div>
            </div>
 
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
     <!-- Scripts -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/highlight.min.js"></script>
     <script src="{{ asset('js/app.js') }}" defer></script>
     <script>hljs.initHighlightingOnLoad();</script>

     @jquery
     @toastr_js
     @toastr_render

</body>
</html>
