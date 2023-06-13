<?php

namespace App\Http\Controllers\MainApp;

use App\Http\Controllers\Controller;
use App\Models\CarouselImage;
use App\Models\Contact;
use App\Models\ImageConfig;
use App\Models\NewsActivities;

class HomeController extends BaseController
{
    public function index()
    {
        $carouselImages = CarouselImage::active()->get();
        $newsActivities = NewsActivities::active()->limit(10)->orderBy('id', 'desc')->get();
        $imageVisi = ImageConfig::where('slug', 'Visi')->first();
        $imageMisi = ImageConfig::where('slug', 'Misi')->first();

        return view('Home.isi', [
            'carouselImages' => $carouselImages,
            'newsActivities' => $newsActivities,
            'imageVisi' => $imageVisi,
            'imageMisi' => $imageMisi,
        ]);
    }
}
