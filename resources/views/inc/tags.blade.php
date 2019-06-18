
<h2 class="mt-4 text-center">Tags</h2>
<div class="list-group list-group-horizontal my-4" role="tablist">
  @if(count($tags)>0)
    <a href="{{ route('posts.index')}}" class="list-group-item list-group-item-action badge-primary my-2" role="tab">All</a>
  @foreach($tags as $tag)
    <a href="{{ route('tags.show',['id'=>$tag->id])}}" class="list-group-item list-group-item-action badge-primary my-2" role="tab">{{$tag->name}}</a>
  @endforeach
</div>

  <script>
    $('#list-tab a').on('click', function (e)
    {
      e.preventDefault()
      $(this).tab('show')
    })
  </script>
  @endif
