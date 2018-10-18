@extends('master')

@section('title', '社員追加')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">社員追加</h1>
	</div>

	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">社員情報の入力</div>
			<div class="panel-body">
				<form action="{{url('user/create')}}" method="post" autocomplete="off" class="form-horizontal form-label-left">

				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

				<div class="form-group {{ $errors->has('user_kanji_last_name') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">姓（漢字） <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<input class="form-control" name="user_kanji_last_name" text="text" value="{{ old('user_kanji_last_name') }}" maxlength="20" placeholder="山田" required>
						@if($errors->has('user_kanji_last_name'))
							<p class="help-block">{{ $errors->first('user_kanji_last_name') }}</p>
						@endif
					</div>
				</div>

				<div class="form-group {{ $errors->has('user_kanji_first_name') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">名（漢字） <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<input class="form-control" name="user_kanji_first_name" text="text" value="{{ old('user_kanji_first_name') }}" maxlength="20" placeholder="太郎" required>
						@if($errors->has('user_kanji_first_name'))
							<p class="help-block">{{ $errors->first('user_kanji_first_name') }}</p>
						@endif
					</div>
				</div>

				<div class="form-group {{ $errors->has('user_kata_last_name') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">姓（カタカナ） <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<input class="form-control" name="user_kata_last_name" text="text" value="{{ old('user_kata_last_name') }}" maxlength="20" placeholder="ヤマダ" required>
						@if($errors->has('user_kata_last_name'))
							<p class="help-block">{{ $errors->first('user_kata_last_name') }}</p>
						@endif
					</div>
				</div>

				<div class="form-group {{ $errors->has('user_kata_first_name') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">名（カタカナ） <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<input class="form-control" name="user_kata_first_name" text="text" value="{{ old('user_kata_first_name') }}" maxlength="20" placeholder="タロウ" required>
						@if($errors->has('user_kata_first_name'))
							<p class="help-block">{{ $errors->first('user_kata_first_name') }}</p>
						@endif
					</div>
				</div>

				<div class="form-group {{ $errors->has('user_email') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">メールアドレス <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<input class="form-control" name="user_email" type="email" value="{{ old('user_email') }}" placeholder="gakushu@gmail.com" maxlength="50" value="" required>
						@if($errors->has('user_email'))
							<p class="help-block">{{ $errors->first('user_email') }}</p>
						@endif
					</div>
				</div>

				<div class="form-group {{ $errors->has('user_password') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">ログインパスワード <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<input class="form-control" name="user_password" type="password" value="{{ old('user_password') }}" placeholder="6文字以上のパスワード" maxlength="50" required>
						@if($errors->has('user_password'))
							<p class="help-block">{{ $errors->first('user_password') }}</p>
						@endif
					</div>
				</div>

				<div class="form-group {{ $errors->has('user_password') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">ログインパスワード確認 <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<input class="form-control" name="user_password_confirm" type="password" value="{{ old('user_password_confirm') }}" placeholder="6文字以上のパスワード(確認用)" maxlength="50" required>
						@if($errors->has('user_password_confirm'))
								<p class="help-block">{{ $errors->first('user_password_confirm') }}</p>
						@endif
					</div>
				</div>

				<div class="form-group {{ $errors->has('user_password') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">所属部署の選択 <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<select data-placeholder="選択して下さい" class="form-control select2_single" name="department_id">
							<option value=""></option>
						@foreach ($departments as $department)
							<option value="{{$department->department_id}}" @if(old('department_id')==$department->department_id) selected @endif>{{$department->department_name}}</option>
						@endforeach
						</select>
						@if($errors->has('department_id'))
							<p class="help-block">{{ $errors->first('department_id') }}</p>
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
<script src="{{ asset('select2-4.0.3/dist/js/select2.min.js') }}"></script>
<link href="{{ asset('select2-4.0.3/dist/css/select2.min.css') }}" rel="stylesheet">
<script type="text/javascript">
$(function(){
	$(".select2_single").select2({
		allowClear: true
	});
	$(document).on('click', '.select2', function() {
		$('.select2-search__field').attr('placeholder','検索');
	});
});
</script>
@endsection