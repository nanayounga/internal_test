@extends('master')

@section('title', '権限リスト')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">権限リスト</h1>
	</div>
	<div class="col-lg-12">
		<ul class="nav nav-tabs">
			<li class="nav-item active">
				<a href="/permission/list" class="nav-link active">リスト</a>
			</li>
			<li class="nav-item">
				<a href="/permission/create" class="nav-link bg-default">追加する</a>
			</li>
		</ul>
		<br>
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
						<th>Permission type</th>
						<th>No</th>
						<th>Permission name</th>
						<th>Permission description</th>
						
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($permissions as $permission)
					<tr>
						<td>{{ $permission->permission_type_name }}</td>
						<td>{{ $permission->permission_id }}</td>
						<td>{{ $permission->permission_name }}</td>
						<td>{{ $permission->permission_description }}</td>
						<th>
							<a href="/permission/edit/{{$permission->permission_id}}" id="edit-permission-{{ $permission->permission_id }}" class="btn btn-outline btn-primary btn-xs"><span>Edit</span></a>
							<a href="javascript:void(0);" id="delete-permission-{{ $permission->permission_id }}" class="btn btn-outline btn-danger btn-xs perm-del" attr-id="{{$permission->permission_id}}"><span>Delete</span></a>
							<a href="javascript:void(0);" id="show-user-{{ $permission->permission_id }}" class="btn btn-outline btn-info btn-xs perm-users" attr-id="{{$permission->permission_id}}"><span>Show Users</span></a>
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

<!-- Modal-->
<div class="modal" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-show="true" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&#215;</span><span class="sr-only">閉じる</span>
				</button>
				<h4 class="modal-title">メンバー</h4>
			</div><!-- /modal-header -->
			<div class="modal-body">
				<table id="users_perm_table" class="table table-striped table-bordered table-hover" style="width: 100%">
					<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Department</th>
					</thead>
					<tbody id="users_perm_list">
						
					</tbody>
				</table>
				<div class="clearfix"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

<script type="text/javascript">
	var oTable = '';
	$(document).on('click', '.perm-users', function() {
		var id = $(this).attr('attr-id');
		if(id){			
			get_users_permission(id);
		}				
	})
	function get_users_permission(perm_id){
		$.ajax({
		method: "POST",
		url: "/users-permission",
		data: {perm_id: perm_id},
		beforeSend: function (xhr) {
			$.loader.open();
			$('.loading').show();
		}
		})
		.done(function (data) {
			if (data.status === 'ok') {
				var html = '';
				$.each(data.data, function( index, value ) {
					html +='<tr><td>'+value['user_id']+'</td><td><a href="{{ url("user/show/") }}/'+value['user_id']+'">'  +value['user_kanji_last_name']+value['user_kanji_first_name']+'</a></td><td>'+value['department_name']+'</td></tr>';
				});
				if(oTable !== ''){
					oTable.destroy();
				}
				$('#users_perm_list').html(html);
				oTable = $('#users_perm_table').DataTable({responsive: true});

				$('#staticModal').modal();					
			}				
		})
		.fail(function() {
			alert( "Some thing went wrong. Please refresh page!" );
		})
		.always(function() {
			setTimeout(function () {
					$.loader.close();
			}, 500);
		});
	}
</script>
<!-- End modal -->

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
            responsive: true,
            displayLength: 50,  
        });
		eventDelClick();
	});
	function eventDelClick(){
		$("#dataTables-example").on('click','.perm-del',function(){
			var id = $(this).attr('attr-id');
			if(id){
				delete_permission(id);
			}
		});
	}
	function delete_permission(perm_id){
		$.confirm({
			title: 'Confirm!',
			content: 'Are you sure?',
			buttons: {
				confirm: function () {
					document.location = "/permission/delete/"+perm_id;
				},
				cancel: function () {
					//$.alert('Canceled!');
				}
			}
		});
	}
</script>
@endsection