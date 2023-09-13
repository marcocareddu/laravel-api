<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\MessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    public function mailMessage(Request $request)
    {

        $data = $request->all();

        // Validation
        $validator = Validator::make(
            $data,
            [
                'mail' => 'required|email',
                'subject' => 'required|string',
                'mail-text' => 'required|string',
            ],
            [
                'mail.required' => 'Devi inserire una mail',
                'mail.email' => 'La mail non è valida',
                'subject.required' => "L'oggetto è obbligatorio",
                'mail-text.required' => "Devi inserire il contenuto"
            ]
        );


        // If validation fails, return errors bag & conver into object
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $mail = new MessageMail(
            sender: $data['mail'],
            subject: $data['subject'],
            content: $data['mail-text']
        );

        Mail::to(env('MAIL_TO_ADDRESS'))->send($mail);
        return response(null, 204);
    }
}
