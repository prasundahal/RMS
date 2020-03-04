<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{protected $fillable = [
         'order_id',
        'order_name',
        'order_image',
        'order_price',
        'order_discription',
        'order_type',
        'order_time',
        'order_discount'
    ];
}
