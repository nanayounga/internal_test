<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="robots" content="noindex, nofollow" />
		<title>@yield('title')</title>
		<link rel="icon" href="{{ asset('images/ico/favicon.ico') }}">
		<link rel="manifest" href="{{ asset('pwa/manifest.json') }}">

		<link href="{{ asset('bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{ asset('sb-admin-2/dist/css/sb-admin-2.css') }}" rel="stylesheet">
		<link href="{{ asset('metismenu-master/dist/metisMenu.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/original.css') }}" rel="stylesheet">
		<link href="{{ asset('css/loader.css') }}" rel="stylesheet">
		<link href="{{ asset('bootstrap-datetimepicker/bootstrap-datetimepicker.css') }}" rel="stylesheet">
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="{{ asset('bootstrap-datetimepicker/moment-with-locales.js') }}"></script>
		<script src="{{ asset('bootstrap-datetimepicker/bootstrap-datetimepicker.js') }}"></script>
		<script src="{{ asset('js/jquery-loader.js') }}"></script>
		<script src="{{ asset('js/notify.min.js') }}"></script>
		<!-- Fonts -->
		<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="wrapper">
			<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ url() }}">PAS LOG</a>
				</div>
				<!-- /.navbar-header -->
<!--
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="{{ url('mypage/show') }}">登録情報</a></li>
							<li><a href="{{ url('/logout') }}">ログアウト</a></li>
						</ul>
					</li>
				</ul>
 -->
				<!-- /.navbar-top-links -->

				<div class="navbar-default sidebar" role="navigation">
					<div class="sidebar-nav navbar-collapse">
						<ul class="nav in" id="side-menu">
							<li>
								<a href="#" data-section=""><i class="fa fa-user-circle fa-fw"></i> 登録情報<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									<li>
										<a href="{{ url('mypage/show') }}">詳細</a>
									</li>
									<li>
										<a href="{{ url('mypage/edit') }}">編集</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#" data-section="minute"><i class="fa fa-edit fa-fw"></i> 議事録<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									<li>
										<a href="{{ url('/minute/group/create') }}">グループ追加</a>
									</li>
									<li>
										<a href="{{ url('/minute/group/lists') }}">グループ一覧</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#" data-section="paid-vacation"><i class="fa fa-plane fa-fw"></i> 有給管理<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									<li>
										<a href="{{route('vacation_list')}}" data-section="vacation">申請</a>
									</li>
									@if(Util::check_permission(['view_vacation']))
									<li>
										<a href="{{route('vacation_list_admin')}}" data-section="vacation">休暇取得表</a>
									</li>
									@endif
									@if(Util::check_permission('edit_vacation') || Util::check_permission('edit_temp_vacation'))
									<li>
										<a href="{{route('uses_vacation_history_admin')}}" data-section="vacation">申請履歴</a>
									</li>
									@endif
								</ul>
							</li>
							<li>
								<a href="#" data-section="sale"><i class="fa fa-file-text-o fa-fw"></i> 売上管理<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									<li>
										<a href="{{ url('/sale/manager/table') }}">売上表</a>
									</li>
									@if (Util::check_permission('view_cost'))
									<li>
										<a href="{{ url('/sale/manager/year-cost') }}">年別利益率</a>
									</li>
									@endif
									@if (Util::check_permission('edit_sales_department'))
									<li>
										<a href="{{ url('/sale/department/create') }}">部署追加</a>
									</li>
									<li>
										<a href="{{ url('/sale/department/lists') }}">部署一覧</a>
									</li>
									@endif
								</ul>
							</li>
							<li>
								<a href="#" data-section="user user_detail"><i class="fa fa-address-card-o fa-fw"></i> 社員管理<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									@if(Util::check_permission('create_account'))
									<li>
										<a href="{{ url('/user/create') }}">社員追加</a>
									</li>
									@endif
									<li>
										<a href="{{ url('/user/search') }}">社員検索</a>
									</li>
									@if(Util::check_permission('edit_salary') && (Session::get('is_login_salary')))
									<li>
										<a href="{{ url('salary/import_export') }}">給与CSV管理</a>
									</li>
									@endif
									@if(Util::check_permission('view_salary') && (Session::get('is_login_salary')))
									<li>
										<a href="{{ url('user_detail_log/list') }}">給与変更履歴</a>
									</li>
									@endif
								</ul>
							</li>
							<li>
								<a href="#" data-section="department"><i class="fa fa-sitemap fa-fw"></i> 部署管理<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									@if(Util::check_permission('create_department'))
									<li>
										<a href="{{ url('/department/create') }}">部署追加</a>
									</li>
									@endif
									<li>
										<a href="{{ url('/department/lists') }}">部署一覧</a>
									</li>
								</ul>
							</li>
							@if(Util::check_permission('manage_permission'))
							<li>
								<a href="#" data-section="permission_type"><i class="fa fa-user-secret fa-fw"></i> 権限管理<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									<li>
										<a href="/permission-type/list" data-section="permission_type">許可タイプ一覧</a>
									</li>
									<li>
										<a href="/permission-type/create" data-section="permission_type">許可タイプの作成</a>
									</li>
									<li>
										<a href="/permission/list" data-section="permission">権限リスト</a>
									</li>
									<li>
										<a href="/permission/create" data-section="permission">権限の作成</a>
									</li>
								</ul>
							</li>
							@endif
							<li>
								<a href="{{ url('logout') }}" data-section="sale"><i class="fa fa-sign-out fa-fw"></i> ログアウト</a>
							</li>
						</ul>
					</div>
					<!-- /.sidebar-collapse -->
				</div>
				<!-- /.navbar-static-side -->
			</nav>

			<div id="page-wrapper">
				@yield('content')
			</div>
		</div>
		<!-- Scripts -->
		<script src="{{ asset('bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>
		<!-- <script src="{{ asset('sb-admin-2/dist/js/sb-admin-2.min.js') }}"></script> -->
		<script src="{{ asset('sb-admin-2/js/sb-admin-2.js') }}"></script>
		<script src="{{ asset('metismenu-master/dist/metisMenu.min.js') }}"></script>

