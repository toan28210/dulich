<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Binhluan extends Model
{
    protected $table = 'binhluans';
    protected $fillable = [
        'name','email','con_comment','idTour','idKhachsan','idDiadiem'
    ];
}
