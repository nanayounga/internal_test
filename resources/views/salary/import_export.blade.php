@extends('master')

@section('title', '給与のインポート・エクスポート')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">給与のインポート・エクスポート</h1>
	</div>

	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">給与額</div>
			<div class="panel-body">
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				
				@if ( ! empty($success))
					<div class="alert alert-danger">
						<ul>
							<li>{{ $success }}</li>
						</ul>
					</div>
				@endif
				
				<p><a href="{{ url('/salary/export_salary/csv') }}" class="btn btn-success">CSV エクスポート</a></p>
				<form" action="{{ url('/salary/import_salary') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
					<input type="file" name="import_file" />
					<button type="submit" class="btn btn-primary">CSV インポート</button>
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				</form>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">給与変更履歴</div>	
			<div class="panel-body">
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				
				@if ( ! empty($success_log))
					<div class="alert alert-danger">
						<ul>
							<li>{{ $success_log }}</li>
						</ul>
					</div>
				@endif

				<p><a class="btn btn-success" href="{{ url('/salary/export_log/csv') }}">CSV エクスポート</a></p>
				<form action="{{ url('/salary/import_log') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
					<input type="file" name="import_file" />
					<button type="submit" class="btn btn-primary">CSV インポート</button>
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				</form>
			</div>
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-md-12 -->
</div>
<!-- /.row -->

</div>
@endsection