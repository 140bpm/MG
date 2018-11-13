<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employeds extends Model
{
    protected $fillable = [

        'employedcode','totalsells','user_id','data_employed_id'

    ];



    public function employedPerson()
    {
        return $this->belongsTo('App\Persons','data_employed_id','id');
    }

    public function customerEmployed()
    {
        return $this->hasMany('App\Employeds', 'seller_id', 'id');
    }
}
