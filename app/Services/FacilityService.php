<?php

namespace App\Services;

use App\Models\Facility;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FacilityService
{
    public function create($request)
    {
        DB::beginTransaction();

        try {
            $path = uploadFile($request->image, 'images/facility');

            if (!$path) {
                DB::rollBack();
                return false;
            }

            Facility::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $path,
                'created_by' => auth()->user()->id,
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }

    public function validateInputUpdate($request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
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
            $facility = Facility::findOrFail($id);

            if ($request->image) {

                $path = uploadFile($request->image, 'images/facility', $facility->image);

                if (!$path) {
                    DB::rollBack();
                    return false;
                }

                $facility->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'image' => $path,
                    'updated_by' => auth()->user()->id,
                ]);
            } else {
                $facility->update([
                    'title' => $request->title,
                    'description' => $request->description,
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
