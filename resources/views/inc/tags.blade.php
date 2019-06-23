{{-- @extends('posts.index')

@section('tags') --}}
  <h2 class="mt-4 text-center ">Tags</h2>
  <div class="list-group my-4" id="list-tab" role="tablist">
    @if(count($tags)>0)
    @foreach($tags as $tag)
  <a class="list-group-item list-group-item-action badge-primary my-2" id="list-{{ $tag->name }}-list" href="http://127.0.0.1:8000/tags/{{$tag->id}}" role="tab">{{$tag->name}}</a>
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
{{-- @endsection   --}}
