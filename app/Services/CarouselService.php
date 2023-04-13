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
            $path = $this->uploadFile($request->image);

            if (!$path) {
                DB::rollBack();
                return false;
            }

            CarouselImage::create([
                'name' => $request->name,
                'image' => $path,
            ]);

            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function uploadFile($file)
    {
        $path = null;

        if ($file) {
            $image = $file;
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/carousel');
            $image->move($destinationPath, $name);
            $path = '/images/carousel/' . $name;
        }

        return $path;
    }

    public function updateCarousel($request, $id)
    {
        DB::beginTransaction();

        try {
            $carouselImage = CarouselImage::findOrFail($id);

            if ($request->image) {
                $oldFile = public_path($carouselImage->image);

                if (file_exists($oldFile)) {
                    unlink($oldFile);
                }
            }

            $path = $this->uploadFile($request->image);

            if (!$path) {
                DB::rollBack();
                return false;
            }

            $carouselImage->update([
                'name' => $request->name,
                'image' => $path,
            ]);

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
            'is_active' => 'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }
}
