<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class VideosByCategoryController extends Controller
{
    public function index($id)
    {
        $category = Category::where('id', $id)->pluck('name')->first();

        $catId = $id;

        return view('videos-by-category.index', compact('category', 'catId'));

    }
}
