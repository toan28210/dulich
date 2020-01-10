<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tours';
    protected $fillable = [
        'name','mota','gia','giakm','anh','soluotxem','idKhachsan','idDiadiem','ngaykhoihanh','ngayketthuc','thoigian','gioithieu','phuongtien','noidi','noiden'
    ];
    public function DiaDiem(){
        return $this->belongsTo('App\DiaDiem','idDiadiem','id');
    }

    public function Hotel(){
        return $this->belongsTo('App\Hotel','idKhachsan','id');
    }


}
