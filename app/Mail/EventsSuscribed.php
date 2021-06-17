<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EventsSuscribed extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $subject = "Suscripción a evento";
    public $eventSubscribed;
    public $date;
    public $userName;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($eventSubscribed, $date, $userName)
    {
        $this->eventSubscribed = $eventSubscribed;
        $this->date = $date;
        $this->userName = $userName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.eventMail');
    }
}
