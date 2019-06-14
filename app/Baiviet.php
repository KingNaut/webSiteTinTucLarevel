<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baiviet extends Model
{
    protected $fillable = [
        'id','tenbv', 'noidungbv', 'linkanhmota','luotxem','ngaydang','macm','matv','tomtatnoidung',
    ];
    public function binhluans()
    {
        return $this->hasMany('App\Binhhuan');
    }

    public function chuyenmucs()
    {
        return $this->belongsTo('App\Chuyenmuc' ,'macm');
        }
    public function users()
    {
        return $this->belongsTo('App\User','matv');
    }

}
