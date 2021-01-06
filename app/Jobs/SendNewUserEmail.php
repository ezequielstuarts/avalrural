<?php

namespace App\Jobs;

use App\Mail\EmailForNewUser;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendNewUserEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $mailTo;
    protected $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
        $this->mailTo = 'e.stuarts@mas54.com';
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $contacto = new EmailForNewUser($this->user);
        Mail::to($this->mailTo)->send($contacto);
        
    }
}
