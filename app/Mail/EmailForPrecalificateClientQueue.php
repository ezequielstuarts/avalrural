<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailForPrecalificateClientQueue extends Mailable
{
    use Queueable, SerializesModels;
    protected $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('infor@avalrural.com.ar', 'Precalificacion de eval rural')
        ->subject('Contacto desde el formulario de precalificaciones de Aval Rural')
        ->view('email.formulario_de_precalificaciones_client')
        ->with(['request' => $this->request]);
    }
}
