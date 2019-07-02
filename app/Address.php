<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'place', 
        'neighborhood', 
        'number',
        'complement',
        'longitude',
        'latitude',
        'zip_code',
        'city_id',
        'state_id',
        'country_id'
    ];
    

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function institutions()
    {
        return $this->hasMany(Institution::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }


}
