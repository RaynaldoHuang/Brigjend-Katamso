<?php

namespace App\Services;

use App\Models\Achievements;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AchievementService
{
    public function create($request)
    {
        DB::beginTransaction();

        try {
            $path = uploadFile($request->image, 'images/achievement');

            if (!$path) {
                DB::rollBack();
                return false;
            }

            Achievements::create([
                'title' => $request->title,
                'description' => $request->description,
                'student_name' => $request->student_name,
                'type' => $request->type,
                'date' => date('Y-m-d', strtotime($request->date)),
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
            'description' => 'required|string|max:255',
            'student_name' => 'required|string|max:255',
            'type' => 'required|string|in:non-akademik,akademik,snmptn,sbmptn',
            'date' => 'required|date',
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
            'description' => 'required|string|max:255',
            'student_name' => 'required|string|max:255',
            'type' => 'required|string|in:non-akademik,akademik,snmptn,sbmptn',
            'date' => 'required|date',
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
            $achievement = Achievements::findOrFail($id);

            if ($request->image) {

                $path = uploadFile($request->image, 'images/achievement', $achievement->image);

                if (!$path) {
                    DB::rollBack();
                    return false;
                }

                $achievement->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'student_name' => $request->student_name,
                    'type' => $request->type,
                    'date' => date('Y-m-d', strtotime($request->date)),
                    'image' => $path,
                    'updated_by' => auth()->user()->id,
                ]);
            } else {
                $achievement->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'student_name' => $request->student_name,
                    'type' => $request->type,
                    'date' => date('Y-m-d', strtotime($request->date)),
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
