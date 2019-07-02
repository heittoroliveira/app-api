<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventPrice extends Model
{
    public $timestamps = true;
    protected $fillable = ['price', 'type', 'event_id'];
    

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
