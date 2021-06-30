<?php

namespace App\Http\Controllers;

use App\Mail\EventsSuscribed;
use Illuminate\Support\Facades\Mail;
use App\Models\Events;
use Illuminate\Http\Request;

class MailSentController extends Controller
{

    public function index()
    {
        return view('subscribedMail.index');
    } 


    public function store()
    {
        // $mail = new EventsSuscribed;
        // Mail::to('agalarza@hotmail.com')->send($mail);
        // return 'mensaje enviado';
    }
}
