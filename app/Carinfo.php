<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Region;
use App\Marque;
use App\User;
use App\Country;

class Carinfo extends Model
{
    protected $fillable = ['car_price','car_photo','car_distance','car_date_construction','marque_id','city_id','country_id','user_id'];

    public function region(){
        return $this->belongsTo('App\Region' , 'city_id' , 'id');
    }

    public function marque(){
        return $this->belongsTo('App\Marque');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function country(){
        return $this->belongsTo('App\Country','country_id');
    }

    public function car_photo(){
        return $this->car_photo;
    }
}
