<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $casts = [
        'text' => 'array',
        'image' => 'array',
        'video' => 'array'
    ];

    protected $fillable = [
        'order','section','text','video','image'
    ];
}
