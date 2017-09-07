<?php

namespace App\Queries;

use App\BlogResource;
use App\ResourceType;


class AllBooksQuery
{

    public static function sendData()
    {

        $book = ResourceType::where('name', 'book')->first();

        $book = $book->id;

        $data = BlogResource::where('resource_type_id', $book)->get();

        return json_encode($data);

    }



}