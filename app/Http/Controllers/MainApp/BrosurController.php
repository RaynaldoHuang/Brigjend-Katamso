<?php

namespace App\Http\Controllers\MainApp;

use App\Models\Contact;
use App\Models\UnitBrosur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrosurController extends BaseController
{
    public function tkDanPg()
    {
        $currentYear = date('Y');
        $brosur = UnitBrosur::active()->with('unit')->where('unit_id', 1)->year($currentYear)->order()->get();

        return view('brosur.tkbrosur', [
            'brosur' => $brosur,
        ]);
    }

    public function sd()
    {
        $currentYear = date('Y');
        $brosur = UnitBrosur::active()->with('unit')->where('unit_id', 2)->year($currentYear)->order()->get();

        return view('brosur.otherbrosur', [
            'brosur' => $brosur,
        ]);
    }

    public function smp()
    {
        $currentYear = date('Y');
        $brosur = UnitBrosur::active()->with('unit')->where('unit_id', 3)->year($currentYear)->order()->get();

        return view('brosur.otherbrosur', [
            'brosur' => $brosur,
        ]);
    }

    public function sma()
    {
        $currentYear = date('Y');
        $brosur = UnitBrosur::active()->with('unit')->where('unit_id', 4)->year($currentYear)->order()->get();

        return view('brosur.otherbrosur', [
            'brosur' => $brosur,
        ]);
    }

    public function smk()
    {
        $currentYear = date('Y');
        $brosur = UnitBrosur::active()->with('unit')->where('unit_id', 5)->year($currentYear)->order()->get();

        return view('brosur.otherbrosur', [
            'brosur' => $brosur,
        ]);
    }
}
