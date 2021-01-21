<!DOCTYPE html>
<html>
<head>
	<title>Classroom</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body {
                background-image: url("https://crm.radzen.com/assets/images/login-background.png");
                background-repeat: no-repeat;
                background-size: 1600px 800px;
            }
        
            html {
			margin: 0;
			padding: 0;
			height: 100%;
			background: #60a3bc !important;
		}
		.user_card {
			height: 400px;
			width: 350px;
			margin-top: auto;
			margin-bottom: auto;
			background: #f39c12;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;

		}
		.brand_logo_container {
			position: absolute;
			height: 170px;
			width: 170px;
			top: -75px;
			border-radius: 50%;
			background: #60a3bc;
			padding: 10px;
			text-align: center;
		}
		.brand_logo {
			height: 150px;
			width: 150px;
			border-radius: 50%;
			border: 2px solid white;
		}
		.form_container {
			margin-top: 100px;
		}
		.login_btn {
			width: 100%;
			background: #c0392b !important;
			color: white !important;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background: #c0392b !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: #c0392b !important;
		}
    </style>
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
    @extends('layouts.app')

    @section('content')
    <br><br><br><br><br><br><br><br>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://www.fujitsu.com/global/imagesgig5/Icon_classroom_tcm100-3749856_tcm100-2750236-32.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container" style="margin-top: 60px;">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
						<div class="input-group mb-3 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input id="email" type="email" name="email" class="form-control input_user" value="{{ old('email') }}" placeholder="username" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="input-group mb-2 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
                                <input id="password" type="password" name="password" class="form-control input_pass" value="" placeholder="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <div class="checkbox ">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
						<div class="d-flex justify-content-center mt-3 login_container">
				 	        <button type="submit" name="button" class="btn login_btn">Login</button>
				        </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="text-primary"><strong>Sign Up</strong></a>
                    </div>
                    
                    
					{{-- <div class="d-flex justify-content-center links">
						<a href="{{ route('password.request') }}">Forgot your password?</a>
					</div> --}}
				</div>
			</div>
		</div>
    </div>
    @endsection
</body>
</html>
