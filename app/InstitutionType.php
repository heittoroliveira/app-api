<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstitutionType extends Model
{
    public $timestamps = true;
    protected $fillable = ['name'];
   
    public function institutions()
    {
        return $this->hasMany(Institution::class);
    }
}
