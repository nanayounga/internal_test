@extends('master')

@section('title', '部署一覧')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">部署一覧</h1>
	<p>全{{$departments->count()}}件</p>
	</div>

	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">第1階層部署</div>
			<ul class="list-group">
				@foreach ($departments as $department)
					@if ($department->department_layer == 0)
						<li class="list-group-item"><a href="{{ url('department/show/'. $department->department_id) }}">{{$department->department_name}}</a></li>
					@endif
				@endforeach
			</ul>
		</div>
	</div>
	<!-- /.col-md-12 -->

	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">その他の部署</div>
			<ul class="list-group">
				@foreach ($departments as $department)
					@if ($department->department_layer != 0)
						<li class="list-group-item"><a href="{{ url('department/show/'. $department->department_id) }}">{{$department->department_name}}</a></li>
					@endif
				@endforeach
			</ul>
		</div>
	</div>
</div>

@endsection