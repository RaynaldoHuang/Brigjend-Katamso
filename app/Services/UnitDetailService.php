<?php

namespace App\Services;

use App\Models\Units;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UnitDetailService
{
    public function update($request, $id)
    {
        DB::beginTransaction();

        try {
            $unit = Units::findOrFail($id);

            if ($request->image) {
                if ($unit->detail->image) {
                    $oldFile = public_path($unit->detail->image);

                    if (file_exists($oldFile)) {
                        unlink($oldFile);
                    }
                }

                $path = $this->uploadFile($request->image);

                if (!$path) {
                    DB::rollBack();
                    return false;
                }

                $unit->detail->title = $request->title;
                $unit->detail->description = $request->description;
                $unit->detail->image = $path;
            } else {
                $unit->detail->title = $request->title;
                $unit->detail->description = $request->description;
            }
            $unit->detail->save();

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
            $destinationPath = public_path('/images/unitDetail');
            $image->move($destinationPath, $name);
            $path = '/images/unitDetail/' . $name;
        }

        return $path;
    }

    public function validateInput($request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }
}
