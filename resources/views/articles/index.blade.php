@extends('layouts.master-guest-auth')

@section('meta')

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="https://www.coinseer.com/articles" />
    <meta name="twitter:title" content="CoinSeer Articles" />
    <meta name="twitter:description" content="All Bitcoin and Cryptocurrency Articles" />
    <meta name="twitter:image" content="{{ config('twitter-cards.thumbnail.url') }}" />

    <meta name="description" content="All Bitcoin and Cryptocurrency Videos">
    <meta name="keywords" content="bitcoin videos, cryptocurrency videos">
    <meta name="author" content="CoinSeer">


    <title>Bitcoin and Cryptocurrency Articles</title>

    @endsection

@section('content')

    <div class="col-sm-8 blog-main">

        <div class="container">

            <div class="col-md-8 mt-25">

                <div class="blog-post">

                    <h2 class="blog-post-title">Articles</h2>

                    <p class="blog-post-meta">All Bitcoin and Cryptocurrency Articles</p>


                    <all-articles></all-articles>


                </div><!-- end blog-post -->

            </div> <!-- end column -->

        </div><!-- end container -->


    </div> <!--  end blog-main -->


    @endsection