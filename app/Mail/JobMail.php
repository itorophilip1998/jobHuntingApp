<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\User;
use Auth;

class JobMail extends Mailable
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
        return $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->data['email'])->subject($this->data['subject'])
        ->attach($this->data['attachment'], array(
            'as' => $this->data['attachment']->getClientOriginalName(),
            'mime' => $this->data['attachment']->getClientMimeType(),
        ))->view('beneficiary-wallet-funded')->with('data', $this->data);
        // JobMail::insert($data);
        // $data->save();
        // ->with('data', $data);
        // return response()->json( 200);
    }
}
