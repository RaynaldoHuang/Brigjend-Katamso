<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UnitBrosur;
use App\Services\BrosurService;
use Illuminate\Http\Request;

class BrosurController extends Controller
{
    public function view()
    {
        $brosurs = UnitBrosur::orderBy('unit_id', 'asc')->get()->groupBy('unit_id');

        return view('admin.dashboard.brosur.view', [
            'brosurs' => $brosurs
        ]);
    }

    public function destroy(Request $request)
    {
        $brosurs = UnitBrosur::where('unit_id', $request->unit_id)->get();

        foreach ($brosurs as $brosur) {
            $brosur->delete();
        }

        return redirect()->back()->with('success', 'Brochure deleted successfully');
    }

    public function edit(string $unitId)
    {
        $brosurs = UnitBrosur::where('unit_id', $unitId)->get();
        $brosurFront = $brosurs->where('order', 1)->first();
        $brosurBack = $brosurs->where('order', 2)->first();

        return view('admin.dashboard.brosur.edit', [
            'brosurFront' => $brosurFront,
            'brosurBack' => $brosurBack
        ]);
    }

    public function store(Request $request, BrosurService $brosurService)
    {
        $validate = $brosurService->validation($request);

        if ($validate !== true) {
            return redirect()->back()->with('validation', $validate->messages());
        }

        $status = $brosurService->create($request);

        if ($status) {
            return redirect()->route('admin.brosur')->with('success', 'Carousel Image created successfully');
        } else {
            return redirect()->back()->with('error', 'Gagal membuat Carousel Image');
        }
    }

    public function create()
    {
        return view('admin.dashboard.brosur.create');
    }

    public function update(Request $request, string $unitId, BrosurService $brosurService)
    {
        $validate = $brosurService->validationUpdate($request);

        if ($validate !== true) {
            return redirect()->back()->with('validation', $validate->messages());
        }

        $status = $brosurService->update($request, $unitId);

        if ($status) {
            return redirect()->route('admin.brosur')->with('success', 'Carousel Image updated successfully');
        } else {
            return redirect()->back()->with('error', 'Gagal mengupdate Carousel Image');
        }
    }
}
