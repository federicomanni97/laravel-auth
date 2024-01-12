@extends('layouts.app')
@section('content')
    <section class="container">
        <h1 class="my-5">Projects</h1>
        <!-- <p>section content</p> -->
        @foreach ($projects as $project)
        <!-- <p> <a href="{{route('admin.projects.show', $project->id)}}">{{$project->title}}</a></p> -->
        <table class="table">
        <tbody class="d-flex ">
            <tr>
                <th scope="row"><a href="{{route('admin.projects.show', $project->id)}}">{{$project->title}}</a></th>
            </tr>
            <tr>
                <td><a href="{{route('admin.projects.edit' , $project)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{route('admin.projects.destroy' , $project)}}" method="POST">
                    @csrf
                    @method ('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        </table>
        @endforeach
        <form action="{{route('admin.projects.create', $project->id)}}">
            <button class="btn btn-primary" >Create</button>
        </form>
    </section>
@endsection