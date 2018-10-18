@extends('master')

@section('title', '権限編集')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">権限編集</h1>
	</div>

	<div class="col-md-12">
		@include('share/user_tab_menu')

		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		{{-- フラッシュメッセージの表示 --}}
		@if (Session::has('notice'))
			<div class="alert alert-success">{{ Session::get('notice') }}</div>
		@endif

		<div class=" alert alert-warning">
			ユーザーのアクセス許可を慎重に更新してください。
		</div>

		<form action="{{url('user/update_permission'). '/'. $user->user_id}}" method="post" class="" autocomplete="off">
		<div class="panel panel-default tab-content">
			<div class="panel-heading">{{ $user->user_kanji_last_name }} {{ $user->user_kanji_first_name }}</div>
			<table class="table table-bordered">
				<form action="{{url('user/update_permission'). '/'. $user->user_id}}" method="post" class="" autocomplete="off">
				<tbody>
				@foreach($permissions as $key => $permission)
				<tr>
					<th>{{$permission_types[$key]}}</th>
					<td>
					@foreach($permission as $per)
					<label class="checkbox-inline">
						<input type="checkbox" name="permissions[]" value="{{$per['id']}}" @if(in_array($per['id'],$permissions_of_user)) checked @endif>{{$per['name']}}
					</label>
					&nbsp;
					@endforeach
					</td>
				</tr>
				@endforeach
				</tbody>
			</table>
		</div>
		<!-- /.panel -->
			
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="submit" class="btn btn-primary" value="編集" name="submit">
		</form>
	</div>
	<!-- /.col-md-12 -->
</div>
<!-- /.row -->


@endsection