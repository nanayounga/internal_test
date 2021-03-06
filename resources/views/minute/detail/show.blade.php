@extends('master')

@section('title', '議事録詳細')

@section('content')
<div class="row minute_wrap">
	<div class="col-md-12">
		<h1 class="page-header">{{ $minutes_group->minutes_group_name }} 議事録詳細</h1>
		@include('share/minutes_menu_link_blade')
	</div>

	{{-- フラッシュメッセージの表示 --}}
	@if (Session::has('notice'))
	<div class="col-md-12">
		<div class="alert alert-success">{{ Session::get('notice') }}</div>
	</div>
	@endif
	<!-- /.col-md-12 -->

	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">議事録　{!! date('Y年m月d日', strtotime($minutes_detail->minutes_detail_date)) !!}</div>
			<div class="panel-body">
				<p class="col-md-12">{!! $minutes_detail->minutes_detail_text !!}</p>
			</div>
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-md-12 -->

	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">議題</div>
			<div class="panel-body">
				{!! nl2br($minutes_detail->minutes_detail_agenda) !!}
			</div>
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-md-12 -->

	<div class="col-md-12">
		<a href="{{ url('minute/detail/edit') }}/{{ $minutes_detail->minutes_detail_id }}" class="btn btn-primary">編集</a>
		<button class="btn btn-primary" id="delete_button">削除</button>
	</div>

	<br>
	
</div>
<!-- /.row -->

<div class="modal" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-show="true" data-keyboard="false" data-backdrop="static" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span><span class="sr-only">閉じる</span>
				</button>
				<h4 class="modal-title">議事録の削除</h4>
			</div><!-- /modal-header -->
			<div class="modal-body">
				<p class="recipient">この議事録を削除しますか？</p>
				<div class="alert  alert-danger">一度削除したら元に戻せません。</div>
			</div>
			<div class="modal-footer">
				<form action="{{ url('minute/detail/destroy') }}/{{ $minutes_detail->minutes_detail_id }}" method="post" autocomplete="off" class="form-horizontal form-label-left">
				<button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					<input type="submit" class="btn btn-primary" value="削除する" name="submit">
				</form>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div>

@include('share/minute_user_modal')

<script type="text/javascript">
$(document).on('click', '#delete_button', function() {
	$('#deleteModal').modal();
})
</script>

@endsection