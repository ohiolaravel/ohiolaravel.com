<?php

namespace App\Http\Controllers;

use App\Meeting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $meetings = Meeting::query()
            ->where('start_at', '>=', now())
            ->orderBy('start_at')
            ->paginate(10);

        return view('home')
            ->withMeetings($meetings);
    }
}
