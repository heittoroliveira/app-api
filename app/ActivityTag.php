<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityTag extends Model
{
    public $timestamps = true;
    protected $fillable = ['name','tag_id', 'activity_id'];
    

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
    public function tags()
    {
        return $this->belongsTo(Tag::class);
    }
    
}
