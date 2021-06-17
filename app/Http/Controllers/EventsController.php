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
        $user= Auth::user();
        $events = Events::paginate()->sortBy('date');

        if (Auth::user()->isAdmin){
            return view('admin.index', ['events' => $events]);
        }

         return view('user.index', compact('events','user') );

    }

    public function show($id)
    {
        $event = Events::find($id);
        if (Auth::user()->isAdmin){
            return view('admin.show', compact('event'));
        }

        return view('user.show', compact('event'));

    }

    public function create()
    {
       $newEvent = new Events();
        return view('admin.create', compact('newEvent'));
    }


    public function store(Request $request)
    {

        //dd($request);

        request()->validate(Events::$rules);

        if($request->isFavorite == "true"){
            $request->isFavorite = "1";
        }

        if($request->isFavorite == "false"){
            $request->isFavorite = "0";
        }


        $event = new Events;
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->capacity = $request->input('capacity');
        $event->date = $request->input('date');
        $event->isFavorite = $request->has('isFavorite');


        if($request->hasfile('picture')) {
            $file = $request->file('picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extention;
            $file->move('uploads/events/', $filename);
            $event->picture= $filename;
        }

        $event->save();

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

        if($request->isFavorite == "true"){
            $request->isFavorite = "1";
        }

        if($request->isFavorite == "false"){
            $request->isFavorite = "0";
        }

        $event->update([
            'title'=> $request->title,
            'description'=> $request->description,
            'capacity'=> $request->capacity,
            'isFavorite'=> $request->isFavorite,
            'picture'=> $request->picture,
            'date'=> $request->date,
        ]);

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

        $events = $user->eventsBookedIn;
        $event = Events::find($id);

        if($events->find($id)===null){
            $event->BookedInUsers()->attach($user);
            return redirect()->route('logged_index');
        }


        return redirect()->route('logged_index')
            ->with('success', 'Event booked');

    }
    public function CancelbookedEvent($id){

        $user=Auth::user();
        $event = Events::find($id);
        $event->BookedInUsers()->detach($user);
        return redirect()->route('userEvents')
        ->with('success', 'Event Unbooked');
    }

    public function userEvents(){
        $user= Auth::user();

        $events = $user->eventsBookedIn;
        return view('user.bookedEvents', ['events_user' => $events]);
    }



}
