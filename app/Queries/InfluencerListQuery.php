<?php

namespace App\Queries;

use Illuminate\Http\Request;


use DB;

class InfluencerListQuery
{

    public static function sendData()
    {

        $rows = DB::table('influencers')
            ->select('id', 'name')
            ->orderBy('id', 'asc')
            ->get();

        return json_encode($rows);


    }



}