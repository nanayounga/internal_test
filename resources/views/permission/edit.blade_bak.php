@extends('master')

@section('title', '権限編集')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">権限編集</h1>
	</div>

	<div class="col-md-12">
		@include('share/user_tab_menu')
		<div class="panel panel-default">
			<div class="panel-heading">{{ $user->user_name }}</div>
			<div class="panel-body">
				<form action="{{url('permission/update'). '/'. $user->user_id}}" method="post" autocomplete="off" class="form-horizontal form-label-left">

				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

				{{-- フラッシュメッセージの表示 --}}
				@if (Session::has('notice'))
					<div class="alert alert-success">{{ Session::get('notice') }}</div>
				@endif

				<div class="form-group {{ $errors->has('permission[ユーザー情報]') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">ユーザー情報 </label>
					<div class="col-md-6">
						<div class="radio">
							<label>
								<input type="radio" name="permission[ユーザー情報]" value="1" @if($permission['ユーザー情報'] == "1") checked @endif>経理用
							</label>
							&nbsp;
							<label>
								<input type="radio" name="permission[ユーザー情報]" value="2" @if($permission['ユーザー情報'] == "2") checked @endif>一般
							</label>
						</div>
						@if($errors->has('permission[ユーザー情報]'))
							<p class="help-block">{{ $errors->first('permission[ユーザー情報]') }}</p>
						@endif
						<div class="alert alert-warning">
							経理用は給与、マイナンバーが閲覧できるので経理担当者以外は設定しないよう注意して下さい。<br>
							一般は基本情報のみ閲覧可能です。
						</div>
					</div>
				</div>

				<div class="form-group {{ $errors->has('permission[部署]') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">部署管理 </label>
					<div class="col-md-6">
						<div class="radio">
							<label>
								<input type="radio" name="permission[部署]" value="1" @if($permission['部署'] == "1") checked @endif>管理者
							</label>
							&nbsp;
							<label>
								<input type="radio" name="permission[部署]" value="2" @if($permission['部署'] == "2") checked @endif>一般
							</label>
						</div>
						@if($errors->has('permission[部署]'))
							<p class="help-block">{{ $errors->first('permission[部署]') }}</p>
						@endif
						<div class="alert alert-warning">
							管理者は部署の追加・編集が出来ます。<br>一般は部署の情報は閲覧出来ますが追加・編集が出来ません。
						</div>
					</div>
				</div>

				<div class="form-group {{ $errors->has('permission[部署]') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">有給管理 </label>
					<div class="col-md-6">
						<div class="radio">
							<label>
								<input type="radio" name="permission[有給]" value="1" @if($permission['有給'] == "1") checked @endif>管理者
							</label>
							&nbsp;
							<label>
								<input type="radio" name="permission[有給]" value="2" @if($permission['有給'] == "2") checked @endif>一般
							</label>
						</div>
						@if($errors->has('permission[有給]'))
							<p class="help-block">{{ $errors->first('permission[有給]') }}</p>
						@endif
						<div class="alert alert-warning">
							管理者は所属している部署の有給の承認が行えます。
						</div>
					</div>
				</div>

				<div class="form-group {{ $errors->has('permission[部署]') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">権限編集 </label>
					<div class="col-md-6">
						<div class="radio">
							<label>
								<input type="radio" name="permission[権限編集]" value="1" @if($permission['権限編集'] == "1") checked @endif>管理者
							</label>
							&nbsp;
							<label>
								<input type="radio" name="permission[権限編集]" value="2" @if($permission['権限編集'] == "2") checked @endif>一般
							</label>
						</div>
						@if($errors->has('permission[権限編集]'))
							<p class="help-block">{{ $errors->first('permission[権限編集]') }}</p>
						@endif
						<div class="alert alert-warning">
							管理者は社員の権限編集が行えます。<br>一般にすると権限編集（今開いているページ）が閲覧・編集出来なくなるのでご注意下さい。
						</div>
					</div>
				</div>

				<hr>
				<div class="form-group">
					<div class="col-md-6 col-md-offset-3">
						<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
						<input type="submit" class="btn btn-primary" value="編集" name="submit">
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


@endsection