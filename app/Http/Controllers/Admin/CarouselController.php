<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CarouselImage;
use App\Services\CarouselService;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function view()
    {
        $carouselImages = CarouselImage::active()->get();

        return view('admin.dashboard.carousel.view', [
            'carouselImages' => $carouselImages
        ]);
    }

    public function edit(string $id)
    {
        $carouselImage = CarouselImage::findOrFail($id);

        return view('admin.dashboard.carousel.edit', [
            'carouselImage' => $carouselImage
        ]);
    }

    public function create()
    {
        return view('admin.dashboard.carousel.create');
    }

    public function store(Request $request, CarouselService $carouselService)
    {
        $validate = $carouselService->validateInput($request);

        if ($validate !== true) {
            return redirect()->back()->with('validation', $validate->messages());
        }

        $status = $carouselService->createCarousel($request);

        if ($status) {
            return redirect()->route('admin.carousel')->with('success', 'Carousel Image created successfully');
        } else {
            return redirect()->back()->with('error', 'Gagal membuat Carousel Image');
        }
    }

    public function update(Request $request, string $id, CarouselService $carouselService)
    {
        $validate = $carouselService->validateInput($request);

        if ($validate !== true) {
            return redirect()->back()->with('validation', $validate->messages());
        }

        $status = $carouselService->updateCarousel($request, $id);

        if ($status) {
            return redirect()->route('admin.carousel')->with('success', 'Carousel Image created successfully');
        } else {
            return redirect()->back()->with('error', 'Gagal membuat Carousel Image');
        }
    }

    public function destroy(Request $request)
    {
        $carouselImage = CarouselImage::findOrFail($request->id);

        $carouselImage->delete();

        return redirect()->route('admin.carousel')->with('success', 'Carousel Image deleted successfully');
    }
}
