@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 m-2">
            <a class="btn btn-success" href="{{ route('posts.create') }}">Create new</a>
        </div>
        <div class="col-md-8">
            @foreach($posts as $post)
                <div class="card  m-2">
                    <div class="card-header">
                        <a href="#">{{ $post->user->name }}</a>
                        -
                        <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                    </div>

                    <div class="card-body">
                        <div class="float-right">
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                            <form method="post" action="{{ route('posts.destroy', $post->id) }}" class="d-inline">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                        <p class="float-left">{{ $post->body }}</p>
                    </div>
                </div>

                <hr>
            @endforeach
        </div>
    </div>
@endsection