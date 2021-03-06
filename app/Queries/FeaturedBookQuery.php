<?php

namespace App\Queries;

use App\BlogResource;


class FeaturedBookQuery
{

    public static function sendFeaturedBook()
    {

        $book = ResourceType::where('name', 'book')->first();

        $book = $book->id;

        $data = BlogResource::where('resource_type_id', $book)
                ->where('is_featured', 1)->first();

        return json_encode($data);

    }



}