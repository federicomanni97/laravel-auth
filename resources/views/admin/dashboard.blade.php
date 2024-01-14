@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-secondary my-4">Projects</h1>
    <!-- <div class="row justify-content-center"> -->
        <div class="btn btn-primary">
            <a class="text-white" href="{{route('admin.projects.index')}}">Projects</a>
        </div>
        <!-- <div class="col"> -->
            <!-- <div class="card"> -->
                <!-- <div class="card-header">{{ __('User Dashboard') }}</div> -->

                <!-- <div class="card-body d-flex justify-content-between align-items-center">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ __('You are logged in!') }} -->
                <!-- </div> -->
            <!-- </div> -->
        <!-- </div> -->
    </div>
</div>
@endsection
