<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAttendeeRequest;
use App\Models\Attendee;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    public function registerView()
    {
        $attendeesCount = Attendee::all()->count();
        $attendeesMaxCount = Attendee::MAX_ATTENDEES;

        return view('home', compact('attendeesCount', 'attendeesMaxCount'));
    }


    public function registerStore(StoreAttendeeRequest $request)
    {
        $attendeesCount = Attendee::all()->count();
        $attendeesMaxCount = Attendee::MAX_ATTENDEES;

        if ($attendeesCount >= $attendeesMaxCount) {
            return redirect()->route('home')
                ->with('error', 'Aktualnie brak miejsc. Spróbuj ponownie później.');
        }

        Attendee::create($request->all());

        return redirect()->route('home')
            ->with('success', 'Dziękujemy za zgłoszenie!');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttendeeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendee  $attendee
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Attendee $attendee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendee  $attendee
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendee $attendee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendee             $attendee
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendee $attendee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendee  $attendee
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendee $attendee)
    {
        //
    }
}
