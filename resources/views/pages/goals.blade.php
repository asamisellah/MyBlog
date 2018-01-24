@extends('layouts.mmain') 
@section('title','My Goals')

@section('content')
	<h1>{{ $goal->goal_title }}</h1>
	<p>{{ $goal->description }}</p>

@endsection