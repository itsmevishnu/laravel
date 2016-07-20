@extends('layout')
<div class="container">
	<div class="row">
		<div>
			@section('header')
			<h1 class ="text-center">Add new Books</h1>
		</div>
		@stop
		@section('content')
		<div class="col-md-6 col-md-offset-2">
			<ul class="list-group">
				<li class="list-group-item list-group-item-success">{{$book->name}}</li>
				<li class="list-group-item">{{$book->author}}</li>
				<li class="list-group-item">{{$book->isbn}}</li>
				<li class="list-group-item">{{$book->price}}</li>
				<li class="list-group-item"><a class = "btn btn-primary" href="/book/edit/{{$book->id}}">Edit</a>
				<a class = "btn btn-danger" href="/book/delete/{{$book->id}}">Delete</a></li>

			</ul>
		</div>
		@stop
	</div>
</div>

</div>

