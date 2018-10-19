<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = [

        'customercode','bill_id','plan_id','seller_id',

    ];

    public function customersPersons()
    {
        return $this->hasMany('App\Persons', 'customer_id', 'id');
    }
}
