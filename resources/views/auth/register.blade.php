@extends('layouts.material')

@section('content')

<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent"  color-on-scroll="400">
		<div class="container">
		  <div class="navbar-translate">
		  <a class="navbar-brand" href=" {{ url('/forum') }}" rel="tooltip" title="SEECS Net" data-placement="bottom" style="font-size: 15px">
				SEECS Net Forums
			</a>
		  </div>
           <ul class="navbar-nav">
			  
			  <li class="nav-item">
				<a class="nav-link" rel="tooltip" style="padding-left: 90%" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/Siraj_Qazi1" target="_blank">
				  <i class="fab fa-twitter"></i>
				  <p class="d-lg-none d-xl-none">Twitter</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" rel="tooltip" style="padding-left: 90%" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/sirajx1" target="_blank">
				  <i class="fab fa-facebook-square"></i>
				  <p class="d-lg-none d-xl-none">Facebook</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" rel="tooltip" style="padding-left: 90%" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/siraj_qazi1" target="_blank">
				  <i class="fab fa-instagram"></i>
				  <p class="d-lg-none d-xl-none">Instagram</p>
				</a>
			  </li>
			</ul>
		  </div>
		</div>
	  </nav>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('/now-ui-kit/assets/img/bg4.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-55 p-b-1">
				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
					@csrf
					<span class="login100-form-title p-b-49">
						Sign Up for your <br>
						SEECS Net Account
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Name is required">
						<span class="label-input100">Name</span>
						<input class="input100 @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
						@error('name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required">
						<span class="label-input100">Email</span>
						<input class="input100 @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password" required>
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
					</div>
					<br>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Confirm Password</span>
						<input id="password-confirm" class="input100 @error('password') is-invalid @enderror" type="password" name="password_confirmation" required>
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
					</div>
					<br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								{{ __('Register') }}
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up in using
						</span>
					</div>

					<div class="flex-c-m">
					<a href="{{ url('/auth/redirect/facebook') }}" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="{{ url('/auth/redirect/github') }}" class="btn btn-social-icon btn-github login100-social-item bg4">
							<span class="fa fa-github"></span>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-45 p-b-20">
							<span class="p-b-17">
									Already have an account?
							</span>

						<a href="{{ route('login') }}" class="txt2">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
@endsection