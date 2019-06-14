<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Binhluan extends Model
{
public function baiviets()
{
    return $this->belongsTo('App\Baiviet','mabv');
}
}
