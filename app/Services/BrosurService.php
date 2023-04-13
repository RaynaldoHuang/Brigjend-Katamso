<?php

namespace App\Services;

use App\Models\UnitBrosur;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BrosurService
{
    public function validation($request)
    {
        $validator = Validator::make($request->all(), [
            'unit_id' => 'required|exists:units,id',
            'imageFront' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'imageBack' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }

    public function validationUpdate($request)
    {
        $validator = Validator::make($request->all(), [
            'imageFront' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
            'imageBack' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }

    public function update($request, $unitId)
    {
        $imageFront = $request->file('imageFront');
        $imageBack = $request->file('imageBack');

        $brosurs = UnitBrosur::where('unit_id', $unitId)->get();
        $brosurFront = $brosurs->where('order', 1)->first();
        $brosurBack = $brosurs->where('order', 2)->first();

        DB::beginTransaction();

        try {
            if ($imageFront) {
                $oldFile = public_path($brosurFront->brosur);

                if (file_exists($oldFile)) {
                    unlink($oldFile);
                }

                $pathImageFront = self::uploadFile($imageFront);
                $brosurFront->brosur = $pathImageFront;
                $imageFront->save();
            }

            if ($imageBack) {
                $oldFile = public_path($brosurBack->brosur);

                if (file_exists($oldFile)) {
                    unlink($oldFile);
                }

                $pathImageBack = self::uploadFile($imageBack);
                $brosurBack->brosur = $pathImageBack;
                $brosurBack->save();
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
            $destinationPath = public_path('/images/brosur');
            $image->move($destinationPath, $name);
            $path = '/images/brosur/' . $name;
        }

        return $path;
    }

    public function create($request)
    {
        $imageFront = $request->file('imageFront');
        $imageBack = $request->file('imageBack');

        DB::beginTransaction();

        try {
            $pathImageFront = $this->uploadFile($imageFront);
            $pathImageBack = $this->uploadFile($imageBack);

            if (!$pathImageFront && !$pathImageBack) {
                DB::rollBack();
                return false;
            }

            $getYears = Carbon::now()->format('Y');

            UnitBrosur::create([
                'unit_id' => $request->unit_id,
                'brosur' => $pathImageFront,
                'order' => 1,
                'year' => $getYears,
            ]);

            UnitBrosur::create([
                'unit_id' => $request->unit_id,
                'brosur' => $pathImageBack,
                'order' => 2,
                'year' => $getYears
            ]);

            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
