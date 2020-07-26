<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Region;
use App\City;
use App\Carinfo;

class Country extends Model
{
    public function cities(){
        return $this->hasMany('App\Region');
    }

    public function cars(){
        return $this->hasMany('App\Carinfo');
    }
}
