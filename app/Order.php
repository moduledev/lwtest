<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $filliable = [
        'status','total_price'
    ];
}
