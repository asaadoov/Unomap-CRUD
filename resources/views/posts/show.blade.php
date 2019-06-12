@extends('layouts.app')

@section('content')
  <h2>{{$post->title}}</h2>
  <div>
    {!!$post->body!!}
  </div>
  <hr>
  <small style="font-size:0.8rem;" >written on {{date('d/m/y h:i a', strtotime($post->created_at))}} by <strong class="text-info"> {{ $post->user->name }} </strong></small>
  <br>
  <span class="float-right"><a href="/posts" class="btn btn-primary mt-4">Go Back </a></span>
  @auth
    @if(Auth::user()->id == $post->user_id)
      <a href="/posts/{{$post->id}}/edit" class="btn btn-primary float-left mt-4">Edit</a>
      {!! Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'float-left ml-3 mt-4']) !!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
      {!! Form::close() !!}
    @endif  
  @endauth

@endsection