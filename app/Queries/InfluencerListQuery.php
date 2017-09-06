<?php

namespace App\Queries;

use Illuminate\Http\Request;
use App\Influencer;

use DB;

class InfluencerListQuery
{

    public static function sendData()
    {

        return json_encode(Influencer::all());


    }



}