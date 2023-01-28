<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    public function Index()
    {
        return view('website.index');
    }
    public function SendContact(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $subject = $request->input('subject');
        $msg = $request->input('message');
        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'subject' => $subject,
            'msg' => $msg
        ];
        Mail::to('mohamadmansour028@gmail.com')->send(new Contact($data));
        return back()->with('err','Thanks for sending mail');
    }
}
