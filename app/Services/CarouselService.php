<?php

namespace App\Services;

use App\Models\CarouselImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CarouselService
{

    public function createCarousel($request)
    {
        DB::beginTransaction();

        try {
            $path = uploadFile($request->image, 'images/carousel');

            if (!$path) {
                DB::rollBack();
                return false;
            }

            CarouselImage::create([
                'name' => $request->name,
                'action' => $request->action,
                'url' => $request->url,
                'image' => $path,
            ]);

            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function updateCarousel($request, $id)
    {
        DB::beginTransaction();

        try {
            $carouselImage = CarouselImage::findOrFail($id);

            if ($request->image) {
                $oldFile = $carouselImage->image;

                $path = uploadFile($request->image, 'images/carousel', $oldFile);

                if (!$path) {
                    DB::rollBack();
                    return false;
                }

                $carouselImage->update([
                    'name' => $request->name,
                    'image' => $path,
                    'action' => $request->action,
                    'url' => $request->url,
                ]);
            } else {
                $carouselImage->update([
                    'name' => $request->name,
                    'action' => $request->action,
                    'url' => $request->url,
                ]);
            }

            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function validateInput($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'action' => 'nullable|string|max:255',
            'url' => 'nullable|string|max:255',
            'is_active' => 'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }

    public function validateUpdateInput($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'action' => 'nullable|string|max:255',
            'url' => 'nullable|string|max:255',
            'is_active' => 'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }
}
