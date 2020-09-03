<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $procedure;
    public $phone;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $procedure, $phone, $message = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->procedure = $procedure;
        $this->phone = $phone;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('info@bijedith.nl')
            ->subject('Nieuwe aanvraag voor behandeling')
            ->markdown('mails.appointment');
    }
}
