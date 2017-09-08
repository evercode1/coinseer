<?php

namespace App\Queries;

use App\BlogResource;
use App\ResourceType;


class VideoListQuery
{

    public static function sendData()
    {

        $video = ResourceType::where('name', 'video')->first();

        $video = $video->id;

        $data = BlogResource::where('resource_type_id', $video)
                ->orderBy('created_at', 'desc')
                ->limit(4)
                ->get();

        return json_encode($data);

    }



}