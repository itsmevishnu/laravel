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
		<div class="panel panel-default">
				<div class="panel-heading">
					Do you want to delete
				</div>
				<div class="panel-body">
					<form class = "form-group" method = "POST" action= "/book/erase/{{$book->id}}">
						{{method_field('DELETE')}}
						{{ csrf_field()}}
						<button type="submit" class="btn btn-danger">Delete</button>
						<a href="/book/view/{{$book->id}}" class = "btn btn-primary">Cancel</a>
					</form>
				</div>
			</div>
		</div>
		@stop
	</div>
</div>

</div>