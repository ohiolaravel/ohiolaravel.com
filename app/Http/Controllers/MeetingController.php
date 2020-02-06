<?php

namespace App\Http\Controllers;

use App\Meeting;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Requests\MeetingStoreFormRequest;

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
        $path = request()->file('image')->store('public');

        Meeting::create([
            'title' => request()->title,
            'description' => request()->description,
            'image_path' => $path,
            'start_at' => Carbon::parse(request()->start_at),
            'end_at' => Carbon::parse(request()->end_at),
            'location_id' => request()->location_id,
            'note' => request()->note,
        ]);

        return redirect('/home');
    }
}
