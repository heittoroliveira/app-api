<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'name', 
        'abbreviation', 
        'number',
        'history',
        'folder',
        'date',
        'starting_time',
        'end_time',
        'state',
        'site',
        'user_id',
        'institution_id',
        'address_id',
        'event_category_id'
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

    public function eventPrices()
    {
        return $this->hasMany(EventPrice::class);
    }

    public function eventCategory()
    {
        return $this->belongsTo(EventCategory::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
