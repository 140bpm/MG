<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employeds extends Model
{
    protected $fillable = [

        'employedcode','totalsells','user_id',

    ];

    public function sellerPersons()
    {
        return $this->hasMany('App\Customers','seller_id', 'id');
    }

    public function employedsPersons()
    {
        return $this->hasMany('App\Persons','employed_id','id');
    }
}
