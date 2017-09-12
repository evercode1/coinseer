<?php

namespace App\Queries;

use DB;

class SearchQuery
{



    public static function sendData($keyword)
    {



        $rows = DB::table('videos')
                ->select('videos.id as Id',
                'videos.title as Title',
                'videos.slug as Slug',
                'videos.description as Description',
                'videos.author as Author',
                'videos.level_id as level_id',
                'categories.name as Category',
                DB::raw('DATE_FORMAT(videos.created_at,
                                 "%m-%d-%Y") as Created'))
                ->leftJoin('categories', 'category_id', '=', 'categories.id')
                ->where('videos.title', 'like', '%' . $keyword . '%')
                ->orWhere('categories.name', 'like', '%' . $keyword . '%')
                ->orderBy('id', 'asc')
                ->SimplePaginate(5);

        return $rows;




    }

}