<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'day_of_week', 
        'starting_time', 
        'end_time',
        'activity_id',
        'institution_id'
    ];
    
 
    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }   

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

   
}
