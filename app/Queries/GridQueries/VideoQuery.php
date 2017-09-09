<?php

namespace App\Queries\GridQueries;
use DB;
use App\Queries\GridQueries\Contracts\DataQuery;

class VideoQuery implements DataQuery
{

    public function data($column, $direction)
    {

        $rows = DB::table('videos')
                    ->select('videos.id as Id',
                             'videos.title as Title',
                             'videos.author as Author',
                             'videos.slug as Slug',
                             'videos.url as Url',
                             'categories.name as Category',
                             'videos.level_id as Level',
                             'videos.is_featured as Featured',
                             DB::raw('DATE_FORMAT(videos.created_at,
                             "%m-%d-%Y") as Created'))
                    ->leftJoin('categories', 'category_id', '=', 'categories.id')
                    ->orderBy($column, $direction)
                    ->paginate(5);

             return $rows;


    }

    public function filteredData($column, $direction, $keyword)
    {


        if ($column === 'Added'){

            $column = 'videos.created_at';

        }



        $rows = DB::table('videos')
                ->select('videos.id as Id',
                    'videos.title as Title',
                    'videos.author as Author',
                    'videos.slug as Slug',
                    'videos.url as Url',
                    'categories.name as Category',
                    'videos.level_id as Level',
                    'videos.is_featured as Featured',
                         DB::raw('DATE_FORMAT(videos.created_at,
                                 "%m-%d-%Y") as Created'))
                ->leftJoin('categories', 'category_id', '=', 'categories.id')
                ->Where('Title', 'like', '%' . $keyword . '%')
                ->orWhere('Author', 'like', '%' . $keyword . '%')
                ->orWhere('categories.name', 'like', '%' . $keyword . '%')
                ->orderBy($column, $direction)
                ->paginate(5);

            return $rows;

    }

}