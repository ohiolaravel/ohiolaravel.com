<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $guarded = ['id'];

    protected $appends = ['google_maps_url'];

    public function meetings()
    {
        return $this->hasMany(Meeting::class);
    }

    public function getGoogleMapsUrlAttribute()
    {
        return "https://google.com/maps?q=$this->address+$this->city+$this->state+$this->zip";
    }
}
