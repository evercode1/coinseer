<?php

namespace App\Queries\GridQueries;
use DB;
use App\Queries\GridQueries\Contracts\DataQuery;

class InfluencerQuery implements DataQuery
{

    public function data($column, $direction)
    {


        $rows = DB::table('influencers')
                    ->select('id as Id',
                             'name as Name',
                             'url as Url',
                             'is_featured as Featured',
                             DB::raw('DATE_FORMAT(created_at,
                             "%m-%d-%Y") as Created'))
                    ->orderBy($column, $direction)
                    ->paginate(5);

             return $rows;


    }

    public function filteredData($column, $direction, $keyword)
    {



        $rows = DB::table('influencers')
                ->select('id as Id',
                    'name as Name',
                    'url as Url',
                    'is_featured as Featured',
                         DB::raw('DATE_FORMAT(created_at,
                                 "%m-%d-%Y") as Created'))
                ->where('name', 'like', '%' . $keyword . '%')
                ->orderBy($column, $direction)
                ->paginate(5);

            return $rows;

    }

}