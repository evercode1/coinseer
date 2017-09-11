<?php

namespace App\Queries;

use Illuminate\Http\Request;
use App\Category;
use App\Videos;
use DB;

class VideosByLevelListQuery
{

    public static function sendData()
    {



        $rows = DB::table('videos')
                ->select(
                          'videos.level_id as level',

                          DB::raw('COUNT(videos.id) as count'))

                ->groupBy('videos.level_id')
                ->orderBy('videos.level_id', 'asc')
                ->get();

        foreach($rows as $row){

            $data[$row->level] = $row->count;

        }


        return $data;



    }



}