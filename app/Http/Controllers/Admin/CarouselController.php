<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CarouselImage;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function index()
    {
        $carouselImages = CarouselImage::active()->get();

        return view('admin.dashboard.carousel.view',[
            'carouselImages' => $carouselImages
        ]);
    }
}
