@extends('layouts.master-guest-auth')

@section('meta')

    <meta name="description" content="Bitcoin, ICO and Cryptocurrency Posts by Date">
    <meta name="keywords" content="Bitcoin, ICO and Cryptocurrency Posts by Date">
    <meta name="author" content="CoinSeer">
    <title>Bitcoin, ICO and Cryptocurrency Posts by Date</title>

@endsection

@section('blog-header')

    @include('layouts.blog-partials.blog-header')

@endsection

@section('content')

    <div class="col-sm-8 blog-main">

        <div class="container">

            <div class="col-md-8 mt-25">

                @foreach($posts as $post)

                    <div class="by-query-heading">

                    {{ $post->showMonth($post->published_at) }} - Posts

                    </div>

                    <div class="blog-post">

                        <a href="/post/{{ $post->id }}"><h1 class="post-title">{{ $post->title }}</h1></a>

                        <p class="blog-post-meta">{{ $post->published_at }} by <a href="#">{{ $post->user->name }}</a></p>

                        {!! $post->body !!}

                        <signature></signature>

                        <a href="/post/{{ $post->id }}-{{ $post->slug }}#disqus_thread">

                            <button class="btn btn-primary">

                                Show Comments

                            </button>

                        </a>

                    </div><!-- end blog-post -->

                @endforeach

                @include('layouts.blog-partials.pagination')

            </div> <!-- end column -->

        </div><!--  end blog-main -->


    </div> <!-- end container -->


@endsection

@section('scripts')

    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    <script src="/js/format_brackets.js"></script>

@endsection