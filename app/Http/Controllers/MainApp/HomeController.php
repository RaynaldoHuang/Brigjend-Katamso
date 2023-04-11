<?php

namespace App\Http\Controllers\MainApp;

use App\Http\Controllers\Controller;
use App\Models\CarouselImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $carouselImages = CarouselImage::active()->get();

        return view('Home.isi', compact('carouselImages'));
    }
}
