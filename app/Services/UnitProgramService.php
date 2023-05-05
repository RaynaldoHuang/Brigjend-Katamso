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
                if ($unitProgram->image) {
                    $oldFile = public_path($unitProgram->image);

                    if (file_exists($oldFile)) {
                        unlink($oldFile);
                    }
                }

                $path = $this->uploadFile($request->image);

                if (!$path) {
                    DB::rollBack();
                    return false;
                }

                $unitProgram->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'is_published' => $request->is_published,
                    'image' => $request->image,
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
