
 {{-- <small style="font-size:0.8rem;" >written on {{date('d/m/y h:i a', strtotime($post->created_at))}} by <strong class="text-info"> {{ $post->user->name }} </strong></small> --}}

  {{-- <span class="float-right"><a href="{{ 'posts.index' }}" class="btn btn-primary mt-4">Go Back </a></span> --}}

{{--   @auth
    @if(Auth::user()->id == $post->user_id)
      <a href="{{'post.edit',['id'=>$post->id]}}/edit" class="btn btn-primary float-left mt-4">Edit</a>
      {!! Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'float-left ml-3 mt-4']) !!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
      {!! Form::close() !!}
    @endif
  @endauth
 --}}

@section('content')
<!-- Main Content -->
<section id="content_permalink">
    <!-- Post -->
    <article class="post">
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
            <!-- Post Footer -->
            <footer class="post_footer">
              <small style="font-size: 0.8rem" >Written by <strong class="text-info mx-2" > {{ $post->user->name }} </strong></small>
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
            <div class="comment_box_avatar"><img src="images/icon_comment.jpg" width="250" height="171" alt="Icon"></div>
            <div class="comment_box_content">
                <p><span class="dark_font">Joshua Potter</span> - 12.2.2013, 7:30pm</p>
                <p>Phasellus congue vel est volutpat laoreet. Curabitur auctor ultricies sem ac vulputate. Fusce vulputate enim quis est suscipit, eget fermentum dui vulputate. Vivamus vehicula eros ut tempor tempor. Curabitur eu bibendum purus, ac pretium arcu. Vivamus sollicitudin vestibulum erat, at eleifend libero semper ac. </p>
            </div>
        </div>
        <div class="comment_box_reply">
            <div class="comment_box_icon"><i class="fa fa-comment-o"></i></div>
            <div class="comment_box_avatar"><img src="images/icon_comment.jpg" width="250" height="171" alt="Icon"></div>
            <div class="comment_box_content_reply">
                <p><span class="dark_font">Lucas Kriebel</span> - 12.2.2013, 7:49pm - <span class="reply">in reply to Joshua Potter</span></p>
                <p>Phasellus congue vel est volutpat laoreet. Curabitur auctor ultricies sem ac vulputate. Fusce vulputate enim quis est suscipit, eget fermentum dui vulputate. Vivamus vehicula eros ut tempor tempor. Curabitur eu bibendum purus, ac pretium arcu. Vivamus sollicitudin vestibulum erat, at eleifend libero semper ac. </p>
            </div>
        </div>
        <div class="comment_box">
            <div class="comment_box_icon"><i class="fa fa-comment-o"></i></div>
            <div class="comment_box_avatar"><img src="images/icon_comment.jpg" width="250" height="171" alt="Icon"></div>
            <div class="comment_box_content">
                <p><span class="dark_font">Lucas Kriebel</span> - 12.2.2013, 7:01pm</p>
                <p>Phasellus congue vel est volutpat laoreet. Curabitur auctor ultricies sem ac vulputate. Fusce vulputate enim quis est suscipit, eget fermentum dui vulputate. Vivamus vehicula eros ut tempor tempor. Curabitur eu bibendum purus, ac pretium arcu. Vivamus sollicitudin vestibulum erat, at eleifend libero semper ac. </p>
            </div>
        </div>
    </section>
    <section id="related_posts">
      <div class="footer_header">Related Posts</div>
        <div class="related_post_box" id="col_left">
            <div class="related_post_box_media" id="left">
                <a href="#"><div class="related_post_box_media_read_more"><img src="images/view_icon.png" alt="View Article Icon" title="View Article" /><br>View Article</div></a>
              <img src="images/post_photo.jpg" alt="Related Post 1">
            </div>
            <div class="related_post_box_content">
              <p><span class="dark_font_header"><a href="#">Year In Review 2013</a></span></p>
                <p>Phasellus congue vel est volutpat laoreet. Curabitur auctor ultricies sem ac vulputate.</p>
            </div>
        </div>
        <div class="related_post_box" id="col_middle">
            <div class="related_post_box_media" id="middle">
                <a href="#"><div class="related_post_box_media_read_more"><img src="images/view_icon.png" alt="View Article Icon" title="View Article" /><br>View Article</div></a>
              <img src="images/post_photo_2.jpg" alt="Related Post 2">
            </div>
            <div class="related_post_box_content">
              <p><span class="dark_font_header"><a href="#">Video: Year In Review...</a></span></p>
                <p>Phasellus congue vel est volutpat laoreet. Curabitur auctor ultricies sem ac vulputate.</p>
            </div>
        </div>
        <div class="related_post_box" id="col_right">
            <div class="related_post_box_media" id="right">
              <a href="#"><div class="related_post_box_media_read_more"><img src="images/view_icon.png" alt="View Article Icon" title="View Article" /><br>View Article</div></a>
              <img src="images/post_photo_3.jpg" alt="Related Post 3">
            </div>
            <div class="related_post_box_content">
              <p><span class="dark_font_header"><a href="#">Gallery: Year In Review...</a></span></p>
                <p>Phasellus congue vel est volutpat laoreet. Curabitur auctor ultricies sem ac vulputate.</p>
            </div>
        </div>
    </section>
</section>


@endsection



