<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class costumer extends Model
{
    protected $fillable =
    [
        'costumer_id',
        'costumer_table',
        'costumer_image',
        'costumer_price',
        'costumer_discription',
        'costumer_username',

    ];
    }

