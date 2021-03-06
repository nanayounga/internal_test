@extends('master')

<!-- @section('title', 'ページタイトル') -->

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">ツールを残す</h1>
	</div>
	<div class="col-lg-12">
		<div class="panel panel-info">
			<div class="panel-heading">
				<form class="form-inline" name="frm_search" method="GET">
					<div class="form-group">
						<input type="text" name="text_search" class="form-control input-sm" id="text_search" placeholder="Search in ID, name , email" value="{{$params['text_search']}}">
					</div>
					<div class="form-group">
						<input type="text" name="user_id" class="form-control input-sm" id="text_search" placeholder="User ID" value="{{$params['user_id']}}">
					</div>
					<div class="form-group">
						<select data-placeholder="選択して下さい" class="form-control select2_single" name="department">
							<option value="">Select department...</option>
							@foreach ($departments as $department)
							<option value="{{$department->department_id}}" @if($params['department']==$department->department_id) selected @endif>{{$department->department_name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<select name="vacation_status" class="form-control input-sm">
							<option value="">状態 ...</option>
							@foreach($vacation_status as $key =>$status)
							<option value="{{$key}}" @if($params['vacation_status']==$key) selected @endif>{{$status}}</option>
							@endforeach
						</select>
					</div>
					|
					<div class="input-group date" id="datetimepicker_from_date">
						<input class="form-control" type="text" name="from_date" value="{{$params['from_date']}}" placeholder="From date">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar">
							</span>
						</span>
					</div>
					<div class="input-group date" id="datetimepicker_to_date">
						<input class="form-control" type="text" name="to_date" value="{{$params['to_date']}}" placeholder="To date">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar">
							</span>
						</span>
					</div>
					<button type="submit" class="btn btn-primary btn-outline btn-sm" name="filter">Filter</button>
					<a href="{{route('uses_vacation_history_admin')}}" class="btn btn-danger btn-outline btn-sm" id="reset_filter">Reset</a>
				</form>
			</div>
		</div>
		<div class="panel panel-success">
			@if (session()->has('success_message'))
			<div class="alert alert-success">
				{{ session()->get('success_message') }}
			</div>
			@endif
			@if (session()->has('fail_message'))
			<div class="alert alert-danger">
				{{ session()->get('fail_message') }}
			</div>
			@endif
			@if(count($vacations_history) > 0)
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<?php
						$order_by = $params['order_by'];
						$sort = $params['sort'];
						$params_no_sort = array_filter($params);
						?>
						<th>ID</th>
						<th>
							ユーザー名
							@if($params['order_by']=='user_name' and $params['sort']=='desc')
							<a href="{{route('uses_vacation_history_admin',array_merge($params_no_sort,['order_by'=>'user_name','sort'=>'asc']))}}" class="pull-right"><i class="fa fa-fw fa-sort-asc"></i></a>
							@else
							@if($params['order_by']=='user_name' and $params['sort']=='asc')
							<a href="{{route('uses_vacation_history_admin',array_merge($params_no_sort,['order_by'=>'user_name','sort'=>'desc']))}}" class="pull-right"><i class="fa fa-fw fa-sort-desc"></i></a>
							@else
							<a href="{{route('uses_vacation_history_admin',array_merge($params_no_sort,['order_by'=>'user_name','sort'=>'asc']))}}" class="pull-right"><i class="fa fa-fw fa-sort"></i></a>
							@endif
							@endif
						</th>
						<th>
							休暇日
							@if($params['order_by']=='vacation_date' and $params['sort']=='desc')
							<a href="{{route('uses_vacation_history_admin',array_merge($params_no_sort,['order_by'=>'vacation_date','sort'=>'asc']))}}" class="pull-right"><i class="fa fa-fw fa-sort-asc"></i></a>
							@else
							@if($params['order_by']=='vacation_date' and $params['sort']=='asc')
							<a href="{{route('uses_vacation_history_admin',array_merge($params_no_sort,['order_by'=>'vacation_date','sort'=>'desc']))}}" class="pull-right"><i class="fa fa-fw fa-sort-desc"></i></a>
							@else
							<a href="{{route('uses_vacation_history_admin',array_merge($params_no_sort,['order_by'=>'vacation_date','sort'=>'asc']))}}" class="pull-right"><i class="fa fa-fw fa-sort"></i></a>
							@endif
							@endif
						</th>
						<th>理由</th>
						<th>タイプ</th>
						<th>状態</th>
						<th>ステータスの変更</th>
						<th>アクション</th>
					</tr>
				</thead>
				<tbody>
					@foreach($vacations_history as $vacation)
					<tr>
						<td>{{ $vacation['vacation_id'] }}</td>
						<td>{{ $vacation['user_name'] }}</td>
						<td>{{ $vacation['vacation_date'] }}</td>
						<td class="text-center">
							@if($vacation['vacation_reason'] !='')
							<span class="text-success simple-tooltip" title="{{$vacation['vacation_reason']}}"><i class="fa fa-comments fa-2x"></i></span>
							@endif
						<td>{{ $vacation['vacation_type'] }}</td>
						<td id="vacation_status_{{$vacation['vacation_id']}}">
							<?php
							$class_arr = array('waitting' => 'label-warning', 'temp_approved' => 'label-success', 'approved' => 'label-success', 'unapproved' => 'label-danger', 'cancel' => 'label-info');
							?>
							<span class="label {{$class_arr[$vacation['vacation_status']]}}" >{{$vacation['vacation_status']}}</span>
						</td>
						<td id="action_vacation_status_{{$vacation['vacation_id']}}">
							@if($vacation['vacation_status'] == 'waitting')
							<a href="javascript:void(0);" id="approve-{{$vacation['vacation_id']}}" class="btn btn-outline btn-success btn-xs vacation-approve" attr-id="{{ $vacation['vacation_id'] }}"><span>Approve</span></a>
							<a href="javascript:void(0);" id="unapprove-{{$vacation['vacation_id']}}" class="btn btn-outline btn-danger btn-xs vacation-unapprove" attr-id="{{ $vacation['vacation_id'] }}"><span>UnApprove</span></a>
							@else
							@if($vacation['vacation_status'] == 'approved')
							<a href="javascript:void(0);" id="unapprove-{{$vacation['vacation_id']}}" class="btn btn-outline btn-danger btn-xs vacation-unapprove" attr-id="{{ $vacation['vacation_id'] }}"><span>UnApprove</span></a>
							@endif
							@endif
						</td>
						<td>
							<a href="{{route('vacation_edit',['id'=>$vacation['vacation_id']])}}" id="edit-vacation-{{$vacation['vacation_id']}}" class="btn btn-outline btn-primary btn-xs"><span>Edit</span></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="col-lg-12 text-center">
				{!! $vacations_history->appends(array_filter($params))->render(); !!}
			</div>
			@else

				<div class="panel-heading">
					Data not found!
				</div>

			@endif
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<script src="{{ asset('select2-4.0.3/dist/js/select2.min.js') }}"></script>
<link href="{{ asset('select2-4.0.3/dist/css/select2.min.css') }}" rel="stylesheet">
<link href="{{ asset('tipped/tipped.css') }}" rel="stylesheet">
<script src="{{ asset('tipped/tipped.js') }}"></script>

<script type="text/javascript">
$(document).ready(function () {
	$('#datetimepicker_from_date').datetimepicker({
		daysOfWeekDisabled: [0, 6],
		format: 'YYYY-MM-DD',
		//  locale: 'jp'
	});
	$('#datetimepicker_to_date').datetimepicker({
		daysOfWeekDisabled: [0, 6],
		format: 'YYYY-MM-DD',
		//  locale: 'jp'
	});
	$('.vacation-approve').click(function () {
		var vacation_id = $(this).attr('attr-id');
		if (vacation_id) {
			change_vacation_status(vacation_id, 'approved');
		}
	});
	$('.vacation-unapprove').click(function () {
		var vacation_id = $(this).attr('attr-id');
		if (vacation_id) {
			change_vacation_status(vacation_id, 'unapproved');
		}
	});
	$(".select2_single").select2({
		allowClear: true
	});
	$(document).on('click', '.select2', function () {
		$('.select2-search__field').attr('placeholder', '検索');
	});
	Tipped.create('.simple-tooltip',
			{
				skin: 'blue',
				size: 'large',
			});
});
function change_vacation_status(id, status) {
	$.ajax({
		method: "POST",
		url: "/paid-vacation/change-status",
		data: {id: id, status: status},
		beforeSend: function (xhr) {
			$.loader.open();
			$('.loading').show();
		}
	})
			.done(function (data) {
				if (data.status === 'ok') {
					var html = '';
					if (status === 'approved') {
						var html = '<span class="label label-success">Approved</span>';
						$('#action_vacation_status_' + id + ' .vacation-approve').remove();
					} else {
						var html = '<span class="label label-danger">Unapproved</span>';
						$('#action_vacation_status_' + id).html('');
					}
					$('#vacation_status_' + id).html(html);

					$.notify(data.message, {className: 'success', globalPosition: 'bottom right'});
				} else {
					$.notify(data.message, {className: 'error', globalPosition: 'bottom right'});
				}
				setTimeout(function () {
					$.loader.close();
				}, 500);
			});
}
</script>
@endsection