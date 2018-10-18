@extends('master')

@section('title', '休暇状況詳細')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">休暇状況詳細 {{$user->user_kanji_last_name}} {{$user->user_kanji_first_name}}</h1>
	</div>

	<div class="col-lg-6">
		<div class="row">
			<div class="col-lg-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12 text-center">
								取得日数合計
							</div>
							<div class="col-xs-12 text-center">
								<div class="huge">{{$vacation_infor['total_off']}}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="panel panel-warning">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12 text-center">
								承認待ちの合計
							</div>
							<div class="col-xs-12 text-center">
								<div class="huge">{{$vacation_infor['total_waitting']}}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12 text-center">
								取得可能日数
							</div>
							<div class="col-xs-12 text-center">
								<div class="huge">{{$vacation_infor['number_vacation_day']}}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-12">
		<h2 class="page-header">取得履歴</h2>
		<div class="panel panel-info">
			<div class="panel-heading">
				<form class="form-inline" name="frm_search" method="GET">
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
					<button type="submit" class="btn btn-primary btn-outline btn-sm">検索</button>
				</form>
			</div>
		</div>

		<div class="panel panel-success side_scroll">
			@if (session()->has('success_message'))
				<div class="alert alert-success">
					{{ session()->get('success_message') }}
				</div>
			@endif

			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>休暇日</th>
						<th>コメント</th>
						<!-- <th>Type</th> -->
						<th>承認者</th>
						<th>ステータス</th>
						<th>申請日</th>
						<th>アクション</th>
					</tr>
				</thead>
				<tbody>
					@foreach($vacations_history as $vacation)
					<tr>
						<td>{{ $vacation->vacation_id }}</td>
						<td>{{ date('Y年m月d日', strtotime($vacation->vacation_date)) }}</td>
						<td class="text-center">
							@if($vacation['vacation_reason'] !='')
							<span class="text-success simple-tooltip" title="{{nl2br($vacation['vacation_reason'])}}"><i class="fa fa-comments fa-2x"></i></span>
							@endif
						</td>
						<!-- <td>{{ $vacation->vacation_type }}</td> -->
						<td>{{Util::get_user_name($vacation['vacation_confirm_by'])}}</td>
						<td>
							<?php $class = ($vacation['vacation_status'] == 'waitting')?'label-warning':(($vacation['vacation_status'] == 'approved')?'label-success':'label-danger');?>
							<span class="label {{$class}}">{{$vacation_status[$vacation['vacation_status']]}}</span>
						</td>
						<td>{{ date('Y年m月d日', strtotime($vacation->created_at)) }}</td>
						<td>
							<a href="{{ url('paid-vacation/edit/' . $vacation->vacation_id) }}" class="btn btn-outline btn-primary btn-xs">編集</a>
							@if($vacation['vacation_status'] == 'waitting')
							<a href="{{route('vacation_change_status',['id'=>$vacation['vacation_id'],'status'=>'cancel'])}}" class="btn btn-outline btn-primary btn-xs"><span>Cancel</span></a>
							@else
							<a href="javascript:void(0);"><span class="btn btn-default btn-xs disabled">Cancel</span></a>
							@endif
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="col-lg-12 text-center">
			{!! $vacations_history->appends($params)->render(); !!}
			</div>
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.date').datetimepicker({
			format: 'YYYY-MM-DD',
            locale: 'ja',
		});
	});

</script>
<link href="{{ asset('tipped/tipped.css') }}" rel="stylesheet">
<script src="{{ asset('tipped/tipped.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function(){
	  Tipped.create('.simple-tooltip',
		{
			size: 'large',
		});
	});

</script>
@endsection

