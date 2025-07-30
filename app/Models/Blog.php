<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Blog extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'slug',
        'published_at',
    ];

    public function getThumbnailUrlAttribute()
    {
        return $this->getFirstMediaUrl('thumbnail') ?: asset('default-thumbnail.jpg');
    }
}

