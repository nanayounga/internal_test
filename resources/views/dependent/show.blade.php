@extends('master')

@section('title', '扶養家族')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">扶養家族</h1>
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
					<th>氏名（漢字)</th>
					<td>{{ $dependent['dependent_kanji_last_name'] }}  {{ $dependent['dependent_kanji_first_name'] }}</td>
				</tr>
				<tr>
					<th>氏名（フリガナ）</th>
					<td>{{ $dependent['dependent_kata_last_name'] }}  {{ $dependent['dependent_kata_first_name'] }}</td>
				</tr>
				<tr>
					<th>性別</th>
					<td>{{ $dependent['dependent_gender'] }}</td>
				</tr>
				<tr>
					<th>家族</th>
					<td>{{ $dependent['dependent_relative'] }}</td>
				</tr>
				<tr>
					<th>社会保険の扶養</th>
					<td>{{ $dependent['dependent_social'] }}</td>
				</tr>
				<tr>
					<th>税法上の扶養</th>
					<td>{{ $dependent['dependent_tax'] }}</td>
				</tr>				
				<tr>
					<th>生年月日</th>
					<td>{!! date('Y年m月d日', strtotime($dependent['dependent_birthday'])) !!}</td>
				</tr>
				<tr>
					<th>基礎年金番号</th>
					<td>{{ $dependent['dependent_retire_code'] }}</td>
				</tr>	
				<tr>
					<th>マイナンバー</th>
					<td>{{ $dependent['dependent_tel'] }}</td>
				</tr>
				<tr>
					<th>社会保険</th>
					<td>{{ $dependent['dependent_social_insurrance'] }}</td>
				</tr>
				<tr>
					<th>社会保険資格取得年月日</th>
					<td>{!! date('Y年m月d日', strtotime($dependent['dependent_insurance_join_date'])) !!}</td>
				</tr>
				<tr>
					<th>社会保険の記号</th>
					<td>{{ $dependent['dependent_insurance_card'] }}</td>
				</tr>
				<tr>
					<th>社会保険の番号</th>
					<td>{{ $dependent['dependent_social_insurance_number'] }}</td>
				</tr>
				<tr>
					<th>住所</th>
					<td>{{ $dependent['dependent_address'] }}</td>
				</tr>
				<tr>
					<th>郵便番号</th>
					<td>{{ $dependent['dependent_post_code'] }}</td>
				</tr>
				<tr>
					<th>住所</th>
					<td>{{ $dependent['dependent_post_address'] }}</td>
				</tr>				
			</table>
		</div>
		<!-- /.panel -->
		<!-- <button class="btn btn-primary" id="delete_button">削除</button> -->
	</div>
	<!-- /.col-md-12 -->
	<hr>

	<div class="col-lg-6">
		<div class="panel">
		<input type="button" class="btn btn-primary" value="編集" name="edit" onclick='window.location.href="{{ url('/dependent/edit/'.$dependent['dependent_id']) }}";'>
		<input type="button" class="btn btn-primary" value="バック" name="back" onclick='window.location.href="{{ url('/user_detail/edit/'.$dependent['user_id']) }}";'>
		</div>
	</div>
	<br>
</div>
<!-- /.row -->
@endsection