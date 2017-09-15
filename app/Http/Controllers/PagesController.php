<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Content;
use App\Video;
use App\ResourceType;
use App\Influencer;

class PagesController extends Controller
{
    public function index()
    {


        $video = Video::latest()->first();

        $post = Post::latest()->where('is_published', 1)->first();

        $influencers = Influencer::orderBy('created_at', 'desc')->limit(3)->get();

        $generalWarning = 'general-warning';

        return view('pages.index', compact('post',
                                           'video',
                                           'influencers',
                                           'generalWarning'));

    }

    public function about()
    {

        $content = Content::where('name', 'About')->first();

        return view('content.show', compact('content'));


    }

    public function privacy()
    {

        $content = Content::where('name', 'Privacy Policy')->first();

        return view('content.show', compact('content'));


    }

    public function terms()
    {

        $content = Content::where('name', 'Terms Of Service')->first();

        return view('content.show', compact('content'));


    }
}
