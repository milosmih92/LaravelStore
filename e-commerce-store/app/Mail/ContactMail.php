<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $contact;


    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        return $this->view('emails.contact')
            ->with([
                'email' => $this->contact->email,
                'name' => $this->contact->name,
                'phone' => $this->contact->phone,
                'content' => $this->contact->content,
            ]);
    }
}
