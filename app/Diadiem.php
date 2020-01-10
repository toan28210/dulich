<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diadiem extends Model
{
    protected $table = 'diadiems';
    protected $fillable = [
        'name','anh','mota','diachi'
    ];

    public function Hotel(){
        return $this->hasMany('App\Hotel','idDiadiem','id');
    }

    public function Tour(){
        return $this->hasMany('App\Tour','idDiadiem','id');
    }
}

