@extends('layouts.app')

@section('content')
<h2>{{$post->title}}</h2>
<div>
  {!!$post->body!!}
</div>
<hr>  
<small>written on {{$post->created_at}}</small>
<br>
  <a href="/posts/{{$post->id}}/edit" class="btn btn-primary float-left mt-4">Edit</a>
  <span class="float-right"><a href="/posts" class="btn btn-primary mt-4">Go Back </a></span>
  {!! Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'float-left ml-3 mt-4']) !!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
  {!! Form::close() !!}


@endsection