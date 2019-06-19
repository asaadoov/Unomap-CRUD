{{-- <a href="{{route('posts.index', $post->id)}}">{{$post->title}}</a></h3><small style="font-size:0.8rem;">written on {{date('m/d/y', strtotime($post->created_at))}} by <strong class="text-info"> {{ $post->user->name }} </strong></small> --}}

@extends('layouts.app')

@section('content')

  <header id="subheader">
      <div id="subheader_wrap">
          <!-- Icon Background -->
          <div id="icon_border"></div>
      </div>
  </header>
  <section id="content">
<!-- Icon -->
<div id="icon_wrap">
    <!-- Icon Image can be modified in #Icon CSS Rule -->
    <div id="icon">
        <a href="#" title="Icon"><div id="icon_link"></div></a>
    </div>
</div>
  @include('inc.messages')
  @include('inc.tags',compact('tags'))
  @if(count($posts)>0)
    @foreach($posts as $post)
      <!-- Post #1 -->
      <article class="post">
          <!-- Post Content - Text -->
          <section class="post_content">
              <!-- Post Header -->
              <header class="post_header">
                  <!-- Post Title -->
                  <div class="post_title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></div>
                  <!-- Post Header -->
                  <div class="post_date">{{date('M d, y', strtotime($post->created_at))}}</div>
              </header>
              <!-- Post Body -->
              <div class="post_body">
                  {{ $post->body }}
              </div>
              <!-- Post Footer -->
              <footer class="post_footer">
                  <div class="post_footer_left">
                      <!-- Read More Button-->
                      <small style="font-size: 0.8rem" >Written by <strong class="text-info mx-2" > {{ $post->user->name }} </strong></small>
                  </div>
                  <!-- Social Media Buttons -->
                  <div class="post_social_media">
                      <a href="#" class="share_facebook" title="Share on Facebook"><i class="fa fa-thumbs-up"></i>Share</a>
                      <a href="#" class="share_twitter" title="Share on Twitter"><i class="fa fa-twitter"></i>Tweet</a>
                  </div>
              </footer>
          </section>
      </article>
    @endforeach
  @else
    <p>No posts found</p>
  @endif
    </div>
</section>
<!-- Blur.js - https://github.com/jakiestfu/Blur.js -->
<script type="text/javascript" src="{{ asset('js/blur.min.js') }}"></script>
<!-- FlexSlider -->
<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
<!-- Custom Javascript -->
<script src="{{ asset('js/custom.js') }}"></script>
</div>
@endsection
