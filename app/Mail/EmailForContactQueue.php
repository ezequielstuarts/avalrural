<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailForContactQueue extends Mailable
{
    use Queueable, SerializesModels;
    protected $newEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($newEmail)
    {
        $this->newEmail = $newEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('infor@avalrural.com.ar', 'Aval Rural')
        ->subject('Contacto desde el formulario de Aval Rural')
        ->view('email.formulario_de_contacto')
        ->with(['newEmail' => $this->newEmail]);
    }
}