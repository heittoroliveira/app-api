<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = true;
    protected $fillable = ['name'];
    

    public function activityTags()
    {
        return $this->hasMany(ActivityTag::class);
    }
    
}
