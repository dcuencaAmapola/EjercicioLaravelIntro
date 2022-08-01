<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MesssageReceived;

class MessagesController extends Controller
{
    public function store(Request $request){
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ],[
            'name.required' => 'Necesito tu nombre'
        ]);

        Mail::to('dcuenca@memorialtechnologies.com')->send(new MessageReceived());

        return back()->with('status','Recibimos tu mensaje, te responderemos en 24 horas.');//mensaje flash
    }
}
