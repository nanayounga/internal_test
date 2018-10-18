@extends('master')

<!-- @section('title', 'ページタイトル') -->

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">ツールを残す</h1>
	</div>
	<div class="col-lg-12">
		<div class="col-lg-6">
			<div class="panel panel-primary">
				<div class="panel-heading">休暇を取る </div>
				<div class="panel-body">                   
					@if (session()->has('fail_message'))
						<div class="alert alert-danger">
							{{ session()->get('fail_message') }}
						</div>
					@endif                  
					<form role="form" name="frm_edit" action="{{route('vacation_update',['id'=>$vacation->vacation_id])}}" method="POST">                                        
						<div class="form-group col-lg-12">
							<div class="col-lg-2">
								<label>から:</label>
							</div>
							<div class="col-lg-9">
								<div class="input-group date {{ $errors->has('vacation_date') ? ' has-error' : '' }}" id="datetimepicker_date">
									<input class="form-control" type="text" name="vacation_date" value="{{old('vacation_date')?old('vacation_date'):$vacation->vacation_date }}">
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
							<!--<p class="help-block">Example block-level help text here.</p>-->
						</div>                                    
						<div class="form-group col-lg-12 {{ $errors->has('vacation_reason') ? ' has-error' : '' }}">
							<div class="col-lg-2">
								<label>コメント</label>
							</div>
							<div class="col-lg-9">
								<textarea class="form-control" rows="3" name="vacation_reason">{{old('vacation_reason')?old('vacation_reason'):$vacation->vacation_reason }}</textarea>
							</div>
						</div>

						<div class="form-group col-lg-12 {{ $errors->has('vacation_type') ? ' has-error' : '' }}">
							<div class="col-lg-2">
								<label>タイプ</label>
							</div>
							<div class="col-lg-9">
							   <input type="text" name="vacation_type" class="form-control" value="{{$vacation->vacation_type }}" readonly="readonly">
							</div>
						</div>
						<div class="form-group col-lg-12 {{ $errors->has('vacation_type') ? ' has-error' : '' }}">
							<div class="col-lg-2">
								<label>休暇の状態</label>
							</div>
							<div class="col-lg-9">
								<select class="form-control" name="vacation_status">
									@foreach($vacation_status as $key => $status)
									<option value="{{$key}}" @if($vacation->vacation_status == $key) selected @endif >{{$status}}</option>
									@endforeach                                    
								</select>
							</div>
						</div>
						 <div class="form-group col-lg-12">
							<div class="col-lg-offset-3">
								<input type="hidden" name="_token" value="{{ csrf_token()}}">
								<button type="submit" class="btn btn-outline btn-primary" name="submit">適用する</button>
								<a href="{{ route('uses_vacation_history_admin') }}"class="btn btn-outline btn-default" id="edit_vacation_cancel">Cancel</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div> 

		<div class="col-lg-6">
			<div class="row">
				<div class="col-lg-4">
					<div class="panel panel-success">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-12 text-center">
									 トータルオフ日付
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
									承認待ちの総日数
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
									休暇の合計日数
								</div>
								<div class="col-xs-12 text-center">
									<div class="huge">5</div>
								</div>
							</div>                             
						</div>
					</div>
				</div>
			</div>            
		</div>
	<!-- /.col-lg-6 -->
	</div>    
	<!-- /.col-lg-12 -->
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#datetimepicker_date').datetimepicker({
			daysOfWeekDisabled: [0, 6],
			 format: 'YYYY-MM-DD',
		   //  locale: 'jp'
		});
	});

</script>
@endsection