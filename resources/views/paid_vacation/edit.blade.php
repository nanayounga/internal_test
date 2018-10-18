@extends('master')

@section('title', '有給申請の編集')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">有給申請の編集</h1>
	</div>
	<div class="col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">{{$user->user_kanji_last_name}} {{$user->user_kanji_first_name}}</div>
			<div class="panel-body">
				@if (session()->has('fail_message'))
					<div class="alert alert-danger">
						{{ session()->get('fail_message') }}
					</div>
				@endif
				<form role="form" class="form-horizontal form-label-left" name="frm_edit" action="{{route('vacation_update',['id'=>$vacation->vacation_id])}}" method="POST">
					<div class="form-group">
						<div class="control-label col-md-3">
							<label>日時</label>
						</div>
						<div class="col-md-8">
							<div class="input-group date {{ $errors->has('vacation_date') ? ' has-error' : '' }}" >
								<input id="datetimepicker_date" class="form-control" type="text" name="vacation_date" value="{{old('vacation_date')?old('vacation_date'):$vacation->vacation_date }}">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar">
									</span>
								</span>
							</div>

							@if ($errors->has('vacation_date'))
								<span class="text-danger">
									<strong>{{ $errors->first('vacation_date') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="form-group {{ $errors->has('vacation_reason') ? ' has-error' : '' }}">
						<div class="control-label col-md-3">
							<label>コメント</label>
						</div>
						<div class="col-md-8">
							<textarea class="form-control" rows="3" name="vacation_reason">{{old('vacation_reason')?old('vacation_reason'):$vacation->vacation_reason }}</textarea>
						</div>
					</div>

					<!--<div class="form-group {{ $errors->has('vacation_type') ? ' has-error' : '' }}">
						<div class="control-label col-md-3">
							<label>タイプ</label>
						</div>
						<div class="col-md-8">
						   <input type="text" name="vacation_type" class="form-control" value="{{$vacation->vacation_type }}" readonly="readonly">
						</div>
					</div>-->

					<div class="form-group {{ $errors->has('vacation_status') ? ' has-error' : '' }}">
						<div class="control-label col-md-3">
							<label>ステータス

							<?php
								$class_arr = array('waitting' => 'label-warning', 'approved' => 'label-success', 'temp_approved' => 'label-success', 'unapproved' => 'label-danger', 'cancel' => 'label-info');
							?>
							(<span class="label {{$class_arr[$vacation->vacation_status]}}" >{{$vacation_status[$vacation->vacation_status]}}</span>)
							</label>
						</div>
						<div class="col-md-8">

							@if($vacation['vacation_status'] != 'cancel')
							<?php
								$edit_per = Util::check_permission('edit_vacation');
								$edit_temp_per = Util::check_permission('edit_temp_vacation');
							?>
							<select class="form-control" name="vacation_status">
							  <option value="">Select...</option>
								@if($edit_temp_per)
								<?php $hide_class = (($vacation['vacation_status'] != 'waitting') AND ($vacation['vacation_status'] != 'unapproved'))?'disabled':''; ?>
								<option value="temp_approved" {{$hide_class}}><span>仮承認</span></a>
								@endif
								@if($edit_per)
								<option  value="approved" @if($vacation['vacation_status'] == 'approved') {{'disabled'}} @endif><span>承認</span></a>
								@endif
								@if($edit_per)
								<option value="unapproved" @if($vacation['vacation_status'] == 'unapproved') {{'disabled'}} @endif><span>非承認</span></a>
								@else
								<?php $hide_class = (($vacation['vacation_status'] == 'unapproved') || ($vacation['vacation_status'] == 'approved'))?'disabled':''; ?>
								<option value="unapproved" {{$hide_class}}><span>非承認</span></a>
								@endif
							</select>
							@endif
						</div>
					</div>
					<div class="form-group {{ $errors->has('vacation_type') ? ' has-error' : '' }}">
						<div class="col-md-3">
							<label></label>
						</div>
						<div class="col-md-8">
							<input type="hidden" name="vacation_type" value="AL">
							<input type="hidden" name="_token" value="{{ csrf_token()}}">
							<button type="submit" class="btn btn-outline btn-primary" name="submit">適用する</button>
							<a href="{{ route('uses_vacation_history_admin') }}"class="btn btn-outline btn-default" id="edit_vacation_cancel">Cancel</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="row">
			<div class="col-md-4">
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
			<div class="col-md-4">
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
			<div class="col-md-4">
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

</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#datetimepicker_date').datetimepicker({
			daysOfWeekDisabled: [0, 6],
			format: 'YYYY-MM-DD',
			locale: 'ja'
		});
	});

</script>
@endsection