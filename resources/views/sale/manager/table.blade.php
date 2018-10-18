@extends('master')

@section('title', '売上管理 売上表')

@section('content')
<div class="row sale_wrap">
	<div class="col-md-12">
		<h1 class="page-header">{{ date('Y年 m月', strtotime($year_month) ) }} 売上表</h1>
	</div>

	{{-- フラッシュメッセージの表示 --}}
	@if (Session::has('notice'))
		<div class="col-md-12">
			<div class="alert alert-success">{{ Session::get('notice') }}</div>
		</div>
	@endif

	<form action="{{url('sale/manager/table')}}" method="get">

	<div class="col-md-2" style="min-width: 150px; margin-bottom: 10px;">
		<div class="input-group">
			<input type="text" name="year_month" class="form-control date" value="{{ date('Y-m', strtotime($year_month) ) }}">
			<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		</div>
	</div>
	<div class="col-md-2">
		<input type="submit" name="" value="更新" class="btn btn-primary">
		<!-- <button class="btn btn-primary refresh"><i class="fa fa-refresh" aria-hidden="true"></i></button> -->
	</div>
	</form>

	<br>

	<div class="col-md-12 side_scroll" style="poisition: relative;">
		<table class="table table-bordered sale_table" style="width: auto;">
			<caption>売上金額は入力した時点で登録されます。</caption>
			<thead>
			<tr>
				<th></th>
				<th></th>
				<th>1週目</th>
				<th>2週目</th>
				<th>3週目</th>
				<th>4週目</th>
				<th>5週目</th>
				<th class="">合計</td>
			</tr>
			</thead>
			@foreach ($departments as $department)
				<?php $department_id = $department->sales_department_id; ?>

					@foreach ($type_ary as $type => $type_jp)
					<tr>
						<?php if ($type_jp === reset($type_ary)) : // ループの初回のみ実行 ?>
							<th rowspan="3">
								<p style="">{{ $department->sales_department_name }}</p>
								@if (Util::check_permission('view_cost'))
								<p style="font-weight: normal;">【経費:
								<a href="{{ url('sale/manager/edit-cost/?year_month='). $year_month . '&department_id=' . $department_id }}">
									<?php echo (! empty($department_data[$department_id]['sales_cost']['sales_cost_value'])) ? $department_data[$department_id]['sales_cost']['sales_cost_value'] : 0;?>
								</a>】
								@endif
							</th>
						<?php endif; ?>

						<th>{{$type_jp}}</th>
						@for ($i = 1; $i <= 5; $i++)
							<?php $sales_value = (! empty($department_data[$department_id]['week']["{$i}週目"][$type])) ? $department_data[$department_id]['week']["{$i}週目"][$type] : '';?>

							<td><input class="sales_price" type="text" data-sales_type="{{$type}}" data-sales_week_some="{{$i}}週目" data-sales_department_id="{{ $department_id }}" data-sales_week_year_month="{{ $year_month }}" data-origin_value="{{$sales_value}}" value="{{ $sales_value }}"></td>
						@endfor
						<td class="total">
							<?php echo (! empty($department_data[$department_id]['total_month'][$type])) ? $department_data[$department_id]['total_month'][$type] : '';?>
						</td>
					</tr>
					@endforeach
			@endforeach

			<?php $type_ary = ['sales_week_goal' => '目標', 'sales_week_norma' => 'ノルマ', 'sales_week_result' => '売上', 'total_ratio' => '達成率', 'total_diff' => 'グループ全体プラマイ'] ?>
			@foreach ($type_ary as $type => $type_jp)
			<tr>
				<?php if ($type_jp === reset($type_ary)) : // ループの初回のみ実行 ?>
					<th rowspan="4" class="total_ttl">合計</th>
				<?php endif; ?>

				<th class="total_ttl">{{$type_jp}}</td>

				<?php if ($type_jp === last($type_ary)) : // ループの最後のみ実行 ?>
					<th class="total_ttl"></th>
				<?php endif; ?>

				<?php $sum = 0; ?>
				@for ($i = 1; $i <= 5; $i++)
					<td class="total">
						<?php $value = (! empty($collect_data[$type]["{$i}週目"])) ? $collect_data[$type]["{$i}週目"] : ''; ?>
						{{ $value }}<?php echo ($type == 'total_ratio' && $value) ? '%' : ''; ?> 
					</td>
				@endfor

				<td class="total">
					@if (! empty($collect_data['total_month'][$type]) ) 
						{{$collect_data['total_month'][$type]}}<?php echo ($type == 'total_ratio') ? '%' : ''; ?>
					@endif
				</td>
			</tr>
			@endforeach
		</table>

	</div>

	<div class="col-md-4">
		<table class="table table-bordered sale_table">
			<tr>
				<th>その他の経費</th>
				<td><a href="{{ url('sale/manager/edit-cost/?year_month='). $year_month}}"><?php echo (! empty($department_data[0]['sales_cost']['sales_cost_value'])) ? $department_data[0]['sales_cost']['sales_cost_value'] : 0;?></a></td>
			</tr>
		</table>
	</div>

	<div class="col-md-12">
		<h1 class="page-header">売上結果</h1>
	</div>

	<div class="col-md-4">
		<div class="panel panel-success">
			<div class="panel-heading text-center">
				売上合計
			</div>
			<div class="panel-body text-center">
				<span class="font_big">{{ $collect_data['total_month']['sales_week_result'] }}万円</span>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="panel panel-danger">
			<div class="panel-heading text-center">
				経費合計
			</div>
			<div class="panel-body text-center">
				<span class="font_big">{{ $collect_data['total_sales_cost'] }}万円</span>
			</div>
		</div>
	</div>

	@if (Util::check_permission('view_cost'))
	<div class="col-md-4">
		<div class="panel panel-warning">
			<div class="panel-heading text-center">
				利益率
			</div>
			<div class="panel-body text-center">
				<span class="font_big">{{ $collect_data['profit_ratio'] }}%</span>
			</div>
		</div>
	</div>
	@endif
</div>


<script type="text/javascript">

$(function() {
	$('.sale_wrap').fadeIn();

	$('.date').datetimepicker({
		locale: 'ja',
		format : 'YYYY-MM',
	});
});

$(document).on('click', '.refresh', function() {
	location.reload();
})

$(document).on('dblclick', '.sales_price', function() {
	// inputタグをダブルクリックでアクティブにする
	// $(this).attr('readonly', false);
});

$(document).on('click', '.select2', function() {
	$('.select2-search__field').attr('placeholder','検索');
});

// 入力された金額をDBへ登録
$(document).on('blur', '.sales_price', function() {
	// 金額に変更がなかった場合はreturn
	if ($(this).attr('data-origin_value') == $(this).val()) return;

	// デフォルト値が空で、尚且つなにも入力しなかった場合はreturn
	if ($(this).val() == '' && $(this).attr('data-origin_value') == '' ) return;

	// 入力された金額をDBへ登録
	send_sales_value($(this));
});

// 入力された金額をDBへ登録
function send_sales_value(obj) {
	$.ajax({
		url: '{{ url("sale/manager/store") }}',
		type: 'POST',
		data: {
			sales_type: obj.data('sales_type'),
			sales_value: (obj.val() == '') ? 0 : obj.val(),
			sales_week_some: obj.data('sales_week_some'),
			sales_department_id: obj.data('sales_department_id'),
			sales_week_year_month: obj.data('sales_week_year_month'),
		},
		// contentType: 'application/text',
		dataType: 'json',
	}).done(function(data) {
		console.log(data)

		if (data == 'success')
		{
			// location.reload();
			// 金額入力のinputタグのdata属性のdata-origin_valueの値を入力値に変更
			obj.attr('data-origin_value', obj.val())
		}
		else if (typeof (data) == "string")
		{
			error_text = data;
			alert(error_text)
		}
		else
		{
			var error_text = '';
			for(var tr in data) {
				error_text += data[tr][0] + '\n';
			}
			alert(error_text)
		}
	}).fail(function(data) {
		console.log(data.responseText);
	});
}

</script>

@endsection