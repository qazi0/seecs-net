<!DOCTYPE html>
<html lang="en">
<head>
	<title>SEECS Net - Where ideas become realities</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
	<link href="/now-ui-kit/assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	@yield('content')
	
<!--===============================================================================================-->
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/bootstrap/js/popper.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/daterangepicker/moment.min.js"></script>
	<script src="/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/js/main.js"></script>
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
	   </script>

</body>
</html>