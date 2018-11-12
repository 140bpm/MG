<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [

    	'productname', 'type', 'productdescription','price','brand'

    ];
}
