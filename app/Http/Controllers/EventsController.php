<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function __construct(){
         $this->middleware('auth');
     }
    
    public function index()
    {
        $events = Events::paginate();
        return view('event.index', ['events'=>$events]);
    }

    public function show($id)
    {
        $event = Events::find($id);
        return view('event.show', compact('event'));
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


        return redirect(route('home'));
    }


    // public function show($id)
    // {
    //     $event = Events::find($id);
    //     return view('event.show', compact('event'));
    // }

    
    public function edit($id)
    {
        $event = Events::find($id);
        return view('event.edit', compact('event'));
    }

   
    public function update(Request $request, Events $event)
    {
        request()->validate(Events::$rules);
        
        $event->update($request->all());
        
        return redirect()->route('events.index')
            ->with('success', 'Event updated successfully');
    }

    
    public function destroy($id)
    {
        $event = Events::find($id)->delete();

        return redirect()->route('events.index')
            ->with('success', 'Event deleted successfully');
    }
}
