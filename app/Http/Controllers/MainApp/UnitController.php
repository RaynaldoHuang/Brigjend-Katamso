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

        $unitImageMain = UnitImage::published()->main(true)->type('tkdanpg')->get();
        $unitImageTk = UnitImage::published()->main(false)->type('tk')->get();
        $unitImagePg = UnitImage::published()->main(false)->type('pg')->get();
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
