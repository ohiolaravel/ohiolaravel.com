<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $guarded = ['id'];

    protected $dates = ['start_at', 'end_at'];

    protected $with = ['location'];

    protected $appends = ['display_date'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function getDisplayDateAttribute()
    {
        return $this->start_at->format('M jS - ga');
    }
}
