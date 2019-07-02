<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityTag extends Model
{
    public $timestamps = true;
    protected $fillable = ['name', 'activity_id'];
    

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
    
}
