<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeldanhgia extends Model
{
    protected $table='danhgia';
    public $timestamps=true;
    protected $fillable=[
        'id','id_tc','id_user'
    ];
}
