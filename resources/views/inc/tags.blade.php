@if(count($tags)>0)
<!-- Top Categories -->
<div class="categories">
    <nav class="text-center">
        <ul>
          <li><a href="{{ route('posts.index') }}" class="categories_link" id="current_categories" title="All">All</a></li>
          @foreach($tags as $tag)
            <li><a href="{{route('tags.show',['id'=>$tag->id])}}" class="categories_link" title="{{$tag->name}}">{{$tag->name}}</a></li>
          @endforeach
        </ul>
    </nav>
</div>
@endif


{{-- <! Unlisted Categories - Press "#more" to show >
<div id="categories_unlisted" class="categories">
    <nav>
        <ul>
          <li><a href="{{route('tags.show',['id'=>$tags[$i]->id])}}" class="categories_link" title="{{$tags[$i]->name}}">{{$tags[$i]->name}}</a></li>
        </ul>
    </nav>
</div>

{{ $i=count($tags) }}
          @if(count($tags)<=10)
            @while( $i>=0 )
              <li><a href="{{route('tags.show',['id'=>$tags[$i]->id])}}" class="categories_link" title="{{$tags[$i]->name}}">{{$tags[$i]->name}}</a></li>
              {{ dd($i) }}
              {{ $i=$i-1 }}
            @endwhile
          @else
            <li><a class="categories_link" id="more"><i class="fa fa-angle-double-down fa-lg" id="sort_down"></i></a></li>
          @endif

--}}




