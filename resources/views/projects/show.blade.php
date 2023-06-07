@extends('layouts.app')

@section('content')
<div class="container">
    <h3>{{$project->title}}</h3>
    <img class="py-3" src="{{$project->image}}" alt="{{$project->title}}">
    <p>{{$project->content}}</p>
    <small>{{$project->created_at}}</small> - <small>{{$project->status}}</small>
</div>

@endsection
