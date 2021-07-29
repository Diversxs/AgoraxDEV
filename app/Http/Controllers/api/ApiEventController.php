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

        return response()->json($events, 200);
    }

    public function bookedInUsers($id)  
    {
        $event = Events::find($id);

        $user = $event->bookedInUsers;

        return response()->json($user, 200);
    }

}
