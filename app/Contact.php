<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'name', 
        'phone', 
        'email',
        'whatsapp',
        'event_id',
        'institution_id'
    ];
    

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
