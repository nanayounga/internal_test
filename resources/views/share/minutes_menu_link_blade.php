		<div class="icon_box_right">
			<a href="{{ url('minute/detail/create/') }}/{{ $minutes_group->minutes_group_id }}" class="btn btn-default" data-toggle="tooltip" data-original-title="議事録追加"><i class="fa fa-pencil" aria-hidden="true"></i></a>

			<a href="{{ url('minute/group/show/') }}/{{ $minutes_group->minutes_group_id }}" class="btn btn-default" data-toggle="tooltip" data-original-title="議事録一覧"><i class="fa fa-list-alt" aria-hidden="true"></i></a>

			<button class="btn btn-default" id="detail_button" data-toggle="tooltip" data-original-title="メンバー" ><i class="fa fa-users" aria-hidden="true"></i></button>

			<a href="{{ url('minute/group/edit/') }}/{{ $minutes_group->minutes_group_id }}" class="btn btn-default" data-toggle="tooltip" data-original-title="設定" ><i class="fa fa-cog" aria-hidden="true"></i></a>
			<br>
		</div>
<!-- 
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a href="{{ url('minute/detail/create/') }}/{{ $minutes_group->minutes_group_id }}" class="nav-link bg-default">議事録追加</a>
			</li>
			<li class="nav-item">
				<a href="{{ url('minute/group/show/') }}/{{ $minutes_group->minutes_group_id }}" class="nav-link bg-default">議事録一覧</a>
			</li>
			<li class="nav-item">
				<a href="{{ url('minute/group/edit/') }}/{{ $minutes_group->minutes_group_id }}" class="nav-link bg-default" id="delete_button">設定</a>
			</li>
			<li class="nav-item">
				<a href="#" id="detail_button" class="nav-link bg-default">メンバー</a>
			</li>
		</ul>
		<br>
 -->