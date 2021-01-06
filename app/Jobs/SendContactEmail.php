<?php

namespace App\Jobs;

use App\ContactEmail;
use App\Mail\EmailForContactQueue;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendContactEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $mailTo;
    protected $newEmail;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($newEmail)
    {
        $this->newEmail = $newEmail;
        $this->mailTo = 'elzeke55@gmail.com'; //Mail Administrador
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $contacto = new EmailForContactQueue($this->newEmail);
        Mail::to($this->mailTo)->send($contacto);
            $enviado = ContactEmail::find($this->newEmail->id);
            $enviado->enviado = 1;
            $enviado->save();
        
    }
}