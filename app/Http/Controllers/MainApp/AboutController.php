<?php

namespace App\Http\Controllers\MainApp;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ImageConfig;
use App\Models\Ktc;

class AboutController extends BaseController
{
    public function index()
    {
        return view('tentangkami.about');
    }

    public function brigjendKatamso2()
    {
        return view('tentangkami.about1');
    }

    public function ktc()
    {
        $ktc = Ktc::query()->orderBy('id', 'desc')->get();
        $banner = ImageConfig::query()->where('slug', 'KTC')->first();

        return view('ktc.ktc', [
            'ktc' => $ktc,
            'banner' => $banner
        ]);
    }
}
