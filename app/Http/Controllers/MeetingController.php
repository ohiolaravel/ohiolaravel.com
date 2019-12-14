<?php

namespace App\Http\Controllers;

use App\Meeting;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function show(Request $request, $id)
    {
        $meeting = Meeting::where('id', $id)
            ->orWhere('slug', $id)
            ->firstOrFail();

        return view('meeting.show', ['meeting' => $meeting]);
    }
}
