<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    //protected $fillable = ['marque_name'];
    public function cars(){
        return $this->hasMany('App\Carinfo');
    }
}
