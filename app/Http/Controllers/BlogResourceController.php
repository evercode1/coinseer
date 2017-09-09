<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogResource;
use App\ResourceType;
use Illuminate\Support\Facades\Redirect;

class BlogResourceController extends Controller
{
    public function __construct()
    {

        $this->middleware(['auth', 'admin']);


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        return view('blog-resource.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        $resourceTypes = ResourceType::all();

        return view('blog-resource.create', compact('resourceTypes'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $this->validate($request, [

            'title' => 'required|unique:blog_resources|string|max:100',
            'url' => 'required|unique:blog_resources|string|max:100',
            'author' => 'string',
            'description' => 'string|max:400',
            'embed_code' => 'string|max:1200',
            'resource_type_id' => 'required|numeric',
            'is_featured' => 'required|boolean',

        ]);

        $slug = str_slug($request->title, "-");

        $blogresource = BlogResource::create(['title' => $request->title,
                                              'url'   => $request->url,
                                              'slug' => $slug,
                                              'author' => $request->author,
                                              'description' => $request->description,
                                              'embed_code' => $request->embed_code,
                                              'resource_type_id' => $request->resource_type_id,
                                              'is_featured' => $request->is_featured
        ]);

        $blogresource->save();

        return Redirect::route('blogresource.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(BlogResource $blogresource)
    {

        $resourceTypeId = $blogresource->resource_type_id;

        $resourceTypeName = ResourceType::getResourceTypeName($blogresource->resource_type_id);

        $resourceTypes = ResourceType::all();

        return view('blog-resource.edit', compact('blogresource',
                                                  'resourceTypeId',
                                                  'resourceTypeName',
                                                  'resourceTypes'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, BlogResource $blogresource)
    {

        $this->validate($request, [

            'title' => 'required|string|max:40|unique:blog_resources,title,' .$blogresource->id,
            'url' => 'required|string|max:100|unique:blog_resources,url,' .$blogresource->id,
            'author' => 'string',
            'description' => 'string|max:400',
            'embed_code' => 'string|max:1200',
            'resource_type_id' => 'required|numeric',
            'is_featured' => 'required|boolean',

        ]);

        $slug = str_slug($request->title, "-");


        $blogresource->update(['title' => $request->title,
                               'url'   => $request->url,
                               'slug' => $slug,
                               'author' => $request->author,
                               'description' => $request->description,
                               'embed_code' => $request->embed_code,
                               'resource_type_id' => $request->resource_type_id,
                               'is_featured' => $request->is_featured
        ]);


        return Redirect::route('blogresource.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        BlogResource::destroy($id);

        return Redirect::route('blogresource.index');

    }
}

