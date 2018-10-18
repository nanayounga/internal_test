@extends('master')

@section('title', '社員詳細')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">部署詳細</h1>
	</div>

	<div class="col-md-12">
		{{-- フラッシュメッセージの表示 --}}
		@if (Session::has('notice'))
			<div class="alert alert-success">{{ Session::get('notice') }}</div>
		@endif
	</div>

	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">基本情報</div>
			<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<td>{{ $department['department_id'] }}</td>
				</tr>
				<tr>
					<th>部署名</th>
					<td>{{ $department['department_name'] }}</td>
				</tr>
				<tr>
					<th>所属人数</th>
					<td>{!! count($users) !!}人</td>
				</tr>
				<tr>
					<th>作成日時</th>
					<td>{!! date('Y年m月d日', strtotime($department['created_at'])) !!}</td>
				</tr>
			</table>
		</div>
		<div class="">
			<a href="{{ url('department/edit/') }}/{{ $department['department_id'] }}" class="btn btn-primary">編集</a>
			<button class="btn btn-primary" id="delete_button">削除</button>
			<!-- {{ url('department/delete/') }}/{{ $department['department_id'] }} -->
		</div>
		<br>
		<!-- /.panel -->
	</div>
	<!-- /.col-md-6 -->

	<div class="modal" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-show="true" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&#215;</span><span class="sr-only">閉じる</span>
					</button>
					<h4 class="modal-title">部署の削除</h4>
				</div><!-- /modal-header -->
				<div class="modal-body">
					<p class="recipient">{{ $department['department_name'] }}を削除しますか？</p>
					<div class="alert alert-success">
						一度削除を行うと戻す事は出来ません。<br>
						この部署に設定されている社員は部署を再設定してください。
					</div>
				</div>
				<div class="modal-footer">
					<form action="{{url('department/destroy'). '/'. $department['department_id']}}" method="post" autocomplete="off" class="form-horizontal form-label-left">
					<button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
						<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
						<input type="submit" class="btn btn-primary" value="削除する" name="submit">
					</form>
				</div>
			</div> <!-- /.modal-content -->
		</div> <!-- /.modal-dialog -->
	</div> <!-- /.modal -->

	<div class="col-md-6">
		<div class="panel panel-default match_table">
			<div class="panel-heading">関連部署</div>
			<?php if (count($department_parent) > 1): ?>
			<ul class="list-group">
				<?php $layer = $department_parent[0]['department_layer']; ?>
				<?php $dir_lebel_num = 0; ?>

				@foreach ($department_parent as $parent)
					<?php $class_active = ''; ?>
					@if ($department['department_id'] == $parent['department_id'])
						<?php $class_active = 'disabled'; ?>
					@endif

					@if ($layer != $parent['department_layer'])
						<?php $dir_lebel_num++; ?>
					@endif

					<li class="{{ $class_active }} dir_lebel{{ $dir_lebel_num }} list-group-item"><a href="{{ url('department/show/'. $parent['department_id']) }}">{{ $parent['department_name']}}</a></li>

					<?php $layer = $parent['department_layer']; ?>
				@endforeach
			</ul>
			<?php else: ?>
				<div class="panel-body">ー</div>
			<?php endif; ?>
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-md-6 -->

	<div class="col-md-12">
		<h2 class="page-header">所属社員一覧</h2>
		<p>全{{ $users->count() }}件</p>
		@if ($users->count() != 0)
		<div class="panel panel-default">
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
		</div>
		<!-- /.panel -->
		@endif
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

	$(document).on('click', '#delete_button', function() {
		$('#staticModal').modal();
	})
	
</script>
@endsection