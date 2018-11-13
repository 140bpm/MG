<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = [

        'customercode','bill_id','plan_id','seller_id','data_customer_id'

    ];

    public function customerPerson()
    {
        return $this->belongsTo('App\Persons', 'data_customer_id', 'id');
    }

    public function customerEmployed()
    {
        return $this->belongsTo('App\Employeds','seller_id','id');
    }

}
