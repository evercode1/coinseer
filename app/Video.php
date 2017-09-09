<?php

namespace App;

use App\UtilityTraits\Levels;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Video extends Model
{
    use Levels;

    protected $fillable = ['title',
                           'slug',
                           'author',
                           'description',
                           'embed_code',
                           'url',
                           'is_featured',
                           'category_id',
                           'level_id'];

    public function getCreatedAtAttribute($value)
    {

        return Carbon::parse($value)->format('F d') . ', ' . Carbon::parse($value)->format('Y');

    }

    public function category()
    {

        return $this->belongsTo('App\Category');

    }
}
