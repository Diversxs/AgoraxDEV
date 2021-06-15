<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\User;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Auth;



class EventsController extends Controller
{
    public function __construct()
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

        $request->isFavorite = $request->has('isFavorite');


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

    public function bookEvent($id){

        $user=Auth::user();
        $event = Events::find($id);

        $user->eventsBookedIn()->attach($event->id);
    }
    public function CancelbookedEvent($id){

        $user=Auth::user();
        $event = Events::find($id);
        $user->eventsBookedIn()->detach($event->id);
    }

    public function userEvents(){
        $user= Auth::user();
        $events = $user->eventsBookedIn;
        return view('user.bookedEvents', ['events_user' => $events]);
    }

}
