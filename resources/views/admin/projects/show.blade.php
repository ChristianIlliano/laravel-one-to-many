@extends('layouts.admin')

@section("content")
    
    <h1>{{ $project->title}}</h1>
    <p>{{ $project->description}}</p>
    <p>{{ $project->slug }}</p>

@endsection