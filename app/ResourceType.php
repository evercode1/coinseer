<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResourceType extends Model
{

    protected $fillable = ['name'];

    public static function getResourceTypeName($resourceTypeId)
    {
        $resourceTypeName = static::where('id', $resourceTypeId)->first();

        $resourceTypeName = ($resourceTypeName['name']);

        return $resourceTypeName;
    }


    public function blogResource()
    {

        return $this->belongsTo('App\BlogResource');


    }
}
