<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\User;
// use Auth;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;


    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        return $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        return $this->from($this->data['email'])
        ->subject($this->data['subject'])
        ->with('data', $this->data);
        // ->view('beneficiary-wallet-funded')->with('data', $this->data);
        // return response()->json( 200);
        // return $this->view('view.name');
    }
}
