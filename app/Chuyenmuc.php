<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chuyenmuc extends Model
{
    protected $fillable = [
        'id','tencm', 'duongdancm',
    ];

    public function baiviets()
    {
        return $this->hasMany('App\Baiviet');
    }
}
