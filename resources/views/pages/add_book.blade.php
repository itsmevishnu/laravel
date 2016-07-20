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
			<form class = "form-group" method = "POST" action= "/book/add/save">
				@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				{{ csrf_field()}}
				{{"Book name :"}}
				<div class="form-group">
					<input type="text" name = "name" class = "form-control">
				</div>
				
				{{"Author name :"}}
				<div class="form-group">
					<input type="text" name = "author" class = "form-control">
				</div>
				<!-- <div class="form-control"> -->
				{{"ISBN number :"}}
				<div class="form-group">
					<input type="text" name = "isbn" class = "form-control">
				</div>
				<!-- <div class="form-control"> -->
				{{"Price of the Book:"}}
				<div class="form-group">
					<input type="text" name = "price" class = "form-control">
				</div>
				<div class="form-group">
					<input type="submit" name = "Submit" value="Save" class = "btn btn-primary">
				</div>
			</form>
		</div>
		@stop
	</div>
</div>

</div>