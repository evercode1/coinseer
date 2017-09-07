<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogResource extends Model
{
    protected $fillable = ['title',
                           'url',
                           'is_featured',
                           'resource_type_id'];

    public function resourceTypes()
    {

        return $this->hasMany('App\ResourceType');

    }

}
