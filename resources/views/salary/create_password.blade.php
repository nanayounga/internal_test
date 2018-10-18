@extends('master')

@section('title', '給与パスワードを作成する')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">給与パスワードを作成する</h1>
	</div>

	<div class="col-md-12">
		@include('share/user_tab_menu')
		
		<div class="panel panel-default">
			<div class="panel-heading">入力情報</div>
			<div class="panel-body">
				<form action="{{url('salary/create_password')}}" method="post" autocomplete="off" class="form-horizontal form-label-left">

				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				<div class="alert alert-danger">パスワードを変更すると全ての社員の給与データが消去されます。<br>給与のCSVデータを持っている場合、データの復旧が可能です。</div>
				<div class="form-group {{ $errors->has('permission_password') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">ログインパスワード <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<input class="form-control" name="permission_password" type="password" value="{{ old('permission_password') }}" placeholder="6文字以上のパスワード" maxlength="50" required>
						@if($errors->has('permission_password'))
							<p class="help-block">{{ $errors->first('permission_password') }}</p>
						@endif
					</div>
				</div>

				<div class="form-group {{ $errors->has('permission_password') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">ログインパスワード確認 <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<input class="form-control" name="permission_password_confirm" type="password" value="{{ old('permission_password_confirm') }}" placeholder="6文字以上のパスワード(確認用)" maxlength="50" required>
						@if($errors->has('permission_password_confirm'))
								<p class="help-block">{{ $errors->first('permission_password_confirm') }}</p>
						@endif
					</div>
				</div>
				
				<hr>
				<div class="form-group">
					<div class="col-md-6 col-md-offset-3">
						<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
						<input type="submit" class="btn btn-primary" value="追加" name="submit">
						<input type="password" name="dummypass" style="visibility: hidden; top: -100px; left: -100px;" />
					</div>
				</div>
				</form>
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-md-12 -->
</div>
<!-- /.row -->

</div>
@endsection