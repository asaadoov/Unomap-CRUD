{{-- @extends('posts.index')

@section('tags') --}}
  <h2 class="mt-4 text-center ">Tags</h2>
  <div class="list-group my-4" id="myList" role="tablist">
    @if(count($tags)>0)
    @foreach($tags as $tag)
  <a class="list-group-item list-group-item-action" data-toggle="list" href="/tags/{{$tag->id}}" role="tab">{{$tag->name}}</a>
    @endforeach
    </div>
    
    {{-- <div class="tab-content">
      <div class="tab-pane active" id="home" role="tabpanel">1</div>
      <div class="tab-pane" id="profile" role="tabpanel">...</div>
      <div class="tab-pane" id="messages" role="tabpanel">dws</div>
      <div class="tab-pane" id="settings" role="tabpanel">85</div>
    </div>
    --}}
    <script>
      $(function () {
        $('#myList a:last-child').tab('show')
      })
    </script>
    @endif
{{-- @endsection   --}}
