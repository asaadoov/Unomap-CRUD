@extends('layouts.app')

@section('content')
  <h2 class="mt-4 text-center ">Posts</h2>
  @if(count($posts)>0)
    @foreach($posts as $post)
    <div class="card card-body bg-light my-4">
    <h3> <a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
      <small>written on {{$post->created_at}}</small>
    </div>
    @endforeach
  @else
    <p>No posts found</p>
  @endif
@endsection