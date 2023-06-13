<?php

namespace App\Http\Controllers\MainApp;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\UnitDetail;
use App\Models\UnitExtra;
use App\Models\UnitProgram;
use App\Models\Units;

class UnitController extends BaseController
{
    public function unitTkDanPg()
    {
        $unit = Units::where('id', 1)->first();
        $unitDetail = UnitDetail::published()->where('unit_id', 1)->first();
        $unitProgram = UnitProgram::published()->where('unit_id', 1)->get();
        $unitExtra = UnitExtra::active()->where('unit_id', 1)->get();

        return view('Unit.unittk', [
            'unit' => $unit,
            'unitDetail' => $unitDetail,
            'unitProgram' => $unitProgram,
            'unitExtra' => $unitExtra,
        ]);
    }

    public function unitSd()
    {
        $unit = Units::where('id', 2)->first();
        $unitDetail = UnitDetail::published()->where('unit_id', 2)->first();
        $unitProgram = UnitProgram::published()->where('unit_id', 2)->get();
        $unitExtra = UnitExtra::active()->where('unit_id', 2)->get();

        return view('Unit.unitother', [
            'unit' => $unit,
            'unitDetail' => $unitDetail,
            'unitProgram' => $unitProgram,
            'unitExtra' => $unitExtra,
        ]);
    }

    public function unitSmp()
    {
        $unit = Units::where('id', 3)->first();
        $unitDetail = UnitDetail::published()->where('unit_id', 3)->first();
        $unitProgram = UnitProgram::published()->where('unit_id', 3)->get();
        $unitExtra = UnitExtra::active()->where('unit_id', 3)->get();

        return view('Unit.unitother', [
            'unit' => $unit,
            'unitDetail' => $unitDetail,
            'unitProgram' => $unitProgram,
            'unitExtra' => $unitExtra,
        ]);
    }

    public function unitSma()
    {
        $unit = Units::where('id', 4)->first();
        $unitDetail = UnitDetail::published()->where('unit_id', 4)->first();
        $unitProgram = UnitProgram::published()->where('unit_id', 4)->get();
        $unitExtra = UnitExtra::active()->where('unit_id', 4)->get();

        return view('Unit.unitother', [
            'unit' => $unit,
            'unitDetail' => $unitDetail,
            'unitProgram' => $unitProgram,
            'unitExtra' => $unitExtra,
        ]);

    }

    public function unitSmk()
    {
        $unit = Units::where('id', 5)->first();
        $unitDetail = UnitDetail::published()->where('unit_id', 5)->first();
        $unitProgram = UnitProgram::published()->where('unit_id', 5)->get();
        $unitExtra = UnitExtra::active()->where('unit_id', 5)->get();

        return view('Unit.unitother', [
            'unit' => $unit,
            'unitDetail' => $unitDetail,
            'unitProgram' => $unitProgram,
            'unitExtra' => $unitExtra,
        ]);
    }
}