<script type="text/javascript">
// アコーディオンを開く
$("#side-menu > li > a").each(function(i, elem) {
	var section_name_ary = $(this).data('section').split(' ');
	var path = location.pathname;
	for (var i = 0; i < section_name_ary.length; i++) {
		if (path.match('^/' + section_name_ary[i] + '/') !== null)
		{
			$(this).parent().addClass('active');
		}
	}
});

// タブメニューをactiveにする
$('.nav-tabs > li > a').each(function (i, elem) {
	var url = window.location;
	if ($(this).attr('href') == url.href) {
		$(this).parent('li').addClass('active');
	}
});

// tooltip
$('[data-toggle="tooltip"]').tooltip()

$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});
</script>

@if (! empty($_COOKIE['after_login']))
<!-- service worker関連 -->
<!-- <script src="https://www.gstatic.com/firebasejs/5.0.4/firebase.js"></script> -->
<script src="https://www.gstatic.com/firebasejs/5.3.0/firebase.js"></script>
<script>
var messaging = firebase.initializeApp({
	apiKey: "AIzaSyBWTWHEJucrYIBcPZo-Ly-cWCr9vSWZeEI",
	authDomain: "paog-dbd22.firebaseapp.com",
	databaseURL: "https://paog-dbd22.firebaseio.com",
	projectId: "paog-dbd22",
	storageBucket: "",
	messagingSenderId: "293245986153"
}).messaging();
var serviceWorker = navigator.serviceWorker;

messaging.requestPermission();

serviceWorker.register("{{ asset('serviceworker.js') }}").then(() => {
	return serviceWorker.ready;
}).then(regist => {
	messaging.useServiceWorker(regist);
	messaging.requestPermission().then(() => {
		messaging.getToken().then(token => {
			$.ajax({
				url: '{{ url("service_worker/regist") }}',
				type: 'POST',
				data: {token: token },
				dataType: 'json',
			}).done(function(data) {
				console.log(data)
			}).fail(function(data) {
				console.log(data.responseText);
			});
		});
	});
});

</script>
<!-- /service worker関連 -->
<?php setcookie('after_login', '', time() - 1800); ?>
@endif


	</body>
</html>
