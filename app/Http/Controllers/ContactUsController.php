<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsFormRequest as Request;
use App\Mail\ContactUSEmail;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {

        return view('contactus');
    }

    public function sendEmail(Request $request)
    {
        $validated = $request->validated();

        Mail::to(config('mail.to'))->send(new ContactUSEmail($validated));

        return redirect()->back()->with('message', 'Your message has been sent successfully!');

    }
}
