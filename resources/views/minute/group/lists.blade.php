@extends('master')

@section('title', 'グループ一覧')

@section('content')
<script type="text/javascript">
	
$(window).unload(function(){});

</script>
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">グループ一覧</h1>
	</div>

	{{-- フラッシュメッセージの表示 --}}
	@if (Session::has('notice'))
		<div class="col-md-12">
			<div class="alert alert-success">{{ Session::get('notice') }}</div>
		</div>
	@endif

	<div class="col-md-5 clearfix" style="margin-bottom: 20px;">
		<input class="form-control" name="user_name" text="text" id="search_text" value="" maxlength="20" placeholder="グループ名を入力して検索" required="">
	</div>
	<div class="col-md-2" style="margin-bottom: 20px;">
		<button class="btn btn-primary search_btn">検索</button>
	</div>

	<div class="clearfix"></div>

	<div class="col-md-5 clearfix">
		<div class="list-group search_list"></div>
		<div class="loading"><i class="fa fa-spinner fa-spin"></i></div>
		<div class="alert alert-success" id="none">
			見つかりませんでした
		</div>
	</div>
	<!-- /.col-md-12 -->
	<input type="hidden" name="offset" value="0" id="offset">
</div>

<script type="text/javascript">
$(function() {
	// ブザウザバック用の対応
	// $('#offset')の値が前回開いた時の値になっていると
	// ブラウザバックで戻った時に途中から取得してしまうので値を0にする
	if ($('.search_list .value').length == 0) {
		$('#offset').val(0);
	}

	// グループのリストをajaxで取得
	get_search();
});

// 検索ボタン押下
$(document).on('click', '.search_btn', function() {
	$('#offset').val(0);
	$(".search_list").empty();
	$('#none').hide();
	// 検索内容の取得
	var str = $('#search_text').val();
	get_search(str);
});

// ページ最下部へのスクロールで結果を読み込み
$(window).on("scroll", function() {
	var scrollHeight = $(document).height();
	var scrollPosition = $(window).height() + $(window).scrollTop();
	if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
		if ($('.loading').css('display') == 'none' && $('#none').css('display') == 'none') {
			// 検索内容の取得
			var str = $('#search_text').val();
			get_search(str);
		}

	}
});

// グループリストをajaxで取得
function get_search($search_text=null) {
	var offset = $('#offset').val();
	// 検索結果なし
	var none = $('#none');
	// ローディング画像
	var loding = $('.loading');

	loding.show();

	$.ajax({
		url: '{{ url("minute/group/get_lists") }}',
		type: 'POST',
		data: {text: $search_text, offset: offset},
		// contentType: 'application/text',
		dataType: 'json',
	}).done(function(data) {
		// console.log(data)
		if ( data == 'none')
		{
			none.show();
			loding.hide();
		}
		else
		{
			none.hide();
			loding.hide();
			for (var i = 0; i < data.length; i++)
			{
				$('.search_list').append($('<a></a>')
					.attr('href','{{ url("minute/group/show/") }}/'+ data[i]["minutes_group_id"])
					.text(data[i]["minutes_group_name"])
					.addClass('list-group-item value')
				);
			};
		}
		// offsetをカウントアップ
		$('#offset').val(parseInt(offset) + parseInt(30));

	}).fail(function(data) {
		console.log(data);
	});
}
</script>

@endsection