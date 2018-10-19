<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationalities extends Model
{
    protected $fillable = [

        'country',

    ];


    public function nationalitiesPersons()
    {
        return $this->hasMany('App\Comment', 'nationality_id', 'id');
    }
}
