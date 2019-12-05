<?php

namespace App\Http\Controllers;

use App\Meeting;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show()
    {
        return view('welcome')->withMeetings(Meeting::latest()->take(2)->get());
    }
}
