@extends('master')

@section('title', '社員一覧')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">社員一覧</h1>
	</div>

	<div class="col-md-12">
		{{-- フラッシュメッセージの表示 --}}
		@if (Session::has('notice'))
			<div class="alert alert-success">{{ Session::get('notice') }}</div>
		@endif

		<p>全{{$users->total()}}件</p>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>社員名</th>
					<th>Email</th>
					<th>所属部署</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($users as $user)
					<tr>
						<td><a href="{{ url('user/show/'. $user->user_id) }}">{{$user->user_kanji_last_name}} {{$user->user_kanji_first_name}}</a></td>
						<td>{{$user->user_email}}</td>
						<td><a href="{{ url('department/show/'. $user->department_id) }}">{{$user->department_name}}</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $users->render() !!}
	</div>
	<!-- /.col-md-12 -->
</div>

@endsection