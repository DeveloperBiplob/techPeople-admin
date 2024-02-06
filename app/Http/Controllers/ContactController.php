<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {   
        $contacts = Contact::latest()->get();
        return view('Backend.Pages.Contact.index', compact('contacts'));
    }

    public function store(StoreContactRequest $request)
    {
        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message
        ]);

        session()->flash('success','Send Message succesfully');

        return redirect()->route('home');
       
       
    }

    public function show($contact)
    {
        $contact = Contact::findOrFail($contact);
        return view('Backend.Pages.Contact.show', compact('contact'));
    }

    public function destroy($contact)
    {
        $contact = Contact::findOrFail($contact);
        $contact->delete();
        $this->notificationMessage('Message Deleted Successfully!');
        return redirect()->route('contactContent');
    }
}
