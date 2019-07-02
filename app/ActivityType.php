<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityType extends Model
{
    public $timestamps = true;
    protected $fillable = ['name'];
    

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
