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
                $oldFile = $brosurFront->brosur;

                $pathImageFront = uploadFile($imageFront, 'images/brosur', $oldFile);
                $brosurFront->brosur = $pathImageFront;
                $imageFront->save();
            }

            if ($imageBack) {
                $oldFile = $brosurBack->brosur;

                $pathImageBack = uploadFile($imageBack, 'images/brosur', $oldFile);
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

    public function create($request)
    {
        $imageFront = $request->file('imageFront');
        $imageBack = $request->file('imageBack');

        DB::beginTransaction();

        try {
            $pathImageFront = uploadFile($imageFront, 'images/brosur');
            $pathImageBack = uploadFile($imageBack, 'images/brosur');

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
