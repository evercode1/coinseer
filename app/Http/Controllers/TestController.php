<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ResourceType;

class TestController extends Controller
{

    public function __construct()
    {

        $this->middleware(['auth', 'admin']);

    }

    public function index()
    {


        dd('test');

    }
}
