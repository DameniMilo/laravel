<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign in &middot; Twitter Bootstrap 2</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/vendor/bootstrap2/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('css/vendor/bootstrap2/bootstrap-responsive.css') }}" rel="stylesheet">
	<style type="text/css">
		body {
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #f5f5f5;
		}

		.form-signin {
			max-width: 300px;
			padding: 19px 29px 29px;
			margin: 0 auto 20px;
			background-color: #fff;
			border: 1px solid #e5e5e5;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
			-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
			box-shadow: 0 1px 2px rgba(0,0,0,.05);
		}
		.form-signin .form-signin-heading,
		.form-signin .checkbox {
			margin-bottom: 10px;
		}
		.form-signin input[type="text"],
		.form-signin input[type="password"] {
			font-size: 16px;
			height: auto;
			margin-bottom: 15px;
			padding: 7px 9px;
		}

	</style>
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="{{ asset('js/vendor/html5shiv.min.js') }}" type="text/javascript"></script>
	<![endif]-->
</head>

<body>
	<div class="container">
		<form class="form-signin" method="POST" action="/auth/login">
			{!! csrf_field() !!}
			<h2 class="form-signin-heading">Please sign in</h2>
			<input type="email" name="email" class="input-block-level" placeholder="Email address" value="{{ old('email') }}">
			<input type="password" class="input-block-level" placeholder="Password" id="password" name="password">
			<label class="checkbox">
				<input type="checkbox" value="remember-me"> Remember me
			</label>
			<button class="btn btn-large btn-primary" type="submit">Sign in</button>
		</form>
	</div>
	<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/vendor/bootstrap2/bootstrap.js') }}" type="text/javascript"></script>
</body>
</html>
