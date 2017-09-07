<?php

namespace App\Queries;

use App\BlogResource;
use App\ResourceType;


class WalletListQuery
{

    public static function sendData()
    {

        $wallet = ResourceType::where('name', 'wallet')->first();

        $wallet = $wallet->id;

        $data = BlogResource::where('resource_type_id', $wallet)->get();

        return json_encode($data);

    }



}