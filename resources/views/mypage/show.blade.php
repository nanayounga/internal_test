@extends('master')

@section('title', '登録情報')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">登録情報</h1>
	</div>

	<div class="col-md-12">
			{{-- フラッシュメッセージの表示 --}}
			@if (Session::has('notice'))
				<div class="alert alert-success">{{ Session::get('notice') }}</div>
			@endif
			
		<div class="panel panel-default">
			<div class="panel-heading">基本情報</div>
			<table class="table table-bordered">
				<tr>
					<th>社員ID</th>
					<td>{{ $user->user_id }}</td>
				</tr>
				<tr>
					<th>社員名</th>
					<td>{{ $user->user_kanji_last_name }} {{ $user->user_kanji_first_name }}</td>
				</tr>
				<tr>
					<th>Email</th>
					<td>{{ $user->user_email }}</td>
				</tr>
				<tr>
					<th>所属部署</th>
					<td><a href="{{ url('department/show/'. $user->department_id) }}">{{ $user->department_name }}</a></td>
				</tr>
				<tr>
					<th>登録日時</th>
					<td>{!! date('Y年m月d日', strtotime($user->created_at)) !!}</td>
				</tr>
			</table>
		</div>
		<!-- /.panel -->
		<a href="{{ url('mypage/edit/')}}" class="btn btn-primary center-text">登録情報の編集</a><br>
	</div>
	<!-- /.col-md-12 -->
</div>
<!-- /.row -->


</div>
<script src="{{ asset('select2-4.0.3/dist/js/select2.min.js') }}"></script>
<link href="{{ asset('select2-4.0.3/dist/css/select2.min.css') }}" rel="stylesheet">
<script type="text/javascript">
	$(".select2_single").select2({
		allowClear: true
	});
</script>
@endsection