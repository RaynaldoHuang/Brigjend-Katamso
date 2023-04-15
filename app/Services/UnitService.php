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
                if ($unit->image) {
                    $oldFile = public_path($unit->image);

                    if (file_exists($oldFile)) {
                        unlink($oldFile);
                    }
                }

                $path = $this->uploadFile($request->image);

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

    public function uploadFile($file)
    {
        $path = null;

        if ($file) {
            $image = $file;
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/unit');
            $image->move($destinationPath, $name);
            $path = '/images/unit/' . $name;
        }

        return $path;
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
