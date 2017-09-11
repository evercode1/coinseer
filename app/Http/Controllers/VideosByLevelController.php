<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UtilityTraits\Levels;

class VideosByLevelController extends Controller
{

    use Levels;

    public $levels = [];

    public function __construct()
    {

        $this->levels = $this->levels();


    }

    public function index($id)
    {

        $levelName = $this->getLevelName($id);

        $levelId = $id;

        return view('videos-by-level.index', compact('levelName', 'levelId'));

    }

    public function getLevelName($id)
    {

        return $this->levels[$id];

    }
}
