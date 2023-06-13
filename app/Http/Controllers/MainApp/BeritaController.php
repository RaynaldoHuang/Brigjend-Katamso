<?php

namespace App\Http\Controllers\MainApp;

use App\Models\NewsActivities;
use Illuminate\Http\Request;

class BeritaController extends BaseController
{
    public function view()
    {
        $berita = NewsActivities::query()->orderBy('id', 'desc')->paginate(10);

        return view('berita.berita', [
            "berita" => $berita
        ]);
    }

    public function detail(string $slug)
    {
        $berita = NewsActivities::query()->where('slug', $slug)->first();

        if (!$berita) {
            abort(404);
        }

        return view('berita.detail', [
            "berita" => $berita
        ]);
    }
}
