<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    //
    //protected $keyType = 'string';

    public $incrementing = true;

    protected $fillable = ['full_name', 'phone', 'sex', 'address', 'cars'];

    public function cars()
    {
        return $this->hasMany(Car::class,'client_id','id');
    }



}
