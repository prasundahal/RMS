<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tableorder extends Model
{
    protected $fillable = [
        'table_number',
        'table_capicity',
        'iteam_name',
        'iteam_price'


    ];
}
