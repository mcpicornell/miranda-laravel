<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->date = date('Y/m/d');
        $contact->customerName = $request->input('name');
        $contact->customerPhoneNumber = $request->input('phone');
        $contact->customerEmail = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->comment = $request->input('message');
        $contact->isArchive = 0;
        $contact->save();

        $message = "We will contact you shortly!";
        return redirect()->to('/contact')->with('success', $message);
    }
}