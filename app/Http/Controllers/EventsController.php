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
        // dd ($request->title);

        request()->validate(Events::$rules);

        Events::create($request->all());


        return redirect(route('events.index'));
    }


    public function show($id)
    {
        $event = Events::find($id);
        return view('event.show', compact('event'));
    }

    
    public function edit($id)
    {
        $event = Events::find($id);
        return view('event.edit', compact('event'));
    }

   
    public function update(Request $request, Events $events)
    {
        //
    }

    
    public function destroy(Events $events)
    {
        //
    }
}
