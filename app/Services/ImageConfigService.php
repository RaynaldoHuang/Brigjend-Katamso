<?php

namespace App\Services;

use App\Models\ImageConfig;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ImageConfigService
{
    public function validateInputUpdate($request)
    {
        $validator = Validator::make($request->all(), [
            // 'slug' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }

    public function update($request, $id)
    {
        DB::beginTransaction();

        try {
            $imageConfig = ImageConfig::findOrFail($id);

            if ($request->image) {

                $path = uploadFile($request->image, 'images/config/image', $imageConfig->image);

                if (!$path) {
                    DB::rollBack();
                    return false;
                }

                $imageConfig->update([
                    'image' => $path,
                    'updated_by' => auth()->user()->id,
                ]);
            }

            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
