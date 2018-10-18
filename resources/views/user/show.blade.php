@extends('master')

@section('title', '社員詳細')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">社員詳細</h1>
	</div>

	<div class="col-md-12">
		{{-- フラッシュメッセージの表示 --}}
		@if (Session::has('notice'))
			<div class="alert alert-success">{{ Session::get('notice') }}</div>
		@endif

		@include('share/user_tab_menu')

		<div class="panel panel-default tab-content">
			<div class="panel-heading">基本情報</div>
			<table class="table table-bordered">
				<tr>
					<th>社員ID</th>
					<td>{{ $user->user_id }}</td>
				</tr>
				<tr>
					<th>社員名（漢字）</th>
					<td>{{ $user->user_kanji_last_name }} {{ $user->user_kanji_first_name }}</td>
				</tr>
				<tr>
					<th>社員名（カタカナ）</th>
					<td>{{ $user->user_kata_last_name }} {{ $user->user_kata_first_name }}</td>
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
					<th>役職名</th>
					<td>{{ $user->detail_position }}</td>
				</tr>
				<tr>
					<th>入社日</th>
					<td>
						@if ($user->detail_enter_company_date != '0000-00-00')
							{!! date('Y年m月d日', strtotime($user->detail_enter_company_date)) !!}
						@else
							未設定
						@endif
					</td>
				</tr>
			</table>
		</div>
		<!-- /.panel -->
		<!-- <button class="btn btn-primary" id="delete_button">削除</button> -->
	</div>
	<!-- /.col-md-12 -->
</div>
<!-- /.row -->

@endsection