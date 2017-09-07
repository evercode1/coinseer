<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ResourceType;
use Illuminate\Support\Facades\Redirect;

class ResourceTypeController extends Controller
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

        return view('resource-type.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        return view('resource-type.create');

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

            'name' => 'required|unique:resource_types|string|max:100',

        ]);

        $resourceType = ResourceType::create(['name' => $request->name]);

        $resourceType->save();

        return Redirect::route('resource-type.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Influencer $influencer)
    {

        return view('resource-type.edit', compact('influencer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, ResourceType $resourceType)
    {
        $this->validate($request, [

            'name' => 'required|string|max:40|unique:influencers,name,' .$resourceType]);


        $resourceType->update(['title' => $request->name]);


        return Redirect::route('resource-type.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        ResourceType::destroy($id);

        return Redirect::route('resource-type.index');

    }
}
