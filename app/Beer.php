<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = [
        'name',
        'brand',
        'price',
        'alcohol_content',
        'description'
    ];
}
