@extends('master')

<!-- @section('title', 'ページタイトル') -->

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">権限管理</h1>
	</div>
	<div class="col-lg-12">
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a href="/permission/list" class="nav-link bg-default">リスト</a>
			</li>
			<li class="nav-item">
				<a href="/permission/create" class="nav-link bg-default">追加する</a>
			</li>
		</ul>
		<br>
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
					<form role="form" name="frm_permission_edit" action="/permission/update/{{$permission->permission_id}}" method="POST">
						<div class="form-group col-lg-12 {{ $errors->has('permission_name') ? ' has-error' : '' }}">
							<div class="col-lg-2">
								<label>許可名</label>
							</div>
							<div class="col-lg-9">
								<input type="text" class="form-control" name="permission_name" value="{{old('permission_name')?old('permission_name'):$permission->permission_name}}" >
							</div>
						</div>
						<div class="form-group col-lg-12 {{ $errors->has('permission_description') ? ' has-error' : '' }}">
							<div class="col-lg-2">
								<label>説明</label>
							</div>
							<div class="col-lg-9">
								<textarea type="text" class="form-control" name="permission_description">{{ $permission->permission_description }}</textarea>
							</div>
						</div>
						<div class="form-group col-lg-12 {{ $errors->has('permission_type') ? ' has-error' : '' }}">
							<div class="col-lg-2">
								<label>許可タイプ</label>
							</div>
							<div class="col-lg-9">
								<?php $old_per_type = old('permission_type')?old('permission_type'):$permission->permission_type_id;?>
								<select name="permission_type" class="form-control" >
									<option value="">選択する...</option>
									@foreach($permission_types as $per_ty)
									<option value="{{$per_ty->permission_type_id}}" @if($per_ty->permission_type_id==$old_per_type) selected @endif>{{$per_ty->permission_type_name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						 <div class="form-group col-lg-12">
							<div class="col-lg-offset-3">
								<input type="hidden" name="_token" value="{{ csrf_token()}}">
								<button type="submit" class="btn btn-outline btn-primary">適用する</button>
								<a href="/permission/list" class="btn btn-outline btn-default">キャンセル</a>
							</div>
						</div>
					</form>
				</div>
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