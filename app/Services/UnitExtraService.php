<?php

namespace App\Services;

use App\Models\UnitExtra;
use App\Models\UnitProgram;
use App\Models\Units;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UnitExtraService
{
    public function update($request, $id)
    {
        DB::beginTransaction();

        try {
            $unitExtra = UnitExtra::findOrFail($id);

            if ($request->image) {
                $oldFile = null;
                if ($unitExtra->image) {
                    $oldFile = $unitExtra->image;
                }

                $path = uploadFile($request->image, 'images/unitExtra', $oldFile);

                if (!$path) {
                    DB::rollBack();
                    return false;
                }

                $unitExtra->update([
                    'name' => $request->name,
                    'image' => $path,
                    'is_active' => $request->is_active,
                ]);
            } else {
                $unitExtra->update([
                    'name' => $request->name,
                    'is_active' => $request->is_active,
                ]);
            }

            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function create($request)
    {
        DB::beginTransaction();

        try {
            $unit = Units::findOrFail($request->unitId);

            $path = $this->uploadFile($request->image);

            if (!$path) {
                DB::rollBack();
                return false;
            }

            $unit->extra()->create([
                'name' => $request->name,
                'image' => $path,
                'alt' => Str::lower($request->name)
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
            'is_active' => 'nullable|boolean'
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }
}
