@extends('base')
@section('content')

    <div class="float-end m-2">
        <a href="{{ url('/post/create') }}" class="btn btn-primary">Create new Post</a>
    </div>

    <h1>My Post</h1>
    <hr>
    <div class="d-flex justify-content-between flex-wrap">

        @foreach ($myPosts as $post)
            <div class="card align-self-stretch m-1" style="width: 31%">
                <div class="card-body">
                    <div class="card-title">
                        <h4>{{ $post->title }}</h4>
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ url('/posts/edit/' . $post->id) }}" class="btn btn-info btn-sm">Edit</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection
