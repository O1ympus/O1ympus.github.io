<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSending extends Controller
{
    public function send(Request $request){
        $name = $request->username;
        $email = $request->email;
        $message = $request->text;

        Mail::to('seva.plaks0110@gmail.com')->send(new MailClass($name, $email, $message));
    }
}
