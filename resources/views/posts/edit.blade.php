@extends('layouts.app')

@section('content')
    <form action="{{ route('posts.update', $post->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('put') }}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title"
                   value="{{ $post->title }}">

            @if ($errors->has('title'))
                <div class="error text-danger">{{ $errors->first('title') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea type="text" class="form-control" id="body" name="body">{{ $post->body }}</textarea>

            @if ($errors->has('body'))
                <div class="error text-danger">{{ $errors->first('body') }}</div>
            @endif
        </div>

        <button class="btn btn-primary">Save</button>
    </form>
@endsection