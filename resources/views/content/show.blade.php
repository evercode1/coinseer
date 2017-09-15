@extends('layouts.master-guest-auth')

@section('meta')

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="https://www.coinseer.com/{{ $content->name }}" />
    <meta name="twitter:title" content="CoinSeer {{ $content->name }}" />
    <meta name="twitter:description" content="CoinSeer {{ $content->description }}" />
    <meta name="twitter:image" content="{{ config('twitter-cards.thumbnail.url') }}" />

    <meta name="description" content="{{ $content->description }}">
    <meta name="keywords" content="{{ $content->name }} Coinseer">
    <meta name="author" content="CoinSeer">


    <title>Bitcoin and Cryptocurrency Articles</title>

@endsection

@section('content')


    <div class="col-sm-8 blog-main">


    <div class="container">


        <div class="col-md-8 mt-25">

            <div class="blog-post">

                <h2 class="blog-post-title">{{ $content->name }}</h2>

                <p class="blog-post-meta">Created on {{ $content->created_at->format('Y-m-d') }}</p>

                {!! $content->body !!}

                @if ($content->name == 'About')

                 <signature></signature>

                @endif

            </div><!-- end blog-post -->

        </div> <!-- end column -->

    </div><!--  end blog-main -->

    </div> <!-- end container -->



@endsection

