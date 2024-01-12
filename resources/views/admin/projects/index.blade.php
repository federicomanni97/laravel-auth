@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Projects</h1>
        <!-- <p>section content</p> -->
        @foreach ($projects as $project)
        <p> <a href="{{route('admin.projects.show', $project->id)}}">{{$project->title}}</a></p>
        @endforeach
        <form action="{{route('admin.projects.create', $project->id)}}">
            <button class="btn btn-primary" >Create</button>
        </form>
    </section>
    
@endsection