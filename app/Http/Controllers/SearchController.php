<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Queries\SearchQuery;


class SearchController extends Controller
{
    public function index(Request $request)
    {

        $keyword = $request->get('q');

        $videos = SearchQuery::sendData($keyword);

        $count = count($videos);

        return view('results.index', compact('videos', 'keyword', 'count'));


    }
}
