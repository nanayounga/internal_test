@extends('master')

@section('title', '給与額　を　ログイン')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">給与編集用 ログイン</h1>
	</div>

	<div class="col-md-12">
		@include('share/user_tab_menu')
		

		<div class="alert alert-warning">
			給与の閲覧・編集を行う場合、先に給与用ログインパスワードでログインして下さい。
		</div>
	
		<div class="panel panel-default">
			<div class="panel-heading">ログイン</div>
			<div class="panel-body">
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				
				{{-- フラッシュメッセージの表示 --}}
				@if (Session::has('notice'))
					<div class="alert alert-success">{!! Session::get('notice') !!}</div>
				@endif

				<form class="form-horizontal" role="form" method="POST" action="{{ url('/salary/login/' . $editing_user_id) }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
						<label class="col-md-4 control-label">パスワード</label>
						<div class="col-md-6">
							<input type="password" class="form-control" name="permission_password">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">ログイン</button>

							<a class="btn btn-link" href="{{ url('/salary/create_password') }}">パスワードを忘れた場合</a>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-md-12 -->
</div>
<!-- /.row -->

</div>
@endsection