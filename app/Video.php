<?php

namespace App;

use App\UtilityTraits\Levels;
use App\Category;
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


    public static function getCategoryName($model)
    {
        $categoryName = Category::where('id', $model->category_id)->first();

        $categoryName = ($categoryName['name']);

        return $categoryName;
    }

    public static function showLevelOf($model)
    {

        switch($model){

            case $model->level_id == 10:

                return 'beginner';
                break;

            case $model->level_id == 20:

                return 'intermediate';

            case $model->level_id == 30:

                return 'technical';

            default:

                return 'beginner';



        }



    }

    public function getCreatedAtAttribute($value)
    {

        return Carbon::parse($value)->format('F d') . ', ' . Carbon::parse($value)->format('Y');

    }

    public function category()
    {

        return $this->belongsTo('App\Category');

    }
}
