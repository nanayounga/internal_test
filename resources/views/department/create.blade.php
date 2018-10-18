@extends('master')

<!-- @section('title', 'ページタイトル') -->

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">部署追加</h1>
	</div>

	<form action="{{url('department/create')}}" method="post" autocomplete="off" class="form-horizontal form-label-left">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">部署情報の入力</div>
			<div class="panel-body">
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

				<div class="form-group {{ $errors->has('department_name') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">部署名 <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<input class="form-control" name="department_name" text="text" value="{{ old('department_name') }}" maxlength="20" placeholder="システム開発部" required>
						@if($errors->has('department_name'))
						    <p class="help-block">{{ $errors->first('department_name') }}</p>
						@endif
					</div>
				</div>

				<div class="form-group {{ $errors->has('department_parent_id') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">所属部署の選択 <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<select data-placeholder="選択して下さい" class="form-control select2_single" name="department_parent_id">
							<option value=""></option>
						@foreach ($departments as $department)
							<option value="{{$department->department_id}}" @if(old('department_parent_id')==$department->department_id) selected @endif>{{$department->department_name}}</option>
						@endforeach
						</select>
					</div>

					@if($errors->has('department_parent_id'))
					    <p class="help-block">{{ $errors->first('department_parent_id') }}</p>
					@endif
				</div>
			</div>
		</div>
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<input type="submit" class="btn btn-primary" value="確認" name="submit">
	</div>

	</form>
	<!-- /.col-md-6 -->

</div>
<script src="{{ asset('select2-4.0.3/dist/js/select2.min.js') }}"></script>
<link href="{{ asset('select2-4.0.3/dist/css/select2.min.css') }}" rel="stylesheet">
<script type="text/javascript">
	$(".select2_single").select2({
		allowClear: true
	});
	$(document).on('click', '.select2', function() {
		$('.select2-search__field').attr('placeholder','検索');
	});
</script>
@endsection