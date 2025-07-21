<?php

namespace App\Models;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

use Illuminate\Database\Eloquent\Model;

class Course extends Model implements HasMedia
{
     use InteractsWithMedia;
        protected $fillable = [
        'title','sub_title','short_description', 'description', 'slug', 'price', 'discount','status'
    ];
}
