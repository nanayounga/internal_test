@extends('master')

<!-- @section('title', 'ページタイトル') -->

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">依存を追加する</h1>
	</div>

	<form action="{{url('dependent/create/'.$user['user_id'])}}" method="post" autocomplete="off" class="form-horizontal form-label-left">
	<div class="col-md-12">
		@include('share/user_tab_menu')
		
		<div class="panel panel-default">
			<div class="panel-heading">従属情報の入力</div>
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

				<div class="form-group {{ $errors->has('dependent_kanji_last_name') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">姓（漢字）<span class="required">[必須]</span></label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="dependent_kanji_last_name" type="text" value="{{ old('dependent_kanji_last_name') }}">							
						</div>
						@if($errors->has('dependent_kanji_last_name'))
							<p class="help-block">{{ $errors->first('dependent_kanji_last_name') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('dependent_kanji_first_name') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">名（漢字）<span class="required">[必須]</span></label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="dependent_kanji_first_name" type="text" value="{{ old('dependent_kanji_first_name') }}">							
						</div>
						@if($errors->has('dependent_kanji_first_name'))
							<p class="help-block">{{ $errors->first('dependent_kanji_first_name') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('dependent_kata_last_name') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">姓（フリガナ）<span class="required">[必須]</span></label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="dependent_kata_last_name" type="text" value="{{ old('dependent_kata_last_name') }}">							
						</div>
						@if($errors->has('dependent_kata_last_name'))
							<p class="help-block">{{ $errors->first('dependent_kata_last_name') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('dependent_kata_first_name') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">名（フリガナ）<span class="required">[必須]</span></label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="dependent_kata_first_name" type="text" value="{{ old('dependent_kata_first_name') }}">							
						</div>
						@if($errors->has('dependent_kata_first_name'))
							<p class="help-block">{{ $errors->first('dependent_kata_first_name') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('dependent_gender') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">性別 <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<div class="radio">
							<label>
								<input type="radio" name="dependent_gender" value="男" @if(old('dependent_gender') == "男") checked @endif>男
							</label>
							&nbsp;
							<label>
								<input type="radio" name="dependent_gender" value="女" @if(old('dependent_gender') == "女") checked @endif>女
							</label>
						</div>
						@if($errors->has('dependent_gender'))
							<p class="help-block">{{ $errors->first('dependent_gender') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('dependent_relative') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">家族 <span class="required">[必須]</span></label>
					<div class="col-lg-6">
						<div class="radio">
							<label>
								<input type="radio" name="dependent_relative" value="配偶者" @if(old('dependent_relative') == "配偶者") checked @endif>配偶者
							</label>
							&nbsp;
							<label>
								<input type="radio" name="dependent_relative" value="子" @if(old('dependent_relative') == "子") checked @endif>子
							</label>
							&nbsp;
							<label>
								<input type="radio" name="dependent_relative" value="父" @if(old('dependent_relative') == "父") checked @endif>父
							</label>
							&nbsp;
							<label>
								<input type="radio" name="dependent_relative" value="母" @if(old('dependent_relative') == "母") checked @endif>母
							</label>
							&nbsp;
							<label>
								<input type="radio" name="dependent_relative" value="兄弟" @if(old('dependent_relative') == "兄弟") checked @endif>兄弟
							</label>
						</div>
						@if($errors->has('dependent_relative'))
							<p class="help-block">{{ $errors->first('dependent_relative') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('dependent_social') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">社会保険の扶養 <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<div class="radio">
							<label>
								<input type="radio" name="dependent_social" value="扶養" @if(old('dependent_social') == "扶養") checked @endif>扶養
							</label>
							&nbsp;
							<label>
								<input type="radio" name="dependent_social" value="対象外" @if(old('dependent_social') == "対象外") checked @endif>対象外
							</label>
						</div>
						@if($errors->has('dependent_social'))
							<p class="help-block">{{ $errors->first('dependent_social') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('dependent_tax') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">税法上の扶養 <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<div class="radio">
							<label>
								<input type="radio" name="dependent_tax" value="扶養" @if(old('dependent_tax') == "扶養") checked @endif>扶養
							</label>
							&nbsp;
							<label>
								<input type="radio" name="dependent_tax" value="対象外" @if(old('dependent_tax') == "対象外") checked @endif>対象外
							</label>
						</div>
						@if($errors->has('dependent_tax'))
							<p class="help-block">{{ $errors->first('dependent_tax') }}</p>
						@endif
						<br/>
						※　社会保険の扶養要件（被扶養者の年収）が次の全てに該当する
						130万円未満（60歳以上又は障害のある者、180万円未満）
						被保険者の年収の半分未満（半分以上の場合、130万円未満かつ被保険者の年収以下）
						別居の場合は収入が仕送り額未満
						<br/>
						※　税法上の扶養要件
						103万円以下（年金受給者の場合/65歳未満は108万円以下、65歳以上は158万円以下）
					</div>
				</div>
				<div class="form-group {{ $errors->has('dependent_birthday') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">生年月日 <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<div class="input-group">
							<input type="date" name="dependent_birthday" id="dependent_birthday" onchange="submitBday()" value="{{ old('dependent_birthday') }}">
							<p id="cal_age"></p>
						</div>
						@if($errors->has('dependent_birthday'))
							<p class="help-block">{{ $errors->first('dependent_birthday') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('dependent_retire_code') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">基礎年金番号</label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="dependent_retire_code" type="number" value="{{ old('dependent_retire_code') }}">
						</div>
						@if($errors->has('dependent_retire_code'))
							<p class="help-block">{{ $errors->first('dependent_retire_code') }}</p>
						@endif
					</div>					
				</div>				
				<div class="form-group {{ $errors->has('dependent_tel') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">マイナンバー</label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="dependent_tel" type="number" value="{{ old('dependent_tel') }}">
						</div>
						@if($errors->has('dependent_tel'))
							<p class="help-block">{{ $errors->first('dependent_tel') }}</p>
						@endif
					</div>
				</div>				
				<div class="form-group {{ $errors->has('dependent_social_insurrance') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">社会保険 <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<div class="radio">
							<label>
								<input type="radio" name="dependent_social_insurrance" value="加入" @if(old('dependent_social_insurrance') == "加入") checked @endif>加入
							</label>
							&nbsp;
							<label>
								<input type="radio" name="dependent_social_insurrance" value="未加入" @if(old('dependent_social_insurrance') == "未加入") checked @endif>未加入
							</label>
						</div>
						@if($errors->has('dependent_social_insurrance'))
							<p class="help-block">{{ $errors->first('dependent_social_insurrance') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('dependent_insurance_join_date') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">社会保険資格取得年月日 </label>
					<div class="col-md-6">
						<div class="input-group">
							<input type="text" class="form-control date" name="dependent_insurance_join_date" value="{{ old('dependent_insurance_join_date') }}">
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>							
						</div>
						@if($errors->has('dependent_insurance_join_date'))
							<p class="help-block">{{ $errors->first('dependent_insurance_join_date') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('dependent_insurance_card') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">社会保険の記号 </label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="dependent_insurance_card" type="number" value="{{ old('dependent_insurance_card') }}">
						</div>
						@if($errors->has('dependent_insurance_card'))
							<p class="help-block">{{ $errors->first('dependent_insurance_card') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('dependent_social_insurance_number') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">社会保険の番号 </label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="dependent_social_insurance_number" type="number" value="{{ old('dependent_social_insurance_number') }}">
						</div>
						@if($errors->has('dependent_insurance_card'))
							<p class="help-block">{{ $errors->first('dependent_social_insurance_number') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('dependent_address') ? 'has-error' : '' }}">
					<label class="control-label col-md-3">住所 <span class="required">[必須]</span></label>
					<div class="col-md-6">
						<div class="radio">
							<label>
								<input type="radio" name="dependent_address" value="本人と同居" @if(old('dependent_address') == "本人と同居") checked @endif>本人と同居
							</label>
							&nbsp;
							<label>
								<input type="radio" name="dependent_address" value="他の住所に居住" @if(old('dependent_address') == "他の住所に居住") checked @endif>他の住所に居住
							</label>
						</div>
						@if($errors->has('dependent_address'))
							<p class="help-block">{{ $errors->first('dependent_address') }}</p>
						@endif
					</div>
				</div>
				<div class="other_address">
				<div class="form-group {{ $errors->has('dependent_post_code') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">郵便番号 </label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="dependent_post_code" type="text" value="{{ old('dependent_post_code') }}">
						</div>
						@if($errors->has('dependent_post_code'))
							<p class="help-block">{{ $errors->first('dependent_post_code') }}</p>
						@endif
					</div>
				</div>
				<div class="form-group {{ $errors->has('dependent_post_address') ? 'has-error' : '' }}">
					<label class="control-label col-lg-3">住所 </label>
					<div class="col-lg-6">
						<div class="input-group">
							<input class="form-control" name="dependent_post_address" type="text" value="{{ old('dependent_post_address') }}">
						</div>
						@if($errors->has('dependent_post_address'))
							<p class="help-block">{{ $errors->first('dependent_post_address') }}</p>
						@endif
					</div>
				</div>
				</div>
				<hr>
				<div class="form-group">
					<div class="col-md-6 col-md-offset-3">
						<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
						<input type="submit" class="btn btn-primary" value="確認" name="submit">
						<input type="button" class="btn btn-primary" value="バック" name="back" onclick='window.location.href="{{ url('/user_detail/edit/'.$user['user_id']) }}";'>
					</div>
				</div>
			</div>
		</div>
	</div>

	</form>
	<!-- /.col-md-6 -->

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
	
	$("input[name='dependent_address']").change(function() {
		var status = $(this).val();
		if (status != "他の住所に居住") {
			$(".other_address").hide();
		} else {
			$(".other_address").show();
		}
	});
	
	function submitBday()
	{
		var Q4A = "誕生日は ";
		var Bdate = document.getElementById('dependent_birthday').value;
		var Bday = +new Date(Bdate);
		Q4A += Bdate + ". 年齢は　" + ~~ ((Date.now() - Bday) / (31557600000)) + " 歳";
		var theBday = document.getElementById('cal_age');
		theBday.innerHTML = Q4A;
	}
</script>
@endsection