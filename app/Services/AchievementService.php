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
            $path = $this->uploadFile($request->image);

            if (!$path) {
                DB::rollBack();
                return false;
            }

            Achievements::create([
                'title' => $request->title,
                'description' => $request->description,
                'student_name' => $request->student_name,
                'type' => $request->type,
                'year' => $request->year,
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
            $destinationPath = public_path('/images/achievement');
            $image->move($destinationPath, $name);
            $path = '/images/achievement/' . $name;
        }

        return $path;
    }

    public function validateInput($request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'student_name' => 'required|string|max:255',
            'type' => 'required|string|in:non-akademik,akademik,snmptn,sbmptn',
            'year' => 'required|string|digits:4',
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
            'year' => 'required|string|digits:4',
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
                $oldFile = public_path($achievement->image);

                if (file_exists($oldFile)) {
                    unlink($oldFile);
                }

                $path = $this->uploadFile($request->image);

                if (!$path) {
                    DB::rollBack();
                    return false;
                }

                $achievement->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'student_name' => $request->student_name,
                    'type' => $request->type,
                    'year' => $request->year,
                    'image' => $path,
                ]);
            } else {
                $achievement->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'student_name' => $request->student_name,
                    'type' => $request->type,
                    'year' => $request->year,
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
