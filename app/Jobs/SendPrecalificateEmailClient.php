<?php

namespace App\Jobs;

use App\Mail\EmailForPrecalificateClientQueue;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendPrecalificateEmailClient implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $precalificacion;
    protected $mailTo;
    
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($precalificacion, $mailTo)
    {
        $this->precalificacion = $precalificacion->request;
        $this->mailTo = $mailTo;
        
    }
    
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new EmailForPrecalificateClientQueue($this->precalificacion);
        Mail::to($this->mailTo)->send($email);
    }
}
