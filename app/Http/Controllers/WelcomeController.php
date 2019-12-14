<?php

namespace App\Http\Controllers;

use App\Meeting;

class WelcomeController extends Controller
{
    public function show()
    {
        $nextMeeting = Meeting::where('end_at', '>=', now())
            ->latest()
            ->first();

        return view('welcome')
            ->withNextMeeting($nextMeeting);
    }
}
