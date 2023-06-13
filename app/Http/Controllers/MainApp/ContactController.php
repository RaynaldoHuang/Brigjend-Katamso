<?php

namespace App\Http\Controllers\MainApp;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends BaseController
{
    public function index()
    {

        return view('kontak.kontak', []);
    }
}
