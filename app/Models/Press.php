<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Press extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'thumbnail',
        'slug',
        'seo_title',
        'seo_description',
        'seo_keyword',
        'active',
    ];
}