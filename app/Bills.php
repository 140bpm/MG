<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $fillable = [

        'price','total_fees','current_fees','month_id','barcode',

    ];
}
