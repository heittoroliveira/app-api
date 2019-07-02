<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $timestamps = true;
    protected $fillable = ['name', 'country_id'];
       
    
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }   

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    
}
