@extends('master')

<!-- @section('title', 'ページタイトル') -->

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">部署編集</h1>
	</div>

	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">社員情報の入力</div>
			<div class="panel-body">
				<form action="{{url('department/update'). '/'. $department['department_id']}}" method="post" autocomplete="off" class="form-horizontal form-label-left">

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

				<div class="form-group {{ $errors->has('department_name') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">名前 <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<input class="form-control" name="department_name" text="text" value="{{ $department['department_name'] }}" maxlength="20" placeholder="学習 花子" required>
						@if($errors->has('department_name'))
							<p class="help-block">{{ $errors->first('user_name') }}</p>
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
$(".select2_single").select2({
	allowClear: true
});

</script>
@endsection