<?php

namespace App\Http\Controllers;

use App\Models\Frontend\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Frontend.pages.contact');
    }

}
