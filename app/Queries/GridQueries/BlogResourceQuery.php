<?php

namespace App\Queries\GridQueries;
use DB;
use App\Queries\GridQueries\Contracts\DataQuery;

class BlogResourceQuery implements DataQuery
{

    public function data($column, $direction)
    {

        $rows = DB::table('blog_resources')
                    ->select('blog_resources.id as Id',
                             'blog_resources.title as Title',
                             'blog_resources.url as Url',
                             'resource_types.name as Type',
                             'blog_resources.is_featured as Featured',
                             DB::raw('DATE_FORMAT(blog_resources.created_at,
                             "%m-%d-%Y") as Created'))
                    ->leftJoin('resource_types', 'resource_type_id', '=', 'resource_types.id')
                    ->orderBy($column, $direction)
                    ->paginate(5);

             return $rows;


    }

    public function filteredData($column, $direction, $keyword)
    {

        $rows = DB::table('blog_resources')
                ->select('blog_resources.id as Id',
                    'blog_resources.title as Title',
                    'blog_resources.url as Url',
                    'resource_types.name as Type',
                    'blog_resources.is_featured as Featured',
                         DB::raw('DATE_FORMAT(blog_resources.created_at,
                                 "%m-%d-%Y") as Created'))
                ->leftJoin('resource_types', 'resource_type_id', '=', 'resource_types.id')
                ->where('title', 'like', '%' . $keyword . '%')
                ->orderBy($column, $direction)
                ->paginate(5);

            return $rows;

    }

}