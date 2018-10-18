@extends('master')

@section('title', '給与額詳細情報編集')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">給与額詳細情報編集</h1>
	</div>

	<div class="col-lg-12">
		@include('share/user_tab_menu')
		
		<div class="panel panel-default">
			<div class="panel-heading">{{ $user['user_name'] }}</div>
			<div class="panel-body">
				<form action="{{url('salary/update'). '/'. $user['user_id']}}" method="post" autocomplete="off" class="form-horizontal form-label-left">

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
					<div class="alert alert-success">{!! Session::get('notice') !!}</div>
				@endif

				<div class="form-group {{ $errors->has('salary_basic') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">基本給 <span class="required">[必須]</span></label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="salary_basic" type="number" value="{{ ! empty($salary['salary_basic']) ? $salary['salary_basic'] : old('salary_basic') }}">
						</div>
						@if($errors->has('salary_basic'))
							<p class="help-block">{{ $errors->first('salary_basic') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('salary_allowance') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">役職手当 </label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="salary_allowance" type="number" value="{{ ! empty($salary['salary_allowance']) ? $salary['salary_allowance'] : old('salary_allowance') }}">
						</div>
						@if($errors->has('salary_allowance'))
							<p class="help-block">{{ $errors->first('salary_allowance') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('salary_child_allowance') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">家族（子供）手当 </label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="salary_child_allowance" type="number" value="{{ ! empty($salary['salary_child_allowance']) ? $salary['salary_child_allowance'] : old('salary_child_allowance') }}">
						</div>
						@if($errors->has('salary_child_allowance'))
							<p class="help-block">{{ $errors->first('salary_child_allowance') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('salary_trans_allowance') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">通勤手当 </label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="salary_trans_allowance" type="number" value="{{ ! empty($salary['salary_trans_allowance']) ? $salary['salary_trans_allowance'] : old('salary_trans_allowance') }}">
						</div>
						@if($errors->has('salary_trans_allowance'))
							<p class="help-block">{{ $errors->first('salary_trans_allowance') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('salary_others') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">その他 </label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="salary_others" type="number" value="{{ ! empty($salary['salary_others']) ? $salary['salary_others'] : old('salary_others') }}">							
						</div>
						@if($errors->has('salary_others'))
							<p class="help-block">{{ $errors->first('salary_others') }}</p>
						@endif
					</div>
				</div>
				
				<hr>
				<div class="form-group">
					<div class="col-lg-6 col-md-offset-3">
						<input type="hidden" name="user_id" value="{{ $user['user_id'] }}">
						<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
						<input type="submit" class="btn btn-primary" value="編集" name="submit">
						<input type="button" class="btn btn-primary" value="バック" name="back" onclick='window.location.href="{{ url('/salary/show/'.$user["user_id"]) }}";'>
						<input type="password" name="dummypass" style="visibility: hidden; top: -100px; left: -100px;" />
					</div>
				</div>
				</form>
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->


</div>
<!-- datetimepicker -->
<script src="{{ asset('js/moment.js') }}"></script>
<script src="{{ asset('bootstrap-datetimepicker/moment-with-locales.js') }}"></script>
<link href="{{ asset('bootstrap-datetimepicker/bootstrap-datetimepicker.css') }}" rel="stylesheet">
<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/v4.0.0/src/js/bootstrap-datetimepicker.js"></script>

<script type="text/javascript">
	$('.date').datetimepicker({
		locale: 'ja',
		format : 'YYYY/MM/DD',
	});
</script>
@endsection