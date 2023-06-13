<?php

namespace App\Services;

use App\Models\UnitProgram;
use App\Models\Units;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UnitProgramService
{
    public function update($request, $id)
    {
        DB::beginTransaction();

        try {
            $unitProgram = UnitProgram::findOrFail($id);


            if ($request->image) {
                $oldFile = null;
                if ($unitProgram->image) {
                    $oldFile = $unitProgram->image;
                }

                $path = uploadFile($request->image, 'images/unitProgram', $oldFile);

                if (!$path) {
                    DB::rollBack();
                    return false;
                }

                $unitProgram->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'is_published' => $request->is_published,
                    'image' => $path,
                ]);
            } else {
                $unitProgram->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'is_published' => $request->is_published,
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

            $path = uploadFile($request->image, 'images/unitProgram');

            if (!$path) {
                DB::rollBack();
                return false;
            }

            $unit->program()->create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $path,
                'alt' => Str::lower($request->title)
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
            'is_published' => 'nullable|boolean'
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }
}
