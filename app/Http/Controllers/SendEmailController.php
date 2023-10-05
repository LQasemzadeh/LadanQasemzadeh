<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
   public function sendEmail(Request $request)
   {
      Mail::to('lqasemzadeh@gmail.com')->send(new SendEmail($request->message));
        echo 'Hi';
   }
}
