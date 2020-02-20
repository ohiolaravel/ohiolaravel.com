<?php

namespace App\Http\Controllers;

use App\Meeting;

class WelcomeController extends Controller
{
    public function show()
    {
        $nextMeeting = Meeting::where('end_at', '>=', now())
            ->orderBy('start_at', 'asc')
            ->first();

        return view('welcome')
            ->withNextMeeting($nextMeeting);
    }
}
