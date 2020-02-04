<?php

namespace App\Http\Controllers;

use App\Http\Requests\MeetingStoreFormRequest;
use App\Meeting;
use App\Location;
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

    public function create()
    {
        $locations = Location::all();

        return view('meeting.create')->with('locations', $locations);
    }

    public function store(MeetingStoreFormRequest $request)
    {
        // validation

        $meeting = Meeting::create([
            'title' => request()->title,
            'description' => request()->description,
            'image_url' => request()->image_url,
            'start_at' => request()->start_at,
            'end_at' => request()->end_at,
            'location_id' => request()->location_id,
            'note' => request()->note,
        ]);

        return redirect('/home');
    }
}
