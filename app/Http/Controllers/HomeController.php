<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class HomeController extends Controller
{

    public function index()
    {
        $events = Events::paginate();
        return view('home.index', ['events' => $events]);
    }

    public function show($id)
    {
        $event = Events::find($id);
        return view('home.show', compact('event'));
    }

    public function homePassedEvents()
    {
        $events = Events::paginate();
        return view('admin.pass', ['events' => $events]);
    }
}
