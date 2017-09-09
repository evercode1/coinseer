<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Content;
use App\BlogResource;
use App\ResourceType;

class PagesController extends Controller
{
    public function index()
    {

        $type = ResourceType::where('name', 'video')->first();

        $type = $type->id;

        $video = BlogResource::latest()
                ->where('resource_type_id', $type)
                ->first();

        $post = Post::latest()->where('is_published', 1)->first();

        return view('pages.index', compact('post', 'video'));

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
