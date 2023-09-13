<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\MessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mailMessage(Request $request)
    {

        $data = $request->all();
        $mail = new MessageMail(
            sender: $data['mail'],
            subject: $data['subject'],
            content: $data['mail-text']
        );

        Mail::to(env('MAIL_TO_ADDRESS'))->send($mail);
        return response(null, 204);
    }
}
