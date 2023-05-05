<?php

namespace App\Http\Controllers\MainApp;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\UnitDetail;
use App\Models\UnitExtra;
use App\Models\UnitProgram;
use App\Models\Units;

class UnitController extends Controller
{
    public function unitTkDanPg()
    {
        $contact = Contact::all();

        $unit = Units::where('id', 1)->first();
        $unitDetail = UnitDetail::published()->where('unit_id', 1)->first();
        $unitProgram = UnitProgram::published()->where('unit_id', 1)->get();
        $unitExtra = UnitExtra::active()->where('unit_id', 1)->get();

        view()->share('contacts', $contact);

        return view('Unit.unittk', [
            'unit' => $unit,
            'unitDetail' => $unitDetail,
            'unitProgram' => $unitProgram,
            'unitExtra' => $unitExtra,
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
