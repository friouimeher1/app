@extends('post.layouts.base')
@section ('title')
Post | Create
@stop
@section('content')
<div class="alert alert-success" id="sucess">

</div>
<form action="{{route('post.store')}}" method="post" style="margin-top:80px;" id='form-submit'>
	{{ csrf_field() }}
	<div class="form-group">
		<label for="name" class="label label-info">Title</label>
		<input type="text" name="title" id="title"  class="form-control">
	</div>

	<div class="form-group">
		<label for="name" class="label label-info">Body</label>
		<textarea name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
	</div>
	<div class="form-group">
		<label for="name" class="label label-info">Price</label>
		<input type="number" name="price" id="price" class="form-control">
	</div>
	<div class="form-group">
		<button class="btn-block btn btn-primary ">Ajouter</button>
	</div>
</form>
@stop