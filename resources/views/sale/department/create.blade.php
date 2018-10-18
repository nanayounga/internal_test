@extends('master')

@section('title', '部署の追加')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">売上管理 部署追加</h1>
	</div>

	<form action="{{url('sale/department/store')}}" method="post" autocomplete="off" class="form-horizontal form-label-left">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">部署情報の入力</div>
			<div class="panel-body">
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

				<div class="form-group {{ $errors->has('sales_department_name') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">部署名 <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<input class="form-control" name="sales_department_name" text="text" value="{{ old('sales_department_name') }}" maxlength="20" placeholder="システム開発部" required>
						@if($errors->has('sales_department_name'))
						    <p class="help-block">{{ $errors->first('sales_department_name') }}</p>
						@endif
					</div>
				</div>

				<div class="form-group {{ $errors->has('sales_department_start') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">表示期間 <span class="required">[必須]</span></label>
					<div class="col-md-3">
						<div class="input-group">
							<input type="text" class="form-control date" name="sales_department_start" value="{{ old('sales_department_start') }}" placeholder="Start">
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
						</div>
						@if($errors->has('sales_department_start'))
						    <p class="help-block">{{ $errors->first('sales_department_start') }}</p>
						@endif
					</div>
					<div class="col-md-3">
						<div class="input-group">
							<input type="text" class="form-control date" name="sales_department_end" value="{{ old('sales_department_end') }}" placeholder="End">
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
						</div>
						@if($errors->has('sales_department_end'))
						    <p class="help-block">{{ $errors->first('sales_department_end') }}</p>
						@endif
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<input type="submit" class="btn btn-primary" value="確認" name="submit">
	</div>

	</form>
	<!-- /.col-md-6 -->

</div>

<script type="text/javascript">
	$('.date').datetimepicker({
		locale: 'ja',
		format : 'YYYY/MM/DD',
	});
</script>
@endsection