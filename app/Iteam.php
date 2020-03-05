<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iteam extends Model
{
    protected $fillable = [
        'id',
        'iteam_name',
        'iteam_price',
        'iteam_discription',
        'iteam_type',
        'iteam_time',
        'image'
    ];
}
