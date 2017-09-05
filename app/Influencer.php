<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Influencer extends Model
{
    protected $fillable = ['name', 'url', 'is_featured'];
}
