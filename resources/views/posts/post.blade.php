
<div class="blog-post">
  <h2 class="blog-post-title">{{ $post->title }}</h2>
  {{-- <p class="blog-post-meta">{{Carbon\carbon::parse($post->published_at)->diffForHumans()}}
    by <a href="#">KarnzZ</a> --}}
    {{-- {{dd(Carbon\carbon::parse($post->published_at), $post->created_at)}} --}}
<p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}
  by <a href="#">KarnzZ</a>
</p>
{{$post->body}}

</div>
