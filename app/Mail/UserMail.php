<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'New Contact has been arrived.',
        );
    }

    public function content()
    {
        return new Content(
            view: 'mail.user_contact',
        );
    }

    public function attachments()
    {
        return [];
    }
}
