@extends('layouts.app')
@section('content')

<!-- Post Background Blur - Replace background image for blurred background - IMPORTANT: Inline CSS to allow for multiple post.html pages -->
<!-- If no background, use 'images/transparent.png' -->
<div id="post_media_permalink_container" style="background-image: url('css/images/post_photo.jpg');">
    <img src="" alt="">
    <div id="post_media_permalink"></div>
</div>
<!-- Main Content -->
<section id="content_permalink">
  @include('inc.tags',compact('tags'))

    <!-- Post -->
    <article class="post">
        <!-- Post Media - Single Image -->
        <section class="post_media">
            <!-- Post Media Icon (TOP RIGHT) -->
            <div class="post_type" id="photo"></div>
            <!-- Post Media Image -->
            <img src="{{ asset('css/images/post_photo.jpg') }}" alt="Photo by Joshua Potter - http://www.flickr.com/photos/joshuapotter/" />
        </section>

        <!-- Post Content - Text -->
        <section class="post_content">
            <!-- Post Header -->
            <header class="post_header">
                <!-- Post Title -->
                <div class="post_title">{{ $post->title }}</div>
                <!-- Post Header -->
                <div class="post_date">{{date('M d, y', strtotime($post->created_at))}}</div>
            </header>
            <!-- Post Body -->
            <div class="post_body">
                {{ $post->body }}
            </div>
            <div class="text-center">
                <small style="font-size: 0.8rem" >Written by <strong class="text-info mx-2" > {{ $post->user->name }} </strong></small>
            </div>
            <!-- Post Footer -->
            <footer class="post_footer">
                <div class="post_footer_left_permalink">
                    <!-- User/Comment/Favorite Icons -->
                    <div class="post_comment_icons" id="post_comment_permalink">
                        <ul>
                            <li><a href="#" class="user_icon" title="Users"><i class="fa fa-user"></i>291</a></li>
                            <li><a href="#" class="comment_icon" title="Comments"><i class="fa fa-comment"></i>0</a></li>
                            <li><a href="#" class="heart_icon" title="Favorites"><i class="fa fa-heart"></i>60</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Social Media Buttons -->
                <div class="post_social_media">
                    <a href="#" class="share_facebook" title="Share on Facebook"><i class="fa fa-thumbs-up"></i>Share</a>
                    <a href="#" class="share_twitter" title="Share on Twitter"><i class="fa fa-twitter"></i>Tweet</a>
                </div>
                <br>
                <br>
                <br>
                @if (Auth()->user()->id == $post->user_id)
                <div class="my-1 d-flex justify-content-center">
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                    {!! Form::open(['action'=>  ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'float-left ml-1']) !!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete',['class'=>'btn btn-danger ml-2'])}}
                    {!! Form::close() !!}
                </div>
                @endif
            </footer>
        </section>
    </article>
    <section id="comments">
        <div class="footer_header">3 Comments</div>
        <div class="comment_box" id="write">
            <div class="comment_box_icon"><i class="fa fa-comment-o"></i></div>
            <div class="coment_box_content">
                <form>
                    <textarea name="message" placeholder="Say something..." id="comment_message"></textarea>
                    <input type="submit" value="Submit" class="contact_button" />
                </form>
            </div>
        </div>
        <div class="comment_box">
            <div class="comment_box_icon"><i class="fa fa-comment-o"></i></div>
            <div class="comment_box_avatar"><img src="{{ asset('css/images/icon_comment.jpg') }}" width="250" height="171" alt="Icon"></div>
            <div class="comment_box_content">
                <p><span class="dark_font">Joshua Potter</span> - 12.2.2013, 7:30pm</p>
                <p>Phasellus congue vel est volutpat laoreet. Curabitur auctor ultricies sem ac vulputate. Fusce vulputate enim quis est suscipit, eget fermentum dui vulputate. Vivamus vehicula eros ut tempor tempor. Curabitur eu bibendum purus, ac pretium arcu. Vivamus sollicitudin vestibulum erat, at eleifend libero semper ac. </p>
        </div>
        </div>
        <div class="comment_box_reply">
            <div class="comment_box_icon"><i class="fa fa-comment-o"></i></div>
            <div class="comment_box_avatar"><img src="{{ asset('css/images/icon_comment.jpg') }}" width="250" height="171" alt="Icon"></div>
            <div class="comment_box_content_reply">
                <p><span class="dark_font">Lucas Kriebel</span> - 12.2.2013, 7:49pm - <span class="reply">in reply to Joshua Potter</span></p>
                <p>Phasellus congue vel est volutpat laoreet. Curabitur auctor ultricies sem ac vulputate. Fusce vulputate enim quis est suscipit, eget fermentum dui vulputate. Vivamus vehicula eros ut tempor tempor. Curabitur eu bibendum purus, ac pretium arcu. Vivamus sollicitudin vestibulum erat, at eleifend libero semper ac. </p>
            </div>
        </div>
        <div class="comment_box">
            <div class="comment_box_icon"><i class="fa fa-comment-o"></i></div>
            <div class="comment_box_avatar"><img src="{{ asset('css/images/icon_comment.jpg') }}" width="250" height="171" alt="Icon"></div>
            <div class="comment_box_content">
                <p><span class="dark_font">Lucas Kriebel</span> - 12.2.2013, 7:01pm</p>
                <p>Phasellus congue vel est volutpat laoreet. Curabitur auctor ultricies sem ac vulputate. Fusce vulputate enim quis est suscipit, eget fermentum dui vulputate. Vivamus vehicula eros ut tempor tempor. Curabitur eu bibendum purus, ac pretium arcu. Vivamus sollicitudin vestibulum erat, at eleifend libero semper ac. </p>
            </div>
        </div>
    </section>
    {{-- Add related posts with tag --}}
    <section id="related_posts">
        <div class="footer_header">Related Posts</div>
        <div class="related_post_box" id="col_left">
            <div class="related_post_box_media" id="left">
                <a href="#"><div class="related_post_box_media_read_more"><img src="{{ asset('css/images/view_icon.png') }}" alt="View Article Icon" title="View Article" /><br>View Article</div></a>
                <img src="{{ asset('css/images/post_photo.jpg') }}" alt="Related Post 1">
            </div>
            <div class="related_post_box_content">
                <p><span class="dark_font_header"><a href="#">Year In Review 2013</a></span></p>
                <p>Phasellus congue vel est volutpat laoreet. Curabitur auctor ultricies sem ac vulputate.</p>
            </div>
        </div>
        <div class="related_post_box" id="col_middle">
            <div class="related_post_box_media" id="middle">
                <a href="#"><div class="related_post_box_media_read_more"><img src="{{ asset('css/images/view_icon.png') }}" alt="View Article Icon" title="View Article" /><br>View Article</div></a>
                <img src="{{ asset('css/images/post_photo_2.jpg') }}" alt="Related Post 2">
            </div>
            <div class="related_post_box_content">
                <p><span class="dark_font_header"><a href="#">Video: Year In Review...</a></span></p>
                <p>Phasellus congue vel est volutpat laoreet. Curabitur auctor ultricies sem ac vulputate.</p>
            </div>
        </div>
        <div class="related_post_box" id="col_right">
            <div class="related_post_box_media" id="right">
                <a href="#"><div class="related_post_box_media_read_more"><img src="{{ asset('css/images/view_icon.png') }}" alt="View Article Icon" title="View Article" /><br>View Article</div></a>
                <img src="{{ asset('css/images/post_photo_3.jpg') }}" alt="Related Post 3">
            </div>
            <div class="related_post_box_content">
                <p><span class="dark_font_header"><a href="#">Gallery: Year In Review...</a></span></p>
                <p>Phasellus congue vel est volutpat laoreet. Curabitur auctor ultricies sem ac vulputate.</p>
            </div>
        </div>
    </section>

</section>

@endsection



