@extends('layouts.app')

@section('content')
  <h1>Edit Post</h1>
  {{ Form::open(['action' => ['PostsController@update', $post->id],'method'=>'POST']) }}
    <div class="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title',$post->title,['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
      {{Form::label('body','Body')}}
      {{Form::textarea('body',$post->body,['class' => 'form-control', 'placeholder' => 'Body Text','id'=>'article-ckeditor'])}}
    </div>
    <div class="form-inline my-3">
        {{Form::label('tag','Tags')}}
        {{Form::text('tag',$postTags,['class' => 'form-control ml-3 ', 'placeholder' => 'Tags separated by , '])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
  {{ Form::close() }}

@endsection