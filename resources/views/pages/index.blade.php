@extends('layouts.master-guest-auth')

@section('meta')

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="https://www.coinseer.com" />
    <meta name="twitter:title" content="CoinSeer Crypto Blog" />
    <meta name="twitter:description" content="Bitcoin and Cryptocurrency Videos and Articles. Updated Daily" />
    <meta name="twitter:image" content="{{ config('twitter-cards.thumbnail.url') }}" />

    <meta name="description" content="The latest videos and articles on cyrptocurrencies, including top trends, influencers and market movement.  Updated daily.">
    <meta name="keywords" content="bitcoin, ico, crytpocurrencies, videos, articles">
    <meta name="author" content="CoinSeer">
    <title>Bitcoin, ICO and Cryptocurrency video directory</title>

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



                </div>

                <div class="text-center mt-20 mb-40">

                    <a href="/all-videos"><i class="fa fa-video-camera" aria-hidden="true"></i>  Click here for all videos</a>

                </div>




                <hr class="divider" />


            </div> <!-- end video column -->




            <div class="col-md-8 mt-25">

              Featured Article

                <div class="blog-post">

                    <a href="/post/{{ $post->id }}"><h1 class="post-title">{{ $post->title }}</h1></a>

                    <p class="blog-post-meta">{{ $post->published_at }} by <a href="/about">{{ $post->user->name }}</a></p>

                    {!! $post->body !!}





                    <a href="/post/{{ $post->id }}-{{ $post->slug }}#disqus_thread">

                        <button class="btn btn-primary mt-20 mb-20">

                            Show Comments

                        </button>

                    </a>



                    <div class="text-center mt-20  mb-40">

                        <a href="/all-articles"><i class="fa fa-newspaper-o" aria-hidden="true"></i>  Click here for all articles</a>

                    </div>

                    <hr class="divider" />






                </div><!-- end blog-post -->



            </div> <!-- end column -->

            <!-- begin Influncers -->

            <div class="col-md-8 mt-25">

                Recently Added Influencers

                <div class="blog-post">

                    <a href="/all-influencers"><h1 class="post-title">Influencers</h1></a>

                    <p class="blog-post-meta">These are some interesting people to follow on Twitter:</a></p>
                    <ul>

                    @foreach($influencers as $influencer)



                         <li><a href="{{ $influencer->url }}" target="_blank">{{ $influencer->name }}</a></li>



                        @endforeach


                    </ul>

                    <div class="text-center mt-20 mb-40">

                        <a href="/all-influencers"><i class="fa fa-users" aria-hidden="true"></i>  Click here for all Influencers</a>

                    </div>

                    <hr class="divider" />


                    <div class="bp-10">

                        <warning :message="{{ json_encode($generalWarning)}}"></warning>

                    </div>


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