<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

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

    public static function boot()
    {
        parent::boot();

        static::creating(function ($activity) {
            $activity->slug = Carbon::parse($activity->start_at)->toDateString();
        });
    }
}