<?php

namespace App\Http\Controllers;

use App\Models\Attendee;

class AdminController extends Controller
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
        $attendees = Attendee::all();

        return view('admin', compact('attendees'));
    }
}
