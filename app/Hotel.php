<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    protected $fillable = [
        'name','mota','anh','gia','diachi','soluotxem','idDiadiem',
    ];


    public function DiaDiem(){
        return $this->belongsTo('App\DiaDiem','idDiadiem','id');
    }

    public function Tour(){
        return $this->hasMany('App\Tour','idKhachsan','id');
    }
}

