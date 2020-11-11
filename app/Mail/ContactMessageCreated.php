<?php

namespace App\Mail;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessageCreated extends Mailable
{
    use Queueable, SerializesModels;

   // public $name;
   // public $email;
    public $msg;

    /**
     * Create a new message instance.
     *
//     * @param $name
//     * @param $email
     * @param $msg
     */
//    public function __construct($name, $email, $msg)
    public function __construct(Message $msg)
    {
      //  $this->name = $name;
       // $this->email = $email;
        $this->msg = $msg;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.created');  //une version html
        //                     -> with([
//                         'name'=>'Siwar',
//                         'email'=>'Benaichasiwar@gmail.com',
//                          'msg'=>'je suis un message test'
//                         ]);
        //->text('emails.created_text');//on peut ajouter une version text plain
    }
}
