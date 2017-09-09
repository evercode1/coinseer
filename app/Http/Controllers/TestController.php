<?php

namespace App\Http\Controllers;

use App\UtilityTraits\Levels;
use Illuminate\Http\Request;
use App\ResourceType;

class TestController extends Controller
{
    use Levels;

    public function __construct()
    {

        $this->middleware(['auth', 'admin']);

    }

    public function index()
    {



        dd($this->levels());

    }
}
