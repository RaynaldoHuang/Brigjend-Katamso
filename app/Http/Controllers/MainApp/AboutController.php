<?php

namespace App\Http\Controllers\MainApp;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class AboutController extends BaseController
{
    public function index()
    {
        return view('tentangkami.about');
    }

    public function brigjendKatamso2()
    {
        return view('tentangkami.about1');
    }

    public function ktc()
    {
        return view('ktc.ktc');
    }
}
