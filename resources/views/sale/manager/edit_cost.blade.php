@extends('master')

@section('title', '部署の追加')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">売上管理 経費の入力</h1>
	</div>

	<form action="{{ url('sale/manager/store-cost')}}" method="post" autocomplete="off" class="form-horizontal form-label-left">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				{{ date('Y年m月', strtotime($year_month) ) }}
				@if (! empty($department))
					{{ $department->sales_department_name }}
				@else
					その他の経費
				@endif
			</div>
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

				<div class="form-group {{ $errors->has('sales_cost_value') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">経費金額 <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<input class="form-control" name="sales_cost_value" text="text" value="{{ $sales_cost['sales_cost_value'] }}" maxlength="20" placeholder="100" required>
						@if($errors->has('sales_cost_value'))
							<p class="help-block">{{ $errors->first('sales_cost_value') }}</p>
						@endif
					</div>
				</div>
			</div>
		</div>
		@if (! empty($department))
			<input type="hidden" name="sales_department_id" value="{{ $department->sales_department_id }}">
		@endif
		<input type="hidden" name="sales_cost_year_month" value="{{ $year_month }}">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<input type="submit" class="btn btn-primary" value="確認" name="submit">
	</div>

	</form>
	<!-- /.col-md-6 -->

</div>
@endsection