<?php

namespace App\Http\Controllers\MainApp;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class AboutController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        view()->share('contacts', $contact);

        return view('tentangkami.about');
    }
}
