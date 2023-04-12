<?php

namespace App\Http\Controllers\MainApp;

use App\Http\Controllers\Controller;
use App\Models\CarouselImage;
use App\Models\Contact;
use App\Models\NewsActivities;

class HomeController extends Controller
{
    public function index()
    {
        $carouselImages = CarouselImage::active()->get();
        $newsActivities = NewsActivities::active()->get();
        $contact = Contact::all();

        view()->share('contacts', $contact);

        return view('Home.isi', [
            'carouselImages' => $carouselImages,
            'newsActivities' => $newsActivities,
        ]);
    }
}
