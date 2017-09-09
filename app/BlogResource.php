<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class BlogResource extends Model
{
    protected $fillable = ['title',
                           'slug',
                           'author',
                           'description',
                           'embed_code',
                           'url',
                           'is_featured',
                           'resource_type_id'];

    public function getCreatedAtAttribute($value)
    {

        return Carbon::parse($value)->format('F d') . ', ' . Carbon::parse($value)->format('Y');

    }

    public function resourceTypes()
    {

        return $this->hasMany('App\ResourceType');

    }

}
