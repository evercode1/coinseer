@extends('layouts.master-guest-auth')

@section('meta')

    <title>Bitcoin and Cryptocurrency Videos</title>

    @endsection

@section('content')

    <div class="col-sm-8 blog-main">

        <div class="container">

            <div class="col-md-8 mt-25">

                <div class="blog-post">

                    <h2 class="blog-post-title">{{ $video->title }}</h2>

                    <p>by {{ $video->author }}</p>

                    <P>Added on {{ $video->created_at }}</P>

                    <p class="blog-post-meta">{{ $video->description }}</p>

                    <div class="wrapper">
                        <div class="h_iframe">
                            <!-- a transparent image is preferable -->
                            <img class="ratio" src="/imgs/video/16x9.png"/>
                            <iframe src="http://www.youtube.com/embed/{{ $video->embed_code }}" frameborder="0" allowfullscreen></iframe>
                        </div>

                    </div>




                    <signature></signature>

                    <warning></warning>

                </div><!-- end blog-post -->

            </div> <!-- end column -->

        </div><!-- end container -->


    </div> <!--  end blog-main -->


    @endsection

