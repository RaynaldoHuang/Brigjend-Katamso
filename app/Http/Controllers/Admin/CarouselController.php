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
            handleSession(422, $validate->messages());
            return redirect()->back()->withInput($request->all());
        }

        $status = $carouselService->createCarousel($request);

        if ($status) {
            handleSession(200, "Berhasil membuat Carousel");
            return redirect()->route('admin.carousel');
        } else {
            handleSession(400, "Gagal membuat Carousel");
            return redirect()->back()->withInput($request->all());
        }
    }

    public function update(Request $request, string $id, CarouselService $carouselService)
    {
        $validate = $carouselService->validateUpdateInput($request);

        if ($validate !== true) {
            handleSession(422, $validate->messages());
            return redirect()->back()->withInput($request->all());
        }

        $status = $carouselService->updateCarousel($request, $id);

        if ($status) {
            handleSession(200, "Berhasil memperbaharui Carousel");
            return redirect()->route('admin.carousel');
        } else {
            handleSession(400, "Gagal memperbaharui Carousel");
            return redirect()->back()->withInput($request->all());
        }
    }

    public function destroy(Request $request)
    {
        $carouselImage = CarouselImage::findOrFail($request->id);

        $carouselImage->delete();

        return redirect()->route('admin.carousel')->with('success', 'Carousel Image deleted successfully');
    }
}
