<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     * 
     * 
     *
     * @return void
     */
    //asunto del correo
     public $subject = "Información de contacto"; 
     public $contacto;
     
    public function __construct($contacto)
    {
        $this->contacto = $contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contactanos');
    }
}
