@extends('layouts.master-guest-auth')

@section('meta')

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="https://www.coinseer.com/post/{{$post->id}}-{{ $post->slug }}" />
    <meta name="twitter:title" content="{{ $post->title }}" />
    <meta name="twitter:description" content="{{ \App\Utilities\Summarize::summaryWithoutTags($post->body) }}" />
    <meta name="twitter:image" content="{{ config('twitter-cards.thumbnail.url') }}" />

    <meta name="description" content="{{ $post->title }}">
    <meta name="keywords" content="{{ $post->title }}">
    <meta name="author" content="{{ $post->user->name }}">
    <title>{{ $post->title }}</title>

    @endsection

@section('content')


    <div class="col-sm-8 blog-main">


    <div class="container">


        <div class="col-md-8 mt-25">

            <div class="blog-post">

                <h2 class="blog-post-title">{{ $post->title }}</h2>

                <p class="blog-post-meta">{{ $post->published_at }} by <a href="#">{{ $post->user->name }}</a></p>

                {!! $post->body !!}

                <div class="bp-10">

                    <warning :message="{{ json_encode($articleWarning)}}"></warning>

                </div>

                <signature></signature>

                <div class="comments">

                <div id="disqus_thread"></div>

                </div>





            </div><!-- end blog-post -->

        </div> <!-- end column -->

    </div><!--  end blog-main -->



    </div> <!-- end container -->



@endsection

@section('scripts')

    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    <script src="/js/format_brackets.js"></script>

    <script id="dsq-count-scr" src="//coinseer.disqus.com/count.js" async></script>

    <script>

        var disqus_config = function () {
            this.page.url = 'http://www.coinseer.com/post/{{ $post->id }}';  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = '{{ $post->id }}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };

        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://coinseer.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();

    </script>

    @endsection