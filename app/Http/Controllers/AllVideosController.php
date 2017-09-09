<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\BlogResource;
use App\ResourceType;
use Illuminate\Support\Facades\Redirect;

class AllVideosController extends Controller
{
    public function index()
    {

        return view('all-videos.index');

    }

    public function show($id, $slug = '')
    {

        $video = BlogResource::where('id', $id)->first();

        $this->requireSlug($video, $slug);

        $this->checkResourceType($video);

        return view('all-videos.show', compact('video'));

    }

    private function checkResourceType($video)
    {

        $type = ResourceType::where('name', 'video')->first();

        $type = $type->id;

        if ($video->resource_type_id != $type) {

            throw new ModelNotFoundException();
        }

    }

    private function requireSlug($video, $slug)
    {

        if ($video->slug !== $slug) {

            return Redirect::route('all-videos.show', ['id' => $video->id,
                                                       'slug' => $video->slug], 301);
        }

    }

}
