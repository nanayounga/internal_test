<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ログイン</title>

	<link href="{{ asset('bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{ asset('sb-admin-2/dist/css/sb-admin-2.css') }}" rel="stylesheet">
		<link href="{{ asset('metismenu-master/dist/metisMenu.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/original.css') }}" rel="stylesheet">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<style type="text/css">
.progress-bar {
		color: #333;
}

/*
Reference:
http://www.bootstrapzen.com/item/135/simple-login-form-logo/
*/

* {
		-webkit-box-sizing: border-box;
		 -moz-box-sizing: border-box;
					box-sizing: border-box;
	outline: none;
}

		.form-control {
		position: relative;
		font-size: 16px;
		height: auto;
		padding: 10px;

	}

body {
	background: url({{ asset('images/util/GHr12sH.jpg') }}) no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
}

.login-form {
	margin-top: 60px;
}

form[role=login] {
	color: #5d5d5d;
	background: #f2f2f2;
	padding: 26px;
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
}
	form[role=login] img {
		display: block;
		margin: 0 auto;
		margin-bottom: 35px;
	}
	form[role=login] input,
	form[role=login] button {
		font-size: 18px;
		margin: 16px 0;
	}
	form[role=login] > div {
		text-align: center;
	}

.form-links {
	text-align: center;
	margin-top: 1em;
	margin-bottom: 50px;
}
	.form-links a {
		color: #fff;
	}
	</style>
</head>
<body>
<div class="container">

	<div class="row" id="pwd-container">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<section class="login-form">
				<form action="{{url('login')}}" method="post" role="login">
					{{-- フラッシュメッセージの表示 --}}
					@if (Session::has('notice'))
						<div class="alert alert-success">{{ Session::get('notice') }}</div>
					@endif

					<h2 class="page-header text-center">PAS LOG</h2>

					<input class="form-control" name="user_email" type="email" value="{{ old('user_email') }}" maxlength="80" placeholder="Email" required>
					@if($errors->has('user_email'))
						<p class="help-block">{{ $errors->first('user_email') }}</p>
					@endif

					<input class="form-control" name="user_password" type="password" placeholder="password" maxlength="50" required>
					@if($errors->has('user_password'))
						<p class="help-block">{{ $errors->first('user_password') }}</p>
					@endif

					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					<input type="submit" class="btn btn-primary btn-block" value="確認" name="submit">
<!--
					<div>
						<a href="#">Create account</a> or <a href="#">reset password</a>
					</div>
 -->
				</form>

<!-- 				<div class="form-links">
					<a href="#">www.website.com</a>
				</div> -->
			</section>
			</div>

			<div class="col-md-4"></div>
	</div>

</div>
<!--
<div class="center-block">
<div class="row col-md-8 col-md-offset-2">
	<form action="{{url('login')}}" method="post" autocomplete="off">
	{{-- フラッシュメッセージの表示 --}}
	@if (Session::has('notice'))
		<div class="alert alert-success">{{ Session::get('notice') }}</div>
	@endif

	<div class="form-group {{ $errors->has('user_email') ? 'has-error' : '' }}">
		<label class="control-label">名前</label> <span class="required">[必須]</span>
		<input class="form-control" name="user_email" type="email" value="{{ old('user_email') }}" maxlength="20" placeholder="学習 花子" required>
				@if($errors->has('user_email'))
						<p class="help-block">{{ $errors->first('user_email') }}</p>
				@endif
	</div>

	<div class="form-group {{ $errors->has('user_password') ? 'has-error' : '' }}">
		<label class="control-label">ログインパスワード</label> <span class="required">[必須]</span>
		<input class="form-control" name="user_password" type="password" placeholder="password" maxlength="50" required>
				@if($errors->has('user_password'))
						<p class="help-block">{{ $errors->first('user_password') }}</p>
				@endif
	</div>
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<input type="submit" class="btn btn-primary" value="確認" name="submit">
	</form>
</div>
</div>
 -->
<!-- Scripts -->
<script src="{{ asset('bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('sb-admin-2/dist/js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('metismenu-master/dist/metisMenu.min.js') }}"></script>

</body>
</html>