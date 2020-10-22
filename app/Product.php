<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    public $filliable = [
        'name', 'count', 'price'
    ];

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

}
