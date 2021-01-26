<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactFormRequest;

class ContactFormController extends Controller
{
    public function sendForm(ContactFormRequest $request)
    {
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        );

        Mail::to('m.halaj@websystem.sk')->send(new ContactMail($data));

        return back()->with('success_message', 'Your massage is successfully send!');
    }
}
