@extends('layouts.master-guest-auth')

@section('meta')

    <meta name="description" content="The latest news on cyrptocurrencies, including top trends, influencers and market movement.  Updated daily.">
    <meta name="keywords" content="bitcoin, ico, crytpocurrencies">
    <meta name="author" content="CoinSeer">
    <title>Bitcoin, ICO and Cryptocurrency Articles</title>

@endsection


@section('blog-header')

    @include('layouts.blog-partials.blog-header')

@endsection

@section('content')

    <div class="col-sm-8 blog-main">

        <div class="container">

            <!-- start video column -->

            <div class="col-md-8 mt-25">

                <div class="blog-post">

                    <h2 class="blog-post-title">{{ $video->title }}</h2>

                    <p>by {{ $video->author }}</p>

                    <P>Added on {{ $video->created_at }}</P>


                    <p class="blog-post-meta">{{ $video->description }}</p>

                    <div>
                        <div class="video-container">

                        <iframe src="https://www.youtube.com/embed/{{ $video->embed_code }}" frameborder="0" allowfullscreen></iframe>

                        </div>

                    </div>

                    <div class="pull-right mt-10 bm-10"><a href="/all-videos">more videos...</a></div>
                    <br />
                    <signature></signature>

                    <warning></warning>

                </div>

                <hr class="divider" />

            </div> <!-- end video column -->


            <div class="col-md-8 mt-25">



                <div class="blog-post">

                    <a href="/post/{{ $post->id }}"><h1 class="post-title">{{ $post->title }}</h1></a>

                    <p class="blog-post-meta">{{ $post->published_at }} by <a href="/about">{{ $post->user->name }}</a></p>

                    {!! $post->body !!}

                    <div class="bp-10">

                        <warning></warning>

                    </div>



                    <a href="/post/{{ $post->id }}-{{ $post->slug }}#disqus_thread">

                        <button class="btn btn-primary">

                            Show Comments

                        </button>

                    </a>

                    <signature></signature>


                </div><!-- end blog-post -->



            </div> <!-- end column -->

        </div><!-- end container -->



    </div> <!--  end blog-main -->



@endsection

@section('scripts')

    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    <script src="/js/format_brackets.js"></script>


    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>



@endsection