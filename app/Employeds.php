<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employeds extends Model
{
    protected $fillable = [

        'employedcode','totalsells','data_employed_id'

    ];



    public function employedPerson()
    {
        return $this->belongsTo('App\Persons','data_employed_id','id');
    }

  public function employedUser()
  {
      return $this->belongsTo('App\User','employed_id','id');
  }

  public function customersEmployeds()
  {
      return $this->hasMany('App\Customers','seller_id','id');
  }
}
