@extends('master')

@section('title', 'グループ追加')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">議事録グループ追加</h1>
	</div>

	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">グループ情報の入力</div>
			<div class="panel-body">
				<form action="{{url('minute/group/create')}}" method="post" autocomplete="off" class="form-horizontal form-label-left">

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
				
				<div class="form-group {{ $errors->has('minutes_group_name') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">グループ名 <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<input class="form-control" name="minutes_group_name" text="text" value="{{ old('minutes_group_name') }}" maxlength="20" placeholder="グループのタイトル名を入力" required>
						@if($errors->has('minutes_group_name'))
							<p class="help-block">{{ $errors->first('minutes_group_name') }}</p>
						@endif
					</div>
				</div>

				<div class="form-group {{ $errors->has('minutes_group_desc') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">概要 <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<textarea class="form-control" name="minutes_group_desc" placeholder="グループの概要">{{ old('minutes_group_desc') }}</textarea>
						@if($errors->has('minutes_group_desc'))
							<p class="help-block">{{ $errors->first('minutes_group_desc') }}</p>
						@endif
					</div>
				</div>

				<div class="form-group {{ $errors->has('minutes_user_id') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">メンバーの選択 <span class="required">[必須]</span></label>
					<div class="col-md-6 search_box">
						<input class="form-control search_input" type="text" name="" value="" placeholder="メンバーを検索">
						<div class="search_list_box">
							<div class="checkbox all_check">
								<label><input type="checkbox">全て選択</label>
							</div>
							@foreach ($users as $key => $user)
								<div class="checkbox check_{{$user->user_id}} search_list">
									<label><input type="checkbox" value="{{$user->user_id}}" name="minutes_user_id[{{ $key }}]" @if(old("minutes_user_id.{$key}") == $user->user_id) checked  @endif><span class="value" data-user-id="{{$user->user_id}}">{{$user->user_kanji_last_name}} {{$user->user_kanji_first_name}}</span></label>
								</div>
							@endforeach
						</div>
						@if($errors->has('minutes_user_id'))
							<p class="help-block">{{ $errors->first('minutes_user_id') }}</p>
						@endif
					</div>

				</div>
				<hr>
				<div class="form-group">
					<div class="col-md-6 col-md-offset-3">
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


</div>

<script type="text/javascript">

// テキスト入力エリアをクリック時にメンバー検索のチェックボックスリストを表示。他エリアの時は非表示に。
// メンバーが既に選ばれていたら、placeholderを"選択済み"に書き換え
$(document).click(function(event) {
	var search_list_box = $('.search_list_box');

	if(! $(event.target).closest('.search_box').length) { // .search_box以外の部分を押下
		if (! search_list_box.is(':hidden')) search_list_box.hide();

		// placeholderを書き換え
		var checked = $('.search_list').find("input[type='checkbox']:checked");
		if (checked.length != 0) {
			$('.search_input').attr('placeholder','選択済み');
		} else {
			$('.search_input').attr('placeholder','メンバーを検索');
		}
	}
	else
	{
		if (search_list_box.is(':hidden')) search_list_box.show();
	}
});

// メンバー検索
// リアルタイムに社員名を入力値から検索
// 完全一致ではなく一致する部分があれば全て表示させる 
$(document).on('keyup', '.search_input', function() {
	var search_text = $(this).val();
	var target = $('.value:contains(' + search_text + ')');
	var all_check = $('.all_check');

	// 一旦全てのリストを非表示にして一致するリストのみを、この後の処理で表示する
	$('.search_list').hide();

	// 一致するリストがあれば全て検索ボタンを表示、なければ非表示
	if (target.length == 0) {
		all_check.hide();
	} else {
		all_check.show();
	}

	target.each(function() {
		var user_id = $(this).data('user-id');
		$('.check_' + user_id).show();
		// "全て選択する"のチェックを外す
		all_check.find('input').prop('checked', false);
	});
});

// メンバー検索
// 全て選択をクリック押下時に、表示中のチェックボックス全てにチェックを入れる
$(document).on('click', '.all_check', function() {
	if ($(this).find('input').is(':checked')) {
		$(this).parent().find('input').prop('checked', false);
	} else {
		var child = $(this).parent().children();
		child.each(function() {
			if (! $(this).is(':hidden') ) {
				$(this).find('input').prop('checked', true);
			}
		});
	}
});

$(function(){
	// validationに引っかかった時に既にメンバーが選択されていた場合、placeholderを"選択済み"に変更
	var checked = $('.search_list').find("input[type='checkbox']:checked");
	if (checked.length != 0) $('.search_input').attr('placeholder','選択済み');
});

</script>

@endsection