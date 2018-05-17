@extends('layouts.app')

@section('content')
    <form action="{{ route('posts.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="">
            @if ($errors->has('title'))
                <div class="error text-danger">{{ $errors->first('title') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea type="text" class="form-control" id="body" name="body"></textarea>
            @if ($errors->has('body'))
                <div class="error text-danger">{{ $errors->first('body') }}</div>
            @endif
        </div>
        <button class="btn btn-primary">Save</button>
    </form>
@endsection