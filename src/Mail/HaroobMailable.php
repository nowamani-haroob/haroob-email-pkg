<?php

namespace Haroob\Email\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class HaroobMailable extends Mailable
{
    use Queueable, SerializesModels;

    private  $message;
    private  $_subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message,$_subject)
    {
        $this->message = $message;
        $this->_subject = $_subject;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: $this->_subject,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'haroob::haroob.email',with: ["message"=>$this->message]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
