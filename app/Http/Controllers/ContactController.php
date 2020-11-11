<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageCreated;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create(){
        return view('layouts.contacts.create');
    }

    public function store(Request $request){ //on peut ajouter un formrequest ContactRequest et l'utiliser au lieur de request

        //baad el validate hedhi thot $errors fel vu
        $this->validate($request,[
            'name'=>'required|min:3',
            'email'=>'required|email',
            'message'=>'required|min:10'
        ]);

        $message = new Message(); // ou bien remplacer tout ça avec Message::create($request->only('name','email','message'));
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();

//        $mailable =  new ContactMessageCreated($request->name,$request->email,$request->message);
        $mailable =  new ContactMessageCreated($message);

        Mail::to(config('laracarte.admin_support_email'))->send($mailable);

        flashy()->success('Done!', 'http://your-awesome-link.com');

        return redirect()->route('home_path');


    }
}
