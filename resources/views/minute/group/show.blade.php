@extends('master')

@section('title', 'グループ詳細')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">{{ $minutes_group->minutes_group_name }}</h1>
		@include('share/minutes_menu_link_blade')
	</div>
	<div class="col-md-12">
		{{-- フラッシュメッセージの表示 --}}
		@if (Session::has('notice'))
			<div class="alert alert-success">{{ Session::get('notice') }}</div>
		@endif
	</div>
	<!-- /.col-md-12 -->

	<div class="col-md-12">
		@if ($minutes_details->total() == 0)
			議事録が登録されていません。
		@else

		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>日付</th>
					<th>議題</th>
					<th>作成者</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($minutes_details as $detail)
				<tr>
					<td><a href="{{ url('minute/detail/show') }}/{{ $detail->minutes_detail_id }}" data-toggle="tooltip" data-placement="right" title="" data-html="true" data-original-title="{!! nl2br($detail->minutes_detail_agenda) !!}">{!! date('n月d日', strtotime($detail->minutes_detail_date)) !!}</a></td>
					<td>{!! nl2br($detail->minutes_detail_agenda) !!}</td>
					@if (empty($detail->user_id))
					<td>{{ $detail->minutes_detail_user_name }}</td>
					@else
					<td><a href="{{ url('user/show') }}/{{ $detail->user_id }}">{{ $detail->minutes_detail_user_name }}</a></td>
					@endif
				</tr>
				@endforeach
			</tbody>
		</table>

		@endif
	{!! $minutes_details->render() !!}
	</div>
	<!-- /.col-md-4 -->
</div>
<!-- /.row -->
@include('share/minute_user_modal')


@endsection