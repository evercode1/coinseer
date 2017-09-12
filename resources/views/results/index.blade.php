@extends('layouts.master-guest-auth')


@section('content')



    <div class="col-sm-8 blog-main">


                        <div class="container">

                            <div class="col-md-8 mt-25">

                                <p class="blog-post-meta">Showing {{ $count }} video results for {{ $keyword }}:</p>

                                @forelse($videos as $video)

                                    <div class="blog-post">

                                        <h1 class="blog-post-title"><a href="/all-videos/{{ $video->Id }}">{{ $video->Title }}</a></h1>

                                        <p class="blog-post-meta">Added on {{ $video->Created }}</p>

                                        <p class="blog-post-meta"> Video by  {{ $video->Author }}</p>

                                        <p class="blog-post-meta"> Category:  {{ $video->Category }}</p>

                                        <p class="blog-post-meta"> Level:  {{ \App\Video::getLevelName($video) }}</p>

                                        <p class="blog-post-meta"><a href="/all-videos/{{ $video->Id }}">
                                                {!! \App\Utilities\Summarize::longSummary($video->Description) !!}</a></p>

                                        <p class="blog-post-meta"><a href="/all-videos/{{ $video->Id }}">click here to see video</a></p>

                                        <hr />


                </div><!-- end blog-post -->

                    @empty

                    <div class="blog-post">

                        <hr />

                        <p>Sorry, there are no results.  Please try another search query.</p>


                    </div><!-- end blog-post -->


                    @endforelse

                <nav class="text-center">
                    {{ $videos->links() }}
                </nav>

            </div> <!-- end column -->

        </div><!--  end blog-main -->



    </div> <!-- end container -->



@endsection

@section('scripts')

    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    <script src="/js/format_brackets.js"></script>

@endsection