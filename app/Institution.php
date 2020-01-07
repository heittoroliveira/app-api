<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'abbreviation',
        'name',
        'history',
        'site',
        'address_id',
        'user_id',
        'institution_type_id',
        'institution_father_id',
        'address_name',
        'address_neighborhood',
        'address_number',
        'address_complement',
        'address_longitude',
        'address_latitude',
        'address_zip_code',
        'address_city',
        'address_state'
    ];

    protected $appends = ['is_father'];

    public function institutions()
    {
        return $this->hasMany(Institution::class, 'institution_father_id', 'id');
    }


    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function institutionType()
    {
        return $this->belongsTo(InstitutionType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function isFather()
    {
        return is_null($this->attributes['institution_father_id']);
    }

    public function getIsFatherAttribute()
    {
        return is_null($this->attributes['institution_father_id']);
    }
}
