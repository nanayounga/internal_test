@extends('master')

<!-- @section('title', 'ページタイトル') -->

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">給与変更履歴</h1>
	</div>
	<div class="col-lg-12">		
		<div class="panel panel-success">
			<div class="panel-body">
			@if (session()->has('success_message'))
				<div class="alert alert-success">
					{{ session()->get('success_message') }}
				</div>
			@endif
			
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th>No</th>
						<th>Type</th>
						<th>User Created</th>
						<th>Content</th>
						<th>Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($log_list as $log_every_list)
					<tr>
						<td>{{ $log_every_list->user_detail_log_id }}</td>
						<td>{{ $log_every_list->permission_type_name }}</td>
						<td><a href="{{ url('user_detail/edit/'. $log_every_list->user_id) }}">{{ $log_every_list->user_kanji_last_name }} {{ $log_every_list->user_kanji_first_name }}</a></td>
						<td>
							<table>
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
								<tr>
									<td>{!! $title . $log_detail; !!}</td>
								</tr>
								@endforeach
							</table>
						</td>
						<td>{{ $log_every_list->updated_at }}</td>
						<th>
							<a href="javascript:void(0);" class="btn btn-outline btn-danger btn-xs log-del" attr-id="{{$log_every_list->user_detail_log_id}}"><span>削除</span></a>
						</th>
					</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
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
					document.location = "/log/delete/" + user_detail_log_id;
				},
				cancel: function () {
					//$.alert('Canceled!');
				}
			}
		});
	}
</script>
@endsection