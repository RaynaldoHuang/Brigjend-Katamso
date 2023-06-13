<?php

namespace App\Services;

use App\Models\Units;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UnitService
{
    public function update($request, $id)
    {
        DB::beginTransaction();

        try {
            $unit = Units::findOrFail($id);

            if ($request->image) {
                $oldFile = null;
                if ($unit->image) {
                    $oldFile = $unit->image;
                }

                $path = uploadFile($request->image, 'images/unit', $oldFile);

                if (!$path) {
                    DB::rollBack();
                    return false;
                }

                $unit->image = $path;
                $unit->save();
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }
}
