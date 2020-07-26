<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Carinfo;
use App\Country;

class Region extends Model
{
    public function cars(){
        return $this->belongsTo('App\Carinfo');
    }

    public function country(){
        return $this->belongsTo('App\Country');
    }
}
