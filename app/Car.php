<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $keyType = 'string';
//    public function comments()
//    {
//        return $this->hasMany(Client::class);
//    }

    public $incrementing = true;

    protected $fillable = ['brand', 'model', 'color', 'registration_number', 'client_id'];

    public function client()
    {
        return $this->belongsTo(Client::class,'client_id','id');
    }
}
