@extends('layouts.app')

@section('content')
  <h2 class="mt-4 text-center ">Posts</h2>
  @if(count($posts)>0)
    @foreach($posts as $post)
    <div class="card card-body bg-light my-4">
    <h3> <a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
      <small style="font-size:0.8rem;">
        written on {{date('m/d/y', strtotime($post->created_at))}} by 
        <strong class="text-info"> {{ $post->user->name }} </strong>
      </small>

    </div>
    @endforeach
  @else
    <p>No posts found</p>
  @endif
@endsection