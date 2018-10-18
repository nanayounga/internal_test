@extends('master')

@section('title', '休暇取得表')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">休暇取得表</h1>
	</div>
	<div class="col-lg-12">
		<div class="panel panel-info">
			<div class="panel-heading">
				<form class="form-inline" name="frm_search" method="GET">
					<div class="form-group">
						<input type="text" name="text_search" class="form-control input-sm" id="text_search" placeholder="ID, name , email" value="{{$params['text_search']}}">
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
					<?php
						$current_year = intval(date('Y')); 
						$earlier_year = $current_year - 10;
					?>
					<select class="form-control" name="year">
						<option value="">Filter by year...</option>
						<?php while ($current_year >=$earlier_year){ ?>
						<option value="{{$current_year}}" @if($params['year'] == $current_year) selected @endif> {{$current_year}}</option>
						<?php 
						$current_year--;
						}
						?>
					</select>
					<button type="submit" class="btn btn-primary btn-outline btn-sm" name="filter">検索</button>
					<a href="{{route('vacation_list_admin')}}" class="btn btn-danger btn-outline btn-sm" id="reset_filter">リセット</a>
				</form>	

			 </div>			
		</div>
		
		<div class="panel panel-primary side_scroll">
			@if (session()->has('success_message'))
				<div class="alert alert-success">
					{{ session()->get('success_message') }}
				</div>
			@endif
			
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>{{$params['year']}}年</th>
						<th>4月</th>
						<th>5月</th>
						<th>6月</th>
						<th>7月</th>
						<th>8月</th>
						<th>9月</th>
						<th>10月</th>
						<th>11月</th>
						<th>12月</th>
						<th>1月</th>
						<th>2月</th>
						<th>3月</th>
						<th>期間内利用上限</th>
						<th>使用日数（仮）</th>
						<th>アクション</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users_vacation as $user_vacation)
					<tr>
						<td> 
							<strong>{{ $user_vacation->user_kanji_last_name }} {{ $user_vacation->user_kanji_first_name }}</strong>
						</td>
						<?php 
							$vacation_months = $user_vacation->vacations_data['vacation_month']; 
						?>
						@foreach($vacation_months as $vacation)
						<td class="text-center @if(($vacation['total_off'] >0)) info @endif">
							@if($vacation['total_off'] >0)
							<span class="label label-success simple-tooltip" title="<p>{{implode('</p><p>',$vacation['detail_off'])}}</p>"><strong>{{ $vacation['total_off']}} 日</strong></span>
							@else
								<!--<span class="label label-info pull-right">0</span>-->
							@endif
							<!--@if($vacation['total_waitting'] >0)                                
								<span class="label label-warning simple-tooltip"  title="Number day waitting for approve: {{ $vacation['total_waitting']}}"><strong>{{ $vacation['total_waitting']}}日</strong></span>
							@endif
							@if($vacation['total_unapprove'] >0)                                
								<span class="label label-danger margin simple-tooltip"  title="Number day unapprove:{{ $vacation['total_unapprove']}}"><strong>{{ $vacation['total_unapprove']}}日</strong></span>
							@endif-->														
						</td>
						@endforeach

						<td>{{ $user_vacation->number_vacation_day }} 日</td>
						<td>{{ (isset($user_vacation->vacations_data['total_off']))?$user_vacation->vacations_data['total_off']:0 }}</td>         
						<td><a href="{{ url('paid-vacation/user-detail/') . '/'. $user_vacation->user_id }}" class="btn btn-outline btn-primary btn-xs"><span>詳細</span></a></td>
					@endforeach                    
				</tbody>
			</table>
			<div class="col-lg-12 text-center">
			{!! $users_vacation->appends(array_filter($params))->render(); !!}
			</div>
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<script src="{{ asset('select2-4.0.3/dist/js/select2.min.js') }}"></script>
<link href="{{ asset('select2-4.0.3/dist/css/select2.min.css') }}" rel="stylesheet">
<link href="{{ asset('tipped/tipped.css') }}" rel="stylesheet">
<script src="{{ asset('tipped/tipped.js') }}"></script>
<!--<link href="{{ asset('css/jquery.qtip.min.css') }}" rel="stylesheet">
<script src="{{ asset('js/jquery.qtip.min.js') }}"></script>-->
<style>
	.simple-tooltip{margin-left: 5px;}
</style>
<script type="text/javascript">
	$(document).ready(function(){
	   Tipped.create('.simple-tooltip',
		{
			skin: 'blue',
			size: 'large',
		});
		/*$('.qtip-tooltip').qtip({ // Grab all elements with a non-blank data-tooltip attr.
			content: {
				attr: 'data-tooltip' // Tell qTip2 to look inside this attr for its content
			},
			style: 'cream' // Give it some style
		})*/
		$(".select2_single").select2({
			allowClear: true
		});
		$(document).on('click', '.select2', function () {
			$('.select2-search__field').attr('placeholder', '検索');
		});
	});

</script>
@endsection