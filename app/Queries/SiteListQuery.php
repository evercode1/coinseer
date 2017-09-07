<?php

namespace App\Queries;

use App\BlogResource;
use App\ResourceType;


class SiteListQuery
{

    public static function sendData()
    {

        $site = ResourceType::where('name', 'website')->first();

        $site = $site->id;

        $data = BlogResource::where('resource_type_id', $site)->get();

        return json_encode($data);

    }



}