<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
        protected $fillable = [
        'title','sub_title','short_description', 'description', 'slug', 'price', 'discount','status'
    ];
}
