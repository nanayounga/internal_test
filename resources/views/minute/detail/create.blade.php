@extends('master')

@section('title', 'グループ追加')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">{{ $minutes_group->minutes_group_name }}へ議事録追加</h1>
		@include('share/minutes_menu_link_blade')
	</div>

	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">グループ情報の入力</div>
			<div class="panel-body">
				<form action="{{url('minute/detail/store')}}/{{ $minutes_group->minutes_group_id }}" method="post" autocomplete="off" class="form-horizontal form-label-left">

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

				<div class="form-group {{ $errors->has('minutes_detail_date') ? 'has-error' : '' }}">
					<label class="control-label col-md-2">開催日 <span class="required">[必須]</span></label>
					<div class="col-md-3">
						<div class="input-group">
							<input type="text" class="form-control datetime" name="minutes_detail_date">
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
						</div>
						@if($errors->has('minutes_detail_date'))
							<p class="help-block">{{ $errors->first('minutes_detail_date') }}</p>
						@endif
					</div>
				</div>

				<div class="form-group {{ $errors->has('minutes_detail_agenda') ? 'has-error' : '' }}">
					<label class="control-label col-md-2">議題</label>
					<div class="col-md-8">
						<textarea class="form-control" name="minutes_detail_agenda" placeholder="" rows=7>{{ old('minutes_detail_agenda') }}</textarea>
						@if($errors->has('minutes_detail_agenda'))
							<p class="help-block">{{ $errors->first('minutes_detail_agenda') }}</p>
						@endif
					</div>
				</div>
				
				<div class="form-group {{ $errors->has('minutes_detail_text') ? 'has-error' : '' }}">
					<label class="control-label col-md-2">議事録 <span class="required">[必須]</span></label>
					<div class="col-md-8">
						<textarea id="editor" name="content" class="form-control" placeholder="" rows=20>{{ old('minutes_detail_text') }}</textarea>
						@if($errors->has('minutes_detail_text'))
							<p class="help-block">{{ $errors->first('minutes_detail_text') }}</p>
						@endif
						<input type="hidden" name="minutes_detail_text" id="minutes_detail_text">
					</div>
				</div>

				<hr>
				<div class="form-group">
					<div class="col-md-6 col-md-offset-2">
						<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
						<input type="submit" class="btn btn-primary" value="追加" name="submit">
						<input type="password" name="dummypass" style="visibility: hidden; top: -100px; left: -100px;" />
					</div>
				</div>
				</form>
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-md-12 -->
</div>
<!-- /.row -->
@include('share/minute_user_modal')

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<!-- datetimepicker -->
<script src="{{ asset('js/moment.js') }}"></script>
<script src="{{ asset('bootstrap-datetimepicker/moment-with-locales.js') }}"></script>
<link href="{{ asset('bootstrap-datetimepicker/bootstrap-datetimepicker.css') }}" rel="stylesheet">
<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/v4.0.0/src/js/bootstrap-datetimepicker.js"></script>

<script type="text/javascript">
$(function() {
	// エディタへの設定を適用する
	CKEDITOR.replace('editor', {
		// uiColor: '#EEEEEE',
		height: 400,
		// ツールバーを下にする
		toolbarLocation: 'bottom',
	});

	$('.datetime').datetimepicker({
		locale: 'ja',
		format : 'YYYY-MM-DD HH:mm',
	});
});

$('form').submit(function(e) {
	var desc = CKEDITOR.instances['editor'].getData();
	$('input#minutes_detail_text').val(desc);
});
</script>

@endsection