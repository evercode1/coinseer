<?php

namespace App\Queries;

use App\BlogResource;
use App\ResourceType;


class ExchangeListQuery
{

    public static function sendData()
    {

        $exchange = ResourceType::where('name', 'exchange')->first();

        $exchange = $exchange->id;

        $data = BlogResource::where('resource_type_id', $exchange)->get();

        return json_encode($data);

    }



}