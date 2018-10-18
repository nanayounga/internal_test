		<?php $user_id   = (is_array($user)) ? $user['user_id'] : $user->user_id; ?>
		<?php $user_name = (is_array($user)) ? $user['user_kanji_last_name'] : $user->user_kanji_last_name; ?>

		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a href="{{ url('user/show/'. $user_id) }}" class="nav-link bg-default">基本情報</a>
			</li>
			@if(Util::check_permission('edit_account'))
			<li class="nav-item">
				<a href="{{ url('user/edit/'. $user_id) }}" class="nav-link bg-default">基本情報編集</a>
			</li>
			@endif
			@if(Util::check_permission('edit_user_detail'))
			<li class="nav-item">
				<a href="{{ url('user_detail/edit/'. $user_id) }}" class="nav-link bg-default">詳細情報編集</a>
			</li>
			@endif
			@if(Util::check_permission('view_salary'))
			<li class="nav-item">
				<a href="{{ url('salary/show/'. $user_id) }}" class="nav-link bg-default">給与詳細</a>
			</li>
			@endif
			@if(Util::check_permission('edit_permission'))
			<li class="nav-item">
				<a href="{{ url('user/edit_permission/'. $user_id) }}" class="nav-link bg-default">権限の編集</a>
			</li>
			@endif
			@if(Util::check_permission('delete_account'))
			<li class="nav-item">
				<a href="#" class="nav-link bg-default" id="delete_button">削除</a>
			</li>
			@endif
		</ul>

		<br>

<div class="modal" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-show="true" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&#215;</span><span class="sr-only">閉じる</span>
				</button>
				<h4 class="modal-title">社員の削除</h4>
			</div><!-- /modal-header -->
			<div class="modal-body">
				<p class="recipient">{{ $user_name }}を削除しますか？</p>

			</div>
			<div class="modal-footer">
				<form action="{{url('user/destroy'). '/'. $user_id}}" method="post" autocomplete="off" class="form-horizontal form-label-left">
				<button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					<input type="submit" class="btn btn-primary" value="削除する" name="submit">
				</form>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

<script type="text/javascript">
	$(document).on('click', '#delete_button', function() {
		$('#staticModal').modal();
	})
</script>