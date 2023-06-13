<?php

namespace App\Http\Controllers\MainApp;

use App\Http\Controllers\Controller;
use App\Models\CarouselImage;
use App\Models\Contact;
use App\Models\NewsActivities;

class HomeController extends BaseController
{
    public function index()
    {
        $carouselImages = CarouselImage::active()->get();
        $newsActivities = NewsActivities::active()->limit(10)->orderBy('id','desc')->get();

        return view('Home.isi', [
            'carouselImages' => $carouselImages,
            'newsActivities' => $newsActivities,
        ]);
    }
}
