@extends('base')
@section('content')

    <div class="row mt-3">
        <div class="col-md-6">
            <h1>Create Post</h1>
            <hr>

            {!! Form::open(['url'=>'/posts','method'=>'post']) !!}
                <div class="mb-3">
                    {!! Form::label('title', "Title") !!}
                    {!! Form::text("title", null, ['class'=>'form-controll']) !!}
                </div>

                <div class="mb-3">
                    {!! Form::label('content', "Content") !!}
                    {!! Form::textarea("content", null, ['class'=>'form-controll']) !!}
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary " type="submit">Save Post</button>
                </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
