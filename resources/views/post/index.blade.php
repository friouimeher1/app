@extends('post.layouts.base')
@section ('title')
Post | Home
@stop
@section('content')
	<div class="table-responsive">
		<table class="table table-bordered table-striped">
			<caption>All Post</caption>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Body</th>
				<th></th>
			</tr>
		
		</table>	
	</div>
@stop