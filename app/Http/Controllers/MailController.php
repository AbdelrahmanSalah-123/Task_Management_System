<?php

namespace App\Http\Controllers;

use App\Mail\assign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail($email){
        Mail::to($email)->send(new assign());
        return redirect('employee')->with('success','Sended Successfully');
    }
}
