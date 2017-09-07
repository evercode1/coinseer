<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllVideosController extends Controller
{
    public function index()
    {

        return view('all-videos.index');

    }
}
