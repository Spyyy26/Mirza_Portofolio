<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();

        return view('contacts.index',
            compact('contacts'));
    }

    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',

            'email' => 'required|email',

            'subject' => 'required',

            'message' => 'required',

        ]);

        Contact::create([

            'name' => $request->name,

            'email' => $request->email,

            'subject' => $request->subject,

            'phone' => $request->phone,

            'message' => $request->message,

        ]);

        return redirect('/')
            ->with('success',
            'Pesan berhasil dikirim');
    }
}