<?php

namespace App\Models;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

use Illuminate\Database\Eloquent\Model;

class Course extends Model implements HasMedia
{
     use InteractsWithMedia;
        protected $fillable = [
        'title','sub_title','short_description', 'description', 'slug', 'price', 'discount','status','start_date', 'end_date'
    ];

    public function getImageUrlAttribute()
    {
        return $this->getFirstMediaUrl('thumbnail_course') ?: asset('default-image.jpg');
    }
    public function getFeatureImageUrlAttribute()
    {
        return $this->getFirstMediaUrl('feature_course') ?: asset('default-feature-image.jpg');
    }
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];


}
