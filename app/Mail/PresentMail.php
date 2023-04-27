<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PresentMail extends Mailable
{
    use Queueable, SerializesModels;

	public $demo1;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($demo1)
    {
        $this->demo1 = $demo1;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        

        return $this->from('Hosting@host.ru')->
        view('mails.demo1')->
                    text('mails.demo_plain1');
                    
    }
}
