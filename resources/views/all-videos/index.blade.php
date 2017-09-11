@extends('layouts.master-guest-auth')

@section('meta')

    <title>Bitcoin and Cryptocurrency Videos</title>

    @endsection

@section('content')

    <div class="col-sm-8 blog-main">

        <div class="container">

            <div class="col-md-8 mt-25">

                <div class="blog-post">

                    <h2 class="blog-post-title">Videos</h2>

                    <p class="blog-post-meta">All Bitcoin and Cryptocurrency Videos</p>


                    <all-videos></all-videos>

                    <signature></signature>

                    <warning></warning>

                </div><!-- end blog-post -->

            </div> <!-- end column -->

        </div><!-- end container -->


    </div> <!--  end blog-main -->


    @endsection