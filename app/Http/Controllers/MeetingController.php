<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meeting;

class MeetingController extends Controller
{
    public function show(Request $request, $id)
    {
        $meeting = Meeting::where('id', $id)->orWhere('slug', $id)->firstOrFail();
        return view('meeting.show', ['meeting' => $meeting]);
    }
}
