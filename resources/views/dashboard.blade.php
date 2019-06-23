@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <a href="/posts/create" class="btn btn-primary">Create Post</a> <br><br>


                    @if(count($posts)>0)
                        Your Blog Posts! <br><br>
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <th>{{ $post->title }}</th>
                                <th><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></th>
                                <th>
                                    {!! Form::open(['action'=>  ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'float-left ml-2']) !!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                    {!! Form::close() !!}
                                </th>
                                <th>
                                    {!! Form::open(['action' => ['TagsController@store', $post->id],'method'=>'POST']) !!}
                                        <span class="form-inline">
                                            {{Form::label('tag','Tags',['class' => 'sr-only'])}}
                                            {{Form::text('tag','',['class' => 'form-control', 'placeholder' => 'Add tags separated by , '])}}
                                            {{Form::submit('Add Tags',['class'=>'btn btn-primary ml-2'])}}
                                        </span>
                                    {!! Form::close() !!}
                                </th>
                                {{-- <th><a href="/tags/create" class="btn btn-primary">Add tags</a> <br><br></th> --}}
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



