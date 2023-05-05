<?php

namespace App\Http\Controllers\MainApp;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\UnitBrosur;
use Illuminate\Http\Request;

class BrosurController extends Controller
{
    public function tkDanPg()
    {
        $contact = Contact::all();
        $currentYear = date('Y');
        $brosur = UnitBrosur::active()->where('unit_id', 1)->year($currentYear)->order()->get();

        view()->share('contacts', $contact);

        return view('brosur.tkbrosur', [
            'brosur' => $brosur,
        ]);
    }

    public function sd()
    {

    }

    public function smp()
    {

    }

    public function sma()
    {

    }

    public function smk()
    {

    }
}
