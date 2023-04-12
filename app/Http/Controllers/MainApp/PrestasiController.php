<?php

namespace App\Http\Controllers\MainApp;

use App\Http\Controllers\Controller;
use App\Models\Achievements;
use App\Models\Contact;

class PrestasiController extends Controller
{
    public function sbmptn()
    {
        $contact = Contact::all();
        $achievementSbmptn = Achievements::published()->type('sbmptn')->get();
        $achievementSnmptn = Achievements::published()->type('snmptn')->get();

        view()->share('contacts', $contact);

        return view('Prestasi.negeri', [
            'sbmptn' => $achievementSbmptn,
            'snmptn' => $achievementSnmptn,
        ]);
    }

    public function akademik()
    {
        $contact = Contact::all();
        $akademik = Achievements::published()->type('akademik')->get();

        view()->share('contacts', $contact);

        return view('Prestasi.akademik', [
            'akademik' => $akademik,
        ]);
    }

    public function nonAkademik()
    {
        $contact = Contact::all();
        $nonAkademik = Achievements::published()->type('non-akademik')->get();

        view()->share('contacts', $contact);

        return view('Prestasi.nonakademik', [
            'nonAkademik' => $nonAkademik,
        ]);
    }
}
