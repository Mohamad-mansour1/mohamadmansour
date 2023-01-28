<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = $this->data['name'];
        $email = $this->data['email'];
        $phone = $this->data['phone'];
        $subject = $this->data['subject'];
        $msg = $this->data['msg'];
        return $this->view('website.contactform',compact('name','email','phone','subject','msg'))->subject('contact form')->from('mohamad@mohamadmansour.me','Mohamad Mansour');
    }

}
