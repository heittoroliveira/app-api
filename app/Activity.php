<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public $timestamps = true;
    protected $fillable = ['name', 'history', 'activity_type_id'];
    

    public function activityType()
    {
        return $this->belongsTo(ActivityType::class);
    }

    public function activityTags()
    {
        return $this->hasMany(ActivityTag::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedules::class);
    }
   
}
