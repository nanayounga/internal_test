@extends('master')

@section('title', '給与額詳細')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">給与額詳細</h1>
	</div>

	<div class="col-lg-12">
		{{-- フラッシュメッセージの表示 --}}
		@if (Session::has('notice'))
			<div class="alert alert-success">{{ Session::get('notice') }}</div>
		@endif

		@include('share/user_tab_menu')

		<div class="panel panel-default tab-content">
			<div class="panel-heading">基本情報</div>
			<table class="table table-bordered">
				<tr>
					<th>会員ID</th>
					<td>{{ $salary['user_id'] }}</td>
				</tr>
				<tr>
					<th>会員名</th>
					<td>{{ $salary['user_kanji_last_name'] }} {{ $salary['user_kanji_first_name'] }}</td>
				</tr>
				<tr>
					<th>Email</th>
					<td>{{ $salary['user_email'] }}</td>
				</tr>				
				<tr>
					<th>基本給</th>
					<td>{{ $salary['salary_basic'] }}</td>
				</tr>
				<tr>
					<th>役職手当</th>
					<td>{{ $salary['salary_allowance'] }}</td>
				</tr>
				<tr>
					<th>家族（子供）手当</th>
					<td>{{ $salary['salary_child_allowance'] }}</td>
				</tr>
				<tr>
					<th>通勤手当</th>
					<td>{{ $salary['salary_trans_allowance'] }}</td>
				</tr>
				<tr>
					<th>その他</th>
					<td>{{ $salary['salary_others'] }}</td>
				</tr>
			</table>
		</div>

		<div class="panel-default">
			<input type="hidden" name="user_id" value="{{ $salary['user_id'] }}">
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<input type="button" class="btn btn-primary" value="給与の編集" name="edit" onclick='window.location.href="{{ url('/salary/edit/'.$salary['user_id']) }}";'>
			<input type="password" name="dummypass" style="visibility: hidden; top: -100px; left: -100px;" />
		</div>

		<br>

		@if (isset($log_list[0]))
		<h2 class="page-header">給与変更履歴</h1>

		<div class="panel panel-default">
			<div class="panel-body">
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th>User Created</th>
						<th>Content</th>
						<th>Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($log_list as $log_every_list)
					<tr>
						<td><a href="{{ url('user_detail/edit/'. $log_every_list->user_id) }}">{{ $log_every_list->user_kanji_last_name }} {{ $log_every_list->user_kanji_first_name }}</a></td>
						<td>
							@foreach ($log_every_list->user_detail_log_content as $field=>$log_detail)	
							<?php $title = ''; ?>
							@if ($field == "salary_basic_old")
								<?php $title = "変更前の基本給: "; ?>
							@elseif ($field == "salary_basic")
								<?php $title = "変更後の基本給: "; ?>
							@elseif ($field == "salary_allowance_old")
								<?php $title = "変更前の役職手当: "; ?>
							@elseif ($field == "salary_allowance")
								<?php $title = "変更後の役職手当: "; ?>
							@elseif ($field == "salary_child_allowance_old")
								<?php $title = "変更前の家族（子供）手当: "; ?>
							@elseif ($field == "salary_child_allowance")
								<?php $title = "変更後の家族（子供）手当: "; ?>
							@elseif ($field == "salary_trans_allowance_old")
								<?php $title = "変更前の通勤手当: "; ?>
							@elseif ($field == "salary_trans_allowance")
								<?php $title = "変更後の通勤手当: "; ?>
							@elseif ($field == "salary_others_old")
								<?php $title = "変更前のその他: "; ?>
							@elseif ($field == "salary_others")
								<?php $title = "変更後のその他: "; ?>	
							@elseif ($field == "user_id")
								<?php $title = "会員: "; ?>
							@endif

							{!! $title . $log_detail; !!}<br>
							@endforeach
						</td>
						<td>{{ date('Y年m月n日 H:i', strtotime($log_every_list->updated_at) ) }}</td>
						<th>
							<a href="javascript:void(0);" class="btn btn-outline btn-danger btn-xs log-del" attr-id="{{$log_every_list->user_detail_log_id}}"><span>削除</span></a>
						</th>
					</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
		@endif
		<!-- /.panel -->		
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<!-- DataTables CSS -->
<link href="{{ asset('sb-admin-2/vendor/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">
<!-- DataTables Responsive CSS -->
<link href="{{ asset('sb-admin-2/vendor/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">
 <!-- DataTables JavaScript -->
<script src="{{ asset('sb-admin-2/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('sb-admin-2/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('sb-admin-2/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>
<link href="{{ asset('jquery-confirm/jquery-confirm.min.css') }}" rel="stylesheet">
<script src="{{ asset('jquery-confirm/jquery-confirm.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#dataTables-example').DataTable({
			order: [],
            responsive: true
        });
		$("#dataTables-example").on('click','.log-del',function(){
			var id = $(this).attr('attr-id');
			if(id){
				delete_log(id);
			}
		});
	});
	function delete_log(user_detail_log_id){
		$.confirm({
			title: 'Confirm!',
			content: 'Are you sure?',
			buttons: {
				confirm: function () {
					document.location = "/salary/log/delete/" + user_detail_log_id;
				},
				cancel: function () {
					//$.alert('Canceled!');
				}
			}
		});
	}
</script>
@endsection