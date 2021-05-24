@extends('layouts.app')
@section('main')
<section>
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<form class="container-flex-vertical" action="{{route('comics.update', ['comic'=> $comic->id])}}" method="post">
		@csrf
		@method('PATCH')
		<input type="text" name="title" placeholder="Title" value="{{$comic->title}}">
		<input type="text" name="description" placeholder="Description" value="{{$comic->description}}">
		<input type="text" name="thumb" placeholder="Thumb" value="{{$comic->thumb}}">
		<input type="text" name="price" placeholder="Price" value="{{$comic->price}}">
		<input type="text" name="series" placeholder="Series" value="{{$comic->series}}">
		<input type="text" name="sale_date" placeholder="Sale date" value="{{$comic->sale_date}}">
		<input type="text" name="type" placeholder="Type" value="{{$comic->type}}">

		<input type="submit" value="Add">
	</form>
</section>
@endsection