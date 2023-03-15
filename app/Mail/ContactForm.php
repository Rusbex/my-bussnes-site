<?php

namespace App\Mail;

use App\Models\contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    protected $formData = [];


    public function __construct($formData)
    {
        $this->formData = $formData;
    }

//    public function build()
//    {
//        return $this->view('emails.contact_form')->with($this->formData);
//    }
//    public function build()
//    {
//        return $this->view('emails.contact_form')->with(['formData'=>$this->formData]);
//    }

//    public function build()
//    {
//        return $this->from(env('rustam@biggrin.kz'), 'Admin')
//            ->view('emails.contact_form')
//            ->with($this->formData);
//    }

    public function build()
    {
        return $this->from('rustam@biggrin.kz', 'R.T.')
            ->view('emails.contact_form')->with($this->formData);
    }

}
