{{-- {{ dd('fuck') }} --}}
@extends('layouts.app')

@section('content')
    <header id="subheader">
      <div id="subheader_wrap">
          <!-- Icon Background -->
          <div id="icon_border"></div>
      </div>
  </header>
<section id="create">
<div class="container ">
  <h1>Create Post</h1>
  {{ Form::open(['action' => 'PostsController@store','method'=>'POST']) }}
    <div class="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>

    <div class="form-group">
      {{Form::label('body','Body')}}
      {{Form::textarea('body','',['class' => 'form-control', 'placeholder' => 'Body Text','id'=>'article-ckeditor'])}}
    </div>
    <div class="form-inline my-3">
        {{Form::label('tag','Tags')}}
        {{Form::text('tag','',['class' => 'form-control ml-3 ', 'placeholder' => 'Tags separated by , '])}}
    </div>
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
  {{ Form::close() }}
</div>
</section>
@endsection