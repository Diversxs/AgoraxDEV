<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
{
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events = Events::paginate();
        if (Auth::user()->isAdmin){
            return view('admin.index', ['events' => $events]);
        }

            return view('user.index', ['events' => $events]);

    }

    public function show($id)
    {
        $event = Events::find($id);
        if (Auth::user()->isAdmin){
            return view('admin.show', ['events' => $event]);
        }

            return view('user.show', ['events' => $event]);


    }

    public function create()
    {
        $newEvent = new Events();
        return view('admin.create', compact('newEvent'));
    }


    public function store(Request $request)
    {

        request()->validate(Events::$rules);

        Events::create($request->all());


        return redirect(route('logged_index'));
    }


    public function edit($id)
    {
        $event = Events::find($id);
        return view('admin.edit', compact('event'));
    }


    public function update(Request $request, Events $event)
    {
        request()->validate(Events::$rules);

        $event->update($request->all());

        return redirect()->route('logged_index')
            ->with('success', 'Event updated successfully');
    }


    public function destroy($id)
    {
        $event = Events::find($id)->delete();
        return redirect()->route('logged_index')
            ->with('success', 'Event deleted successfully');
    }
}
