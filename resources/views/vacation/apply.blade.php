    @extends('master')
     
    <!-- @section('title', 'ツールを残す') -->
     
    @section('content')
    <div class="row">
    	<div class="col-lg-12">
    		<h1 class="page-header">ツールを残す</h1>
    	</div>
    	<div class="col-lg-12">			 
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
										<div class="huge">{{$vacation_infor['number_vacation_day']}}</div>
									</div>
								</div>                             
							</div>
						</div>
					</div>
				</div>
    			<div class="panel panel-primary">
    				<div class="panel-heading">休暇を取る </div>
    				<div class="panel-body">                   
    					@if (session()->has('fail_message'))
    						<div class="alert alert-danger">
    							{{ session()->get('fail_message') }}
    						</div>
    					@endif
    					<form role="form" name="frm_apply_leave" action="{{route('vacation_apply_leave')}}" method="POST">                        
    						<div class="form-group col-lg-12">
    							<div class="col-lg-2">
    								<label>から:</label>
    							</div>
    							<div class="col-lg-9">
    								<div class="input-group date {{ $errors->has('vacation_date') ? ' has-error' : '' }}" id="datetimepicker_date">
    									<input class="form-control" type="text" name="vacation_date" value="{{old('vacation_date') }}">
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
    						<!--<div class="form-group col-lg-12">
    							<div class="col-lg-2">
    								<label>??:</label>
    							</div>
    							<div class="col-lg-9">
    								<div class="input-group date" id="datetimepicker_to">
    									<input class="form-control" type="text" name="leave_to">
    									<span class="input-group-addon">
    										<span class="glyphicon glyphicon-calendar">
    										</span>
    									</span>
    								</div> 
    							</div> 
    						</div>        -->                
    						<div class="form-group col-lg-12 {{ $errors->has('vacation_reason') ? ' has-error' : '' }}">
    							<div class="col-lg-2">
    								<label>コメント</label>
    							</div>
    							<div class="col-lg-9">
    								<textarea class="form-control" rows="4" name="vacation_reason">{{old('vacation_reason') }}</textarea>
    							</div>
    						</div>
     
    						<div class="form-group col-lg-12 {{ $errors->has('vacation_type') ? ' has-error' : '' }}">
    							<div class="col-lg-2">
    								<label>タイプ</label>
    							</div>
    							<div class="col-lg-9">
    								<input type="text" name="vacation_type" class="form-control" value="AL" readonly="readonly">
    							   <!-- <select class="form-control" name="vacation_type">
    									@foreach($vacation_types as $type)
    									<option value="{{$type}}" @if(old('vacation_type') == $type) selected @endif >{{$type}}</option>
    									@endforeach                                    
    								</select>-->
    							</div>
    						</div>
    						 <div class="form-group col-lg-12">
    							<div class="col-lg-offset-3">
    								<input type="hidden" name="_token" value="{{ csrf_token()}}">
    								<button type="submit" class="btn btn-outline btn-primary" name="submit">適用する</button>
    								<button type="reset" class="btn btn-outline btn-default">キャンセル</button>
    							</div>
    						</div>
    					</form>
    				</div>
    			</div>
    		</div> 
     
    		<div class="col-lg-6">
    			 
    			<div class="row">
    				<div class="col-md-12">
    					<div class="panel panel-primary">
    						<div class="panel-heading">
    							<h3 class="panel-title">有給の種類</h3>
    						</div>
    						<div class="panel-body">
								<div class="col-md-12">
									<span class="text-primary">
										<strong>※AL (Annual Leave)：年次有給休暇</strong>
									</span>
									<span class="text-warning">
										<ul>
											<li>基本的に5日間がある</li>
											<li>社員のレベルによってALの合計日数が違う</li>
										</ul>
										
									</span>
								</div>
								<div class="col-md-12">
									<span class="text-primary">
										<strong>※SL (Sick Leave)：病気休暇</strong>
									</span>
									<span class="text-warning">
										<ul>
											<li>医者の診療録がある場合：75％基本給与をもらう</li>
											<li>子供病気を面倒する場合：75％基本給与をもらう</li>
											<li>出産の場合（女性用、5～14日間）：100%基本給与をもらう</li>
											<li>妊産婦検診（女性用、5日間）：100%基本給与をもらう</li>
										</ul>
										
									</span>
								</div>
								<div class="col-md-12">
									<span class="text-primary">
										<strong>※PL (Personal Leave)：個人的な有給休暇</strong>
									</span>
									<span class="text-warning">
										<ul>
											<li>葬式：3日間</li>
											<li>結婚式：3日間</li>
											<li>月経期（女性用）：5日間連続で1日30分</li>
											<li>12か月以下の子供を育つ場合：1日1時間</li>
										</ul>
										
									</span>
								</div>
								<div class="col-md-12">
									<span class="text-primary">
										<strong>※CL (Compensatory Leave)：代休の休暇</strong>
									</span>
									<span class="text-warning">
										<ul>
											<li>休日に出勤する場合はその日の代わりに別の日に休める</li>
										</ul>
										
									</span>
								</div>
								<div class="col-md-12">
									<span class="text-primary">
										<strong>※UL (Unpaid Leave) ：無給休暇</strong>
									</span>
									<span class="text-warning">
										<ul>
											<li>本人の希望により申請する</li>
										</ul>
										
									</span>
								</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	<!-- /.col-lg-6 -->
    	</div>
    	<div class="col-lg-12">
    		<h2 class="page-header">歴史を残す</h2>
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
    					<button type="submit" class="btn btn-primary btn-outline btn-sm">Filter</button>
    				</form>
    			 </div>
    		</div>
     
    		<div class="panel panel-success">
    			@if (session()->has('success_message'))
    				<div class="alert alert-success">
    					{{ session()->get('success_message') }}
    				</div>
    			@endif
     
    			<table class="table table-striped table-bordered table-hover">
    				<thead>
    					<tr>
    						<th>No</th>
    						<th>Vacation Date</th>
    						<th>Comment</th>
    						<th>Type</th>
    						<th>Un/Approve by</th>
    						<th>Status</th>
    						<th>Action</th>
    					</tr>
    				</thead>
    				<tbody>
    					@foreach($vacations_history as $vacation)
    					<tr>
    						<td>{{ $vacation->vacation_id }}</td>
    						<td>{{ $vacation->vacation_date }}</td>                       
    						<td class="text-center">
    							@if($vacation['vacation_reason'] !='')
    							<span class="text-success simple-tooltip" title="{{$vacation['vacation_reason']}}"><i class="fa fa-comments fa-2x"></i></span>
    							@endif
    						</td>
    						<td>{{ $vacation->vacation_type }}</td>
    						<td>{{Util::get_user_name($vacation['vacation_confirm_by'])}}</td>
    						<td>
    							<?php $class = ($vacation['vacation_status'] == 'waitting')?'label-warning':(($vacation['vacation_status'] == 'approved')?'label-success':'label-danger');?>
    							<span class="label {{$class}}">{{$vacation['vacation_status']}}</span>                           
    						</td>
    						<td>
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
    			daysOfWeekDisabled: [0, 6],
    			 format: 'YYYY-MM-DD',
    		   //  locale: 'jp'
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

