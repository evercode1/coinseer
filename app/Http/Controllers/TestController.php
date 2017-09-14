<?php

namespace App\Http\Controllers;

use App\UtilityTraits\Levels;
use Illuminate\Http\Request;
use App\ResourceType;
use App\Events\RegistrationCompleted;
use App\User;

class TestController extends Controller
{
    use Levels;

    public function __construct()
    {

        $this->middleware(['auth', 'admin']);

    }

    public function index()
    {


        return view('test.index');

    }

    public function mail()
    {




    }
}
