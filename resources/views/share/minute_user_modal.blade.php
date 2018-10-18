
<div class="modal" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-show="true" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&#215;</span><span class="sr-only">閉じる</span>
				</button>
				<h4 class="modal-title">メンバー</h4>
			</div><!-- /modal-header -->
			<div class="modal-body minute_member">
				@foreach ($minutes_users as $users)
					<a href="{{ url('user/show') }}/{{ $users->user_id }}"><span class="btn btn-outline btn-primary">{{$users->user_kanji_last_name}} {{$users->user_kanji_first_name}}</span></a>
				@endforeach
				<div class="clearfix"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

<script type="text/javascript">
	$(document).on('click', '#detail_button', function() {
		$('#staticModal').modal();
	})
</script>