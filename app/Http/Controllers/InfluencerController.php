<?php

namespace App\Http\Controllers;

use App\Influencer;
use Illuminate\Support\Facades\Redirect;

class InfluencerController extends Controller
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

        return view('influencer.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        return view('influencer.create');

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

            'name' => 'required|unique:influencers|string|max:100',
            'url' => 'required|unique:influencers|string|max:100',
            'is_featured' => 'required|boolean',

        ]);

        $influencer = Influencer::create(['name' => $request->title,
                                              'url'   => $request->url,
                                              'is_featured' => $request->is_featured

        ]);

        $influencer->save();

        return Redirect::route('influencer.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Influencer $influencer)
    {

        return view('influencer.edit', compact('influencer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Influencer $influencer)
    {
        $this->validate($request, [

            'name' => 'required|string|max:40|unique:influencers,title,' .$influencer,
            'url' => 'required|string|max:100|unique:influencers,url',
            'is_featured' => 'required|boolean',

        ]);



        $influencer->update(['title' => $request->title,
                               'url'   => $request->url,
                               'is_featured' => $request->is_featured]);


        return Redirect::route('influencer.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        Influencer::destroy($id);

        return Redirect::route('influencer.index');

    }
}