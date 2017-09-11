<?php

namespace App\Queries\GridQueries;

use Illuminate\Http\Request;
use App\Queries\GridQueries\VideoByLevelQuery;

class VideoLevelGridQuery
{
    public static function sendData(Request $request, VideoByLevelQuery $query)
    {
        // set sort by column and direction

        list($column, $direction) = static::setSort($request, $query);


        // search by keyword with column sort

        if ($request->has('keyword')) {

            return static::keywordFilter($request, $query, $column, $direction);

        }

        // return data

        return static::getData($query, $column, $direction, $request);

    }

    public static function setSort(Request $request, $query)
    {
        // set sort by column with default

        list($column, $direction) = static::setDefaults($query);

        if ($request->has('column')) {

            $column = $request->get('column');


            if ($column == 'id') {

                $direction = $request->get('direction') == 1 ? 'asc' : 'desc';

                return [$column, $direction];

            } else {

                $direction = $request->get('direction') == 1 ? 'desc' : 'asc';

                return [$column, $direction];

            }
        }

        return [$column, $direction];

    }

    public static function setDefaults($query)
    {

        switch ($query){

                case $query instanceof VideoByLevelQuery :

                $column = 'videos.created_at';
                $direction = 'desc';
                break;

            default:
                $column = 'id';
                $direction = 'asc';
                break;

        }

        return list($column, $direction) = [$column, $direction];

    }

    public static function keywordFilter(Request $request, $query, $column, $direction)
    {
        $keyword = $request->get('keyword');

        $level = $request->get('level');


        return response()->json($query->filteredData($column, $direction, $keyword, $level));

    }

    public static function getData($query, $column, $direction, $request)
    {

        $level = $request->get('level');

        return response()->json($query->data($column, $direction, $level));

    }

}