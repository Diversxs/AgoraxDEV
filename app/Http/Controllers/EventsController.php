<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{

    public function index()
    {
        //dd(Events::paginate());
        $events = Events::paginate();
        return view('event.index', ['events' => $events]);
    }

    public function create()
    {
        // dd(new Events());
        $newEvent = new Events();
        return view('event.create', compact('newEvent'));
    }


    public function store(Request $request)
    {
        request()->validate(Events::$rules);

        Events::create($request->all());

        return redirect(route('event.index'));
    }


    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $events)
    {
        //
    }
}
