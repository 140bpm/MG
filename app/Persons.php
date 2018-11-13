<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    protected $fillable = [

        'name','lastname','dni','birth','adress','sex','civil_state','nationality_id','employed_id','customer_id',

    ];

    public function nationalityPerson()
    {
        return $this->belongsTo('App\Nationalities','nationality_id', 'id');
    }

    public function employedPerson()
    {
        return $this->hasMany('App\Employeds','data_employed_id','id');
    }

    public function customersPersons()
    {
        return $this->hasMany('App\Customers', 'data_customer_id', 'id');
    }


}
