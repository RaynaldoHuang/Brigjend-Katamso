<?php

namespace App\Http\Controllers\MainApp;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\UnitExtra;
use App\Models\UnitImage;

class UnitController extends Controller
{
    public function unitTkDanPg()
    {
        $contact = Contact::all();

        $unitImageMain = UnitImage::published()->type('pgdantk')->get();
        $unitImagePg = UnitImage::published()->type('pgdantk')->get();
        $unitExtra = UnitExtra::active()->where('unit_id', 1)->get();

        view()->share('contacts', $contact);

        return view('Unit.unittk', [
            'imageMains' => $unitImageMain,
            'imageTk' => $unitImageTk,
            'imagePg' => $unitImagePg,
            'extrakulikuler' => $unitExtra,
        ]);
    }

    public function unitSd()
    {

    }

    public function unitSmp()
    {

    }

    public function unitSma()
    {

    }

    public function unitSmk()
    {

    }
}
