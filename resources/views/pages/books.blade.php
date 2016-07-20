@extends('layout')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			@section('header')
			<h1 class ="text-center">{{"Details of all books"}}</h1>
			@stop

			@section('content')
			@if(Session::has('message'))
			<div class="alert alert-success">
				{{Session::get('message')}}
			</div>
			@endif
			<div class="col-md-10 col-md-offset-1">
			<table class ="table table-striped table-hover">
				<thead>
					<tr class ="success">
						<th>Number</th>
						<th>Name</th>
						<th>Author</th>
						<th>ISBN</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
				<?php $i =1; ?>
					@foreach($books as $book)
				
					<tr>
						<td>{{$i}}</td>
						<td><a href="/book/view/{{$book->id}}"> {{$book->name}} </a></td>
						<td>{{$book->author}}</td>
						<td>{{$book->isbn}}</td>
						<td>{{$book->price}}</td>
					</tr>
					<?php $i ++; ?>
					@endforeach
				</tbody>
			</table>
			</div>
			<div class="text-center">
				<div class="pagination ">{{$books->links()}}</div>
			</div>
			@stop

		</div>
	</div>
</div>