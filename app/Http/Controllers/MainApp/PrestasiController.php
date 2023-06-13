<?php

namespace App\Http\Controllers\MainApp;

use App\Http\Controllers\Controller;
use App\Models\Achievements;
use App\Models\Contact;

class PrestasiController extends BaseController
{
    public function sbmptn()
    {
        $data = Achievements::published()->whereIn('type', ['sbmptn','snmptn'])->orderBy('id','desc')->get();

        return view('Prestasi.negeri', [
            'data' => $data
        ]);
    }

    public function akademik()
    {
        $data = Achievements::published()->whereIn('type', ['akademik', 'non-akademik'])->orderBy('id','desc')->get();

        return view('Prestasi.akademik', [
            'data' => $data,
        ]);
    }
}
