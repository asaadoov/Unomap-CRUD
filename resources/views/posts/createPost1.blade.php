@extends('layouts.app')

@section('content')

<section id="createPost" >
</section>
<div class="container" style="width: 60vw;">
  <h1 class="text-center my-4">Create Post</h1>
  @include('inc.messages')
  {{ Form::open(['action' => 'PostsController@store','method'=>'POST']) }}
    <div class="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
      {{Form::label('body','Body')}}
      {{Form::textarea('body','',['class' => 'form-control', 'placeholder' => 'Body Text','id'=>'article-ckeditor'])}}
    </div>
    <div class="form-inline my-3 text-center">
        {{Form::label('tag','Tags')}}
        {{Form::text('tag','',['class' => 'form-control ml-3 ', 'placeholder' => 'Tags separated by , '])}}
    </div>
    <div class="text-center">
      {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    </div>
  {{ Form::close() }}
</div>
@endsection