<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = [

        'table_number',
        'table_capicity'

    ];
}
