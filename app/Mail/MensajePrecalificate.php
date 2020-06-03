<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MensajePrecalificate extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Mensaje desde el formulario de precalificaciones de Aval Rural';
    public $mensaje;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mensaje)
    {
        $this->mensaje = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('email.formulario_de_precalificaciones');
            // ->attachData($this->mensaje['Balance'], 'Balance.'.($this->mensaje['Balance']->extension()) , ['mime' => 'file',]);

            // ->attach('storage/precalificaciones/');
    }
}
