<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UnitProgram;
use App\Models\Units;
use App\Services\UnitDetailService;
use App\Services\UnitProgramService;
use App\Services\UnitService;
use Illuminate\Http\Request;

class AdminUnitController extends Controller
{
    public function view()
    {
        $units = Units::all();

        return view('admin.dashboard.unit.view', [
            'units' => $units
        ]);
    }

    public function edit(string $id)
    {
        $unit = Units::findOrFail($id);

        return view('admin.dashboard.unit.edit', [
            'unit' => $unit,
        ]);
    }

    public function updateDetail(Request $request, string $id, UnitDetailService $unitDetailService)
    {
        $validate = $unitDetailService->validateInput($request);

        if ($validate !== true) {
            return redirect()->back()->with('validation', $validate->messages());
        }

        $status = $unitDetailService->update($request, $id);

        if ($status) {
            return redirect()->route('admin.units')->with('success', 'Unit Detail updated successfully');
        } else {
            return redirect()->back()->with('error', 'Gagal membuat Unit');
        }
    }

    public function update(Request $request, string $id, UnitService $unitService)
    {
        $validate = $unitService->validateInput($request);

        if ($validate !== true) {
            return redirect()->back()->with('validation', $validate->messages());
        }

        $status = $unitService->update($request, $id);

        if ($status) {
            return redirect()->route('admin.units')->with('success', 'Unit updated successfully');
        } else {
            return redirect()->back()->with('error', 'Gagal membuat Unit');
        }
    }

    public function updateProgram(Request $request, string $id, UnitProgramService $unitProgramService)
    {
        $validate = $unitProgramService->validateInput($request);

        if ($validate !== true) {
            return redirect()->back()->with('validation', $validate->messages());
        }

        $status = $unitProgramService->update($request, $id);

        if ($status) {
            return redirect()->route('admin.units')->with('success', 'Program updated successfully');
        } else {
            return redirect()->back()->with('error', 'Gagal membuat Unit');
        }
    }

    public function destroyProgram(Request $request)
    {
        $unitProgram = UnitProgram::findOrFail($request->id);

        $unitProgram->delete();

        return redirect()->back()->with('success', 'Program deleted successfully');
    }

    public function createProgram(Request $request)
    {
        $unitId = $request->unitId;

        return view('admin.dashboard.unit.program.create', [
            'unitId' => $unitId
        ]);
    }

    public function editProgram(string $id)
    {
        $program = UnitProgram::findOrFail($id);

        return view('admin.dashboard.unit.program.edit', [
            'program' => $program
        ]);
    }

    public function storeProgram(Request $request, UnitProgramService $unitProgramService)
    {
        $validate = $unitProgramService->validateInput($request);

        if ($validate !== true) {
            return redirect()->back()->with('validation', $validate->messages());
        }

        $status = $unitProgramService->create($request);

        if ($status) {
            return redirect()->route('admin.units')->with('success', 'Program created successfully');
        } else {
            return redirect()->back()->with('error', 'Gagal membuat Program');
        }
    }
}
