<?php

namespace App\Http\Controllers\MainApp;

use App\Http\Controllers\Controller;
use App\Models\CarouselImage;
use App\Models\NewsActivities;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $carouselImages = CarouselImage::active()->get();
        $newsActivities = NewsActivities::active()->get();

        return view('Home.isi', compact('carouselImages', 'newsActivities'));
    }
}
