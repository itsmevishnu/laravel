@extends('layout')

@section('header')
	{{'Notes'}}
@stop


@section('content')
<ol>
	@foreach ($notes as $note)
	<li>{{$note->title}}</li>
	@endforeach
</ol>
@stop

