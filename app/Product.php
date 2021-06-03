<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    public function getImageUrlAttribute()
    {
        $url = Storage::url($this->attributes['image']);
        return $url;
    }
}
