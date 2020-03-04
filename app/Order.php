<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{protected $fillable = [
        'table_number',
        'order_name',
        'order_image',
        'order_price'


        ];
}
