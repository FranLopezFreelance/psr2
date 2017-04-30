<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class Contact extends Mailable
{
    protected $name;
    protected $title;
    protected $email;
    protected $subject;
    protected $content;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->name = $request->input('name');
        $this->title = $request->input('title');
        $this->email = $request->input('email');
        $this->subject = $request->input('subject');
        $this->content = $request->input('content');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      //return $this->from('contacto@gradom.com.ar')
      return $this->from('info@gradom.com.ar')
                  ->subject('Nueva Consulta')
                  ->view('emails.contact')
                  ->with([
                      'name' => $this->name,
                      'title' => $this->title,
                      'email' => $this->email,
                      'subject' => $this->subject,
                      'content' => $this->content
                  ]);
    }
}
