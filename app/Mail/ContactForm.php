<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $name;
    public $subject;
    public $bodyMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($email, $name, $subject, $bodyMessage)
    {
      $this->email = $email;
      $this->name = $name;
      $this->subject = $subject;
      $this->bodyMessage = $bodyMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.send')
                    ->subject('vetmontemar.cl'.' | '.$this->subject)
                    ->from($this->email, $this->name)
                    ->replyTo($this->email, $this->name);
    }
}
