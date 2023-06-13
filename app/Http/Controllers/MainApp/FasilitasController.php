<?php

namespace App\Http\Controllers\MainApp;

use App\Models\Contact;
use App\Models\Facility;
use Illuminate\Http\Request;

class FasilitasController extends BaseController
{
    public function view()
    {
        $fasilitas = Facility::query()->orderBy('id', 'asc')->get();

        return view('fasilitas.fasilitas', [
            'fasilitas' => $fasilitas,
        ]);
    }
}
