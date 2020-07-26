<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Country;
use App\Carinfo;

class City extends Model
{
    public function country(){
        return $this->belongsTo('App\Country', 'country_id');
    }
    public function cars(){
        return $this->hasMany('App\Carinfo');
    }

}
