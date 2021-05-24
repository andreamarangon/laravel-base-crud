@extends('layouts.app')
@section('main')
<section class="container-flex-vertical">
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form class="container-flex-vertical" action="{{route('comics.store')}}" method="post">
		@csrf
		@method('POST')
		<input type="text" name="title" placeholder="Title">
		<input type="text" name="description" placeholder="Description">
		<input type="text" name="thumb" placeholder="Thumb">
		<input type="number" step="0.1" name="price" placeholder="Price">
		<input type="text" name="series" placeholder="Series">
		<input type="date" name="sale_date" placeholder="Sale date">
		<input type="text" name="type" placeholder="Type">

		<input type="submit" value="Add">
	</form>
</section>
@endsection