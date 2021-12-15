<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeltieuchi extends Model
{
    protected $table='tieuchi';
    public $timestamps=false;
    protected $fillable=[
        'id','tentieuchi','diem'
    ];
}
