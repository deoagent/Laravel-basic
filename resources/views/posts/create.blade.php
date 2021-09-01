@extends('layouts.app')

@section('content')
<h1>Create Post</h1>
   {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        {{Form::submit('Submit', [ 'class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
@endsection