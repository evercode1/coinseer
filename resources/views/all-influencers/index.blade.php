@extends('layouts.master-guest-auth')

@section('meta')

    <title>Influnceners</title>

    @endsection

@section('content')

    <div class="col-sm-8 blog-main">

    <div class="container">

        <div class="col-md-8 mt-25">

            <div class="blog-post">

                <h2 class="blog-post-title">Influencers</h2>

                <p class="blog-post-meta">A list of influential twitter users</p>


                <all-influencers></all-influencers>

                <signature></signature>

                <warning></warning>

            </div><!-- end blog-post -->

        </div> <!-- end column -->

    </div><!-- end container -->


    </div> <!--  end blog-main -->


    @endsection