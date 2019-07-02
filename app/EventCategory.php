<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    public $timestamps = true;
    protected $fillable = ['name'];
    

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

}
