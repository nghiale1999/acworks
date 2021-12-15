<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeluser extends Model
{
    protected $table='users';
    public $timestamps=false;
    protected $fillable=[
        'id','name','email','chuvu','level','password'
    ];
}
