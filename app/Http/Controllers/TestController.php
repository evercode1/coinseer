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

      $url = config('twitter-cards.thumbnail.url');

        dd($url);

        return 'here';

    }

    public function mail()
    {




    }
}
