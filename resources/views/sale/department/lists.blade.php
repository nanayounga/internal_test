@extends('master')

@section('title', '売上管理 部署一覧')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">売上管理 部署一覧</h1>
	</div>

	{{-- フラッシュメッセージの表示 --}}
	@if (Session::has('notice'))
		<div class="col-md-12">
			<div class="alert alert-success">{{ Session::get('notice') }}</div>
		</div>
	@endif

	<div class="col-md-4">
		<div class="list-group">
			@foreach ($sales_departments as $department)
				<a class="list-group-item" href="{{ url('sale/department/edit/'. $department->sales_department_id) }}">{{$department->sales_department_name}}</a>
			@endforeach
		</div>
	</div>


</div>
@endsection