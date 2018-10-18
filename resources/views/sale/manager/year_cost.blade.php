@extends('master')

@section('title', '部署の追加')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">売上管理 年別利益表</h1>
	</div>

	<form action="{{url('sale/manager/year-cost')}}" method="get">
	<div class="col-md-2" style="min-width: 150px; margin-bottom: 10px;">
		<div class="input-group">
			<input type="text" name="year" class="form-control year" value="{{ $year }}">
			<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		</div>
	</div>
	<div class="col-md-2">
		<input type="submit" name="" value="更新" class="btn btn-primary">
	</div>
	</form>

	<br>

	<div class="clearfix"></div>

	<div class="col-md-4">
		<div class="panel panel-success">
			<div class="panel-heading text-center">
				利益率
			</div>
			<div class="panel-body text-center">
				<span class="font_big">{{ $ratio }}%</span>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="panel panel-danger">
			<div class="panel-heading text-center">
				売上合計
			</div>
			<div class="panel-body text-center">
				<span class="font_big">{{ $year_sale }}万円</span>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="panel panel-warning">
			<div class="panel-heading text-center">
				経費合計
			</div>
			<div class="panel-body text-center">
				<span class="font_big">{{ $year_cost }}万円</span>
			</div>
		</div>
	</div>

</div>
<script type="text/javascript">
$(function() {
	$('.year').datetimepicker({
		locale: 'ja',
		format : 'YYYY',
	});
});
</script>
@endsection