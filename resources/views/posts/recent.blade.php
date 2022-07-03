@extends('base')
@section('content')

<h1>Recent Post</h1>
<hr>
<div class="d-flex justify-content-between flex-wrap">

    @foreach ($recentPost as $post)
        <div class="card align-self-stretch m-1" style="width: 31%">
            <div class="card-body">
                <div class="card-title">
                    <h4>{{ $post->title }}</h4>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
            <div class="card-footer">
                @if($post->isEditable())
                    <a href="{{ url('/posts/edit/' . $post->id) }}" class="btn btn-info btn-sm">Edit</a>
                @endif
            </div>
        </div>
    @endforeach

</div>
@endsection
