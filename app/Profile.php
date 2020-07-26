<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Profile extends Model
{
    protected $fillable = [
        'about', 'picture' , 'tel' , 'facebook','user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
