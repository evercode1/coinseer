@extends('layouts.master-guest-auth')

@section('meta')

    <meta name="description" content="{{ $levelName }} crytpocurrency videos">
    <meta name="keywords" content="{{ $levelName }} crytpocurrency videos">
    <meta name="author" content="CoinSeer">
    <title>Videos by Level</title>

@endsection

@section('blog-header')

    @include('layouts.blog-partials.blog-header')

@endsection

@section('content')



    <div class="col-sm-8 blog-main">


        <div class="container">

            <div class="col-md-8 mt-25">

                <div class="by-query-heading">

                Level: {{ $levelName }}

                </div>

                <br/>


                    <div class="blog-post">

                        <videos-by-level-grid
                                :level="{{ json_encode($levelId)}}">
                        </videos-by-level-grid>

                        <div class="pull-right"><a href="/all-videos">all videos...</a></div>

                        <br/>

                        <signature></signature>



                    </div><!-- end blog-post -->



            </div> <!-- end column -->


    </div> <!-- end container -->

    </div><!--  end blog-main -->



@endsection
