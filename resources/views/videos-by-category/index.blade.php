@extends('layouts.master-guest-auth')

@section('meta')

    <meta name="description" content="{{ $category }} Posts">
    <meta name="keywords" content="{{ $category }}">
    <meta name="author" content="CoinSeer">
    <title>Videos by Category</title>

@endsection

@section('blog-header')

    @include('layouts.blog-partials.blog-header')

@endsection

@section('content')



    <div class="col-sm-8 blog-main">


        <div class="container">

            <div class="col-md-8 mt-25">

                <div class="by-query-heading">

                Category: {{ $category }}

                </div>

                <br/>


                    <div class="blog-post">

                        <videos-by-category-grid
                                :category="{{ json_encode($catId)}}">
                        </videos-by-category-grid>

                        <div class="pull-right"><a href="/all-videos">all videos...</a></div>

                        <br/>

                        <signature></signature>



                    </div><!-- end blog-post -->



            </div> <!-- end column -->


    </div> <!-- end container -->

    </div><!--  end blog-main -->



@endsection
