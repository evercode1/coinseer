<?php

namespace App\Queries;

use Illuminate\Http\Request;

use DB;

class InfluencerListQuery
{

    public static function sendData()
    {

        $rows = DB::table('influencers')
            ->select('id as Id',
                     'name as Name',
                     'url as Url')
            ->orderBy('id', 'asc')
            ->get();

        return json_encode($rows);


    }



}