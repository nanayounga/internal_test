@extends('master')

<!-- @section('title', 'ページタイトル') -->

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">権限管理</h1>
	</div>
	<div class="col-lg-12">
		<ul class="nav nav-tabs">
			<li class="nav-item active">
				<a href="/permission-type/list" class="nav-link active">リスト</a>
			</li>
			<li class="nav-item">
				<a href="/permission-type/create" class="nav-link bg-default">追加する</a>
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
						<th>No</th>
						<th>Name</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($permission_types as $permission_type)
					<tr>
						<td>{{ $permission_type->permission_type_id }}</td>
						<td>{{ $permission_type->permission_type_name }}</td>                       
						<th>
							<a href="/permission-type/edit/{{$permission_type->permission_type_id}}" id="edit-permtype-{{ $permission_type->permission_type_id }}" class="btn btn-outline btn-primary btn-xs"><span>Edit</span></a>
							<a href="javascript:void(0);" id="delete-permtype-{{ $permission_type->permission_type_id }}" class="btn btn-outline btn-danger btn-xs perm-type-del" attr-id="{{$permission_type->permission_type_id}}"><span>Delete</span></a>
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
            responsive: true
        });
		$("#dataTables-example").on('click','.perm-type-del',function(){
			var id = $(this).attr('attr-id');
			if(id){
				delete_permission_type(id);
			}
		});
	});
	function delete_permission_type(perm_type_id){
		$.confirm({
			title: 'Confirm!',
			content: 'Are you sure?',
			buttons: {
				confirm: function () {
					document.location = "/permission-type/delete/"+perm_type_id;
				},
				cancel: function () {
					//$.alert('Canceled!');
				}
			}
		});
	}
</script>
@endsection