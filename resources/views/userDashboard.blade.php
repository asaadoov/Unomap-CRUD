@extends('layouts.app')

@section('content')
<section style="height: 100px;" >
</section>
<div class="container" style="width: 85vw;">
		<div class="row justify-content-center">
				<div class="col-md-10">
						<div class="card">
								<div class="card-header" style="background: #465772; color: #fff">Dashboard</div>
								<div class="card-body">
										@if (session('status'))
												<div class="alert alert-success" role="alert">
													{{ session('status') }}
												</div>
												@endif
												<div class="text-center">
													<a href="/posts/create" class="btn btn-primary ">Create Post</a> <br><br>
										@if(count($posts)>0)
												<span style="color: black;">Your Blog Posts! </span><br><br>
												</div>
												<table class="table table-striped">
														<tr style="color: #020202; ">
																<th>Title</th>
																<th></th>
																<th></th>
														</tr>
														@foreach ($posts as $post)
																<tr>
																		<th><a href="/posts/{{$post->id}}">{{$post->title}}</a></th>
																<th><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></th>
																<th>
																		{!! Form::open(['action'=>  ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'float-left ml-1']) !!}
																				{{Form::hidden('_method','DELETE')}}
																				{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
																		{!! Form::close() !!}
																</th>
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



