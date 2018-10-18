@extends('master')

@section('title', '社員詳細情報編集')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">社員詳細情報編集</h1>
	</div>

	<div class="col-md-12">
		@include('share/user_tab_menu')

		<div class="panel panel-default">
			<div class="panel-heading">{{ $user->user_kanji_last_name }} {{ $user->user_kanji_first_name }}</div>
			<div class="panel-body">
				<form action="{{url('user_detail/update'). '/'. $user['user_id']}}" method="post" autocomplete="off" class="form-horizontal form-label-left">

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

				<div class="form-group {{ $errors->has('detail_gender') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">性別 <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<div class="radio">
							<label>
								<input type="radio" name="detail_gender" value="男" @if($user_detail['detail_gender'] == "男") checked @endif>男
							</label>
							&nbsp;
							<label>
								<input type="radio" name="detail_gender" value="女" @if($user_detail['detail_gender'] == "女") checked @endif>女
							</label>
						</div>
						@if($errors->has('detail_gender'))
							<p class="help-block">{{ $errors->first('detail_gender') }}</p>
						@endif
					</div>
				</div>

				<div class="form-group {{ $errors->has('detail_birthday') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">誕生日 <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<div class="input-group">
							<input type="text" class="form-control date" name="detail_birthday" value="{{ ! empty($user_detail['detail_birthday']) ? $user_detail['detail_birthday'] : old('detail_birthday') }}">
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
						</div>
						@if($errors->has('detail_birthday'))
							<p class="help-block">{{ $errors->first('detail_birthday') }}</p>
						@endif
					</div>
				</div>
				
				<div class="form-group {{ $errors->has('detail_zip_code') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">郵便番号 <span class="required">[必須]</span></label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="detail_zip_code" type="text" value="{{ ! empty($user_detail['detail_zip_code']) ? $user_detail['detail_zip_code'] : old('detail_zip_code') }}">
						</div>
						@if($errors->has('detail_zip_code'))
							<p class="help-block">{{ $errors->first('detail_zip_code') }}</p>
						@endif
					</div>
				</div>
				
				<div class="form-group {{ $errors->has('detail_district') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">都道府県</label>
					<div class="col-lg-6">
						<div class="input-group">							
							<select data-placeholder="選択して下さい" class="form-control select2_single" name="detail_district">
								<option value=""></option>
								@foreach ($districts as $district)
									<option value="{{$district->district_id}}" @if($user_detail['detail_district']==$district->district_id) selected @endif>{{$district->district_name}}</option>
								@endforeach
							</select>
						</div>
						@if($errors->has('detail_district'))
							<p class="help-block">{{ $errors->first('detail_district') }}</p>
						@endif
					</div>
				</div>
				
				<div class="form-group {{ $errors->has('detail_city') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">市区町村 </label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="detail_city" type="text" value="{{ ! empty($user_detail['detail_city']) ? $user_detail['detail_city'] : old('detail_city') }}">							
						</div>
						@if($errors->has('detail_city'))
							<p class="help-block">{{ $errors->first('detail_city') }}</p>
						@endif
					</div>
				</div>
				
				<div class="form-group {{ $errors->has('detail_address1') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">住所1（番地まで）</label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="detail_address1" type="text" value="{{ ! empty($user_detail['detail_address1']) ? $user_detail['detail_address1'] : old('detail_address1') }}">							
						</div>
						@if($errors->has('detail_address1'))
							<p class="help-block">{{ $errors->first('detail_address1') }}</p>
						@endif
					</div>
				</div>
				
				<div class="form-group {{ $errors->has('detail_address2') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">住所2（ビル・マンション名　部屋番号）</label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="detail_address2" type="text" value="{{ ! empty($user_detail['detail_address2']) ? $user_detail['detail_address2'] : old('detail_address2') }}">							
						</div>
						@if($errors->has('detail_address2'))
							<p class="help-block">{{ $errors->first('detail_address2') }}</p>
						@endif
					</div>
				</div>
				
				<div class="form-group {{ $errors->has('detail_tel') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">電話番号 </label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="detail_tel" type="text" value="{{ ! empty($user_detail['detail_tel']) ? $user_detail['detail_tel'] : old('detail_tel') }}">
						</div>
						@if($errors->has('detail_tel'))
							<p class="help-block">{{ $errors->first('detail_tel') }}</p>
						@endif
					</div>
				</div>
				
				<div class="form-group {{ $errors->has('detail_emergency_tel') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">緊急連絡先 </label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="detail_emergency_tel" type="text" value="{{ ! empty($user_detail['detail_emergency_tel']) ? $user_detail['detail_emergency_tel'] : old('detail_emergency_tel') }}">
						</div>
						@if($errors->has('detail_emergency_tel'))
							<p class="help-block">{{ $errors->first('detail_emergency_tel') }}</p>
						@endif
					</div>
				</div>
				
				<div class="form-group {{ $errors->has('detail_position') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">役職名 </label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="detail_position" type="text" value="{{ ! empty($user_detail['detail_position']) ? $user_detail['detail_position'] : old('detail_position') }}">
						</div>
						@if($errors->has('detail_position'))
							<p class="help-block">{{ $errors->first('detail_position') }}</p>
						@endif
					</div>
				</div>
				
				<div class="form-group {{ $errors->has('detail_enter_company_date') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">入社年月日 <span class="required">[必須]</span></label>
					<div class="col-lg-6">
						<div class="input-group">
							<input type="text" class="form-control date" name="detail_enter_company_date" value="{{ ! empty($user_detail['detail_enter_company_date']) ? $user_detail['detail_enter_company_date'] : old('detail_enter_company_date') }}">
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
						</div>
						@if($errors->has('detail_enter_company_date'))
							<p class="help-block">{{ $errors->first('detail_enter_company_date') }}</p>
						@endif
					</div>
				</div>
				
				<div class="form-group {{ $errors->has('detail_koyo_kubun') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">雇用区分 <span class="required">[必須]</span></label>
					<div class="col-lg-6">
						<div class="radio">
							<label>
								<input type="radio" name="detail_koyo_kubun" value="正社員" @if($user_detail['detail_koyo_kubun'] == "正社員") checked @endif>正社員
							</label>
							&nbsp;
							<label>
								<input type="radio" name="detail_koyo_kubun" value="アルバイト" @if($user_detail['detail_koyo_kubun'] == "アルバイト") checked @endif>アルバイト
							</label>
						</div>
						@if($errors->has('detail_koyo_kubun'))
							<p class="help-block">{{ $errors->first('detail_koyo_kubun') }}</p>
						@endif
					</div>
				</div>
				
				<div class="form-group {{ $errors->has('detail_kisonenkin_bango') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">基礎年金番号 </label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="detail_kisonenkin_bango" type="text" value="{{ ! empty($user_detail['detail_kisonenkin_bango']) ? $user_detail['detail_kisonenkin_bango'] : old('detail_kisonenkin_bango') }}">
						</div>
						@if($errors->has('detail_kisonenkin_bango'))
							<p class="help-block">{{ $errors->first('detail_kisonenkin_bango') }}</p>
						@endif
					</div>
				</div>
				
				<div class="form-group {{ $errors->has('detail_koyo_hojin') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">雇用法人 <span class="required">[必須]</span></label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="detail_koyo_hojin" type="text" value="{{ ! empty($user_detail['detail_koyo_hojin']) ? $user_detail['detail_koyo_hojin'] : old('detail_koyo_hojin') }}">
						</div>
						@if($errors->has('detail_koyo_hojin'))
							<p class="help-block">{{ $errors->first('detail_koyo_hojin') }}</p>
						@endif
					</div>
				</div>
				
				<div class="form-group {{ $errors->has('detail_koyohoken_bango') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">雇用保険番号 </label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="detail_koyohoken_bango" type="text" value="{{ ! empty($user_detail['detail_koyohoken_bango']) ? $user_detail['detail_koyohoken_bango'] : old('detail_koyohoken_bango') }}">
						</div>
						@if($errors->has('detail_koyohoken_bango'))
							<p class="help-block">{{ $errors->first('detail_koyohoken_bango') }}</p>
						@endif
					</div>
				</div>
				
				@if(Util::check_permission('view_my_number'))
				<div class="form-group {{ $errors->has('detail_my_number') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">マイナンバー </label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="detail_my_number" type="number" value="{{ ! empty($user_detail['detail_my_number']) ? $user_detail['detail_my_number'] : old('detail_my_number') }}">
						</div>
						@if($errors->has('detail_my_number'))
							<p class="help-block">{{ $errors->first('detail_my_number') }}</p>
						@endif
					</div>
				</div>
				@endif
				
				<hr>
				<div class="form-group {{ $errors->has('detail_shakai_hoken') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">社会保険 <span class="required">[必須]</span></label>
					<div class="col-lg-6">
						<div class="radio">
							<label>
								<input type="radio" name="detail_shakai_hoken" value="加入" @if($user_detail['detail_shakai_hoken'] == "加入") checked @endif>加入
							</label>
							&nbsp;
							<label>
								<input type="radio" name="detail_shakai_hoken" value="未加入" @if($user_detail['detail_shakai_hoken'] == "未加入") checked @endif>未加入
							</label>
						</div>
						@if($errors->has('detail_shakai_hoken'))
							<p class="help-block">{{ $errors->first('detail_shakai_hoken') }}</p>
						@endif
					</div>
				</div>
				
				<div class="form-group {{ $errors->has('detail_shaho_shutokubi') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">社会保険資格取得年月日 </label>
					<div class="col-lg-6">
						<div class="input-group">
							<input type="text" class="form-control date" name="detail_shaho_shutokubi" value="{{ ! empty($user_detail['detail_shaho_shutokubi']) ? $user_detail['detail_shaho_shutokubi'] : old('detail_shaho_shutokubi') }}">
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
						</div>
						@if($errors->has('detail_shaho_shutokubi'))
							<p class="help-block">{{ $errors->first('detail_shaho_shutokubi') }}</p>
						@endif
					</div>
				</div>
				
				<div class="form-group {{ $errors->has('detail_shaho_kigo') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">社会保険の記号 </label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="detail_shaho_kigo" type="number" value="{{ ! empty($user_detail['detail_shaho_kigo']) ? $user_detail['detail_shaho_kigo'] : old('detail_shaho_kigo') }}">
						</div>
						@if($errors->has('detail_shaho_kigo'))
							<p class="help-block">{{ $errors->first('detail_shaho_kigo') }}</p>
						@endif
					</div>
				</div>
				
				<div class="form-group {{ $errors->has('detail_shaho_bango') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">社会保険の番号 </label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="detail_shaho_bango" type="number" value="{{ ! empty($user_detail['detail_shaho_bango']) ? $user_detail['detail_shaho_bango'] : old('detail_shaho_bango') }}">
						</div>
						@if($errors->has('detail_shaho_bango'))
							<p class="help-block">{{ $errors->first('detail_shaho_bango') }}</p>
						@endif
					</div>
				</div>
				
				<div class="form-group {{ $errors->has('detail_hokensha_bango') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">保険者番号 </label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="detail_hokensha_bango" type="text" value="{{ ! empty($user_detail['detail_hokensha_bango']) ? $user_detail['detail_hokensha_bango'] : old('detail_hokensha_bango') }}">
						</div>
						@if($errors->has('detail_hokensha_bango'))
							<p class="help-block">{{ $errors->first('detail_hokensha_bango') }}</p>
						@endif
					</div>
				</div>
				
				<hr>
				<div class="form-group {{ $errors->has('bank_name') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">銀行名 <span class="required">[必須]</span></label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="bank_name" type="text" value="{{ ! empty($user_bank['bank_name']) ? $user_bank['bank_name'] : old('bank_name') }}">
						</div>
						@if($errors->has('bank_name'))
							<p class="help-block">{{ $errors->first('bank_name') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('bank_branch') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">支店名（支店番号）<span class="required">[必須]</span></label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="bank_branch" type="text" value="{{ ! empty($user_bank['bank_branch']) ? $user_bank['bank_branch'] : old('bank_branch') }}">
						</div>
						@if($errors->has('bank_branch'))
							<p class="help-block">{{ $errors->first('bank_branch') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('bank_type') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">口座種類 <span class="required">[必須]</span></label>
					<div class="col-lg-6">
						<div class="radio">
							<label>
								<input type="radio" name="bank_type" value="普通" @if($user_bank['bank_type'] == "普通") checked @endif>普通
							</label>
							&nbsp;
							<label>
								<input type="radio" name="bank_type" value="当座" @if($user_bank['bank_type'] == "当座") checked @endif>当座
							</label>
						</div>
						@if($errors->has('bank_type'))
							<p class="help-block">{{ $errors->first('bank_type') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('bank_number') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">口座番号 <span class="required">[必須]</span></label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="bank_number" type="number" value="{{ ! empty($user_bank['bank_number']) ? $user_bank['bank_number'] : old('bank_number') }}">
						</div>
						@if($errors->has('bank_number'))
							<p class="help-block">{{ $errors->first('bank_number') }}</p>
						@endif
					</div>
				</div>

				<hr>
				<div class="form-group {{ $errors->has('detail_remarks') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">備考欄 </label>
					<div class="col-lg-6">
						<div class="input-group">
							<textarea class="form-control" name="detail_remarks">{{ ! empty($user_detail['detail_remarks']) ? $user_detail['detail_remarks'] : old('detail_remarks') }}</textarea>
						</div>
						@if($errors->has('detail_remarks'))
							<p class="help-block">{{ $errors->first('detail_remarks') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('detail_number_vacation_day') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">有給休暇の日数 </label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="detail_number_vacation_day" type="number" value="{{ ! empty($user_detail['detail_number_vacation_day']) ? $user_detail['detail_number_vacation_day'] : old('detail_number_vacation_day') }}">
						</div>
						@if($errors->has('detail_number_vacation_day'))
							<p class="help-block">{{ $errors->first('detail_number_vacation_day') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('detail_dependent') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">扶養家族 <span class="required">[必須]</span></label>
					<div class="col-lg-6">
						<div class="radio">
							<label>
								<input type="radio" name="detail_dependent" value="あり" @if($user_detail['detail_dependent'] == "あり") checked @endif>あり
							</label>
							&nbsp;
							<label>
								<input type="radio" name="detail_dependent" value="なし" @if($user_detail['detail_dependent'] == "なし") checked @endif>なし
							</label>
							<br>
							<a href="{{ url('dependent/create/'. $user_detail['user_id']) }}">扶養家族を追加する</a>
						</div>
						@if($errors->has('detail_dependent'))
							<p class="help-block">{{ $errors->first('detail_dependent') }}</p>
						@endif
					</div>
				</div>
				
				<div class="data_dependents">
				@if(isset($dependents[0]) && $user_detail['detail_dependent'] == "あり")
					扶養家族
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>ID</th>
								<th>漢字</th>
								<th>カタカナ</th>
								<th>詳細</th>
								<th>編集</th>
								<th>削除</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($dependents as $dependent)
								<tr>
									<td>{{$dependent->dependent_id}}</td>
									<td>{{$dependent->dependent_kanji_last_name}} {{$dependent->dependent_kanji_first_name}}</td>
									<td>{{$dependent->dependent_kata_last_name}} {{$dependent->dependent_kata_first_name}}</td>
									<td><a href="{{ url('dependent/show/'. $dependent->dependent_id) }}" class="btn btn-outline btn-info btn-xs perm-users">詳細</a></td>
									<td><a href="{{ url('dependent/edit/'. $dependent->dependent_id) }}" class="btn btn-outline btn-primary btn-xs">編集</a></td>
									<td>
										<a class="btn btn-outline btn-danger btn-xs perm-del" onclick="return confirm('Are you sure?')" href="{{ url('dependent/destroy/'. $dependent->dependent_id) }}">削除</a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				@endif
				</div>
				
				<hr>
				<div class="form-group">
					<div class="col-md-6 col-md-offset-3">
						<input type="hidden" name="user_id" value="{{ $user['user_id'] }}">
						<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
						<input type="submit" class="btn btn-primary" value="編集" name="submit">
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
<!-- datetimepicker -->
<script src="{{ asset('js/moment.js') }}"></script>
<script src="{{ asset('bootstrap-datetimepicker/moment-with-locales.js') }}"></script>
<link href="{{ asset('bootstrap-datetimepicker/bootstrap-datetimepicker.css') }}" rel="stylesheet">
<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/v4.0.0/src/js/bootstrap-datetimepicker.js"></script>

<script type="text/javascript">
	$('.date').datetimepicker({
		locale: 'ja',
		format : 'YYYY/MM/DD',
	});
	
	$("input[name='detail_dependent']").change(function() {
		var status = $(this).val();
		if (status != "あり") {
			$(".data_dependents").hide();
		} else {
			$(".data_dependents").show();
		}
	});
</script>
@endsection