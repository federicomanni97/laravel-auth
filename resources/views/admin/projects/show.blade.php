@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>{{$project->title}}</h1>
        <p>{{$project->body}}</p>
        <img src="{{$project->image}}" alt="">
        <button class="btn btn-primary"><a href="{{route('admin.projects.edit' , $project)}}">Edit</a></button>
    </section>
@endsection