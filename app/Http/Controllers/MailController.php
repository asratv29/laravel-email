<?php

namespace App\Http\Controllers;

use App\Mail\SendWelcomeMail;
use Log;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail() 
    {
        try {
            $toEmailAddress = "asratzewo@gmail.com";
            $welcomeMessage = "this is for asratzewo";

            $request = Mail::to($toEmailAddress)->send(new SendWelcomeMail($welcomeMessage));
            dd("EMAIL SENT", $request);
        } catch(Exception $err) {
           dd($err); 
        }
    }
}
