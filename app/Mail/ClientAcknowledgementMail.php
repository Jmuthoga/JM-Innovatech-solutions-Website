<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClientAcknowledgementMail extends Mailable
{
    use Queueable, SerializesModels;

    public $clientName;

    public function __construct($clientName)
    {
        $this->clientName = $clientName;
    }

    public function build()
    {
        return $this->subject('We Received Your Message')
                    ->view('emails.client_acknowledgement');
    }
}
