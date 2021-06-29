<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Events;

class ApiEventController extends Controller
{
    public function index()
    {
        $events = Events::all();

        return response()->json(Events::all(), 200);
    }

    public function bookedInUsers($id)  
    {
        $event = Events::find($id);

        $users = $event->bookedInUsers();

        return response()->json($event->bookedInUsers(), 200);
    }

}
