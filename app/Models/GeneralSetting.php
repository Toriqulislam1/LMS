<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = 'general_settings';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'key',
        'value',
    ];
}

