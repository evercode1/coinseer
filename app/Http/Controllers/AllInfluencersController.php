<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllInfluencersController extends Controller
{
    public function index()
    {

        return view('all-influencers.index');

    }
}
