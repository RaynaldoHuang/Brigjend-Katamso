<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UnitExtra;
use App\Models\UnitProgram;
use App\Models\Units;
use App\Services\UnitDetailService;
use App\Services\UnitExtraService;
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
            handleSession(422, $validate->messages());
            return redirect()->back()->withInput($request->all());
        }

        $status = $unitDetailService->update($request, $id);

        if ($status) {
            return redirect()->route('admin.units')->with('success', 'Unit Detail updated successfully');
        } else {
            return redirect()->back()->with('error', 'Gagal membuat Unit');
        }
        if ($status) {
            handleSession(200, "Berhasil memperbaharui Unit Detail");
            return redirect()->route('admin.units');
        } else {
            handleSession(400, "Gagal memperbaharui Unit Detail");
            return redirect()->back()->withInput($request->all());
        }
    }

    public function update(Request $request, string $id, UnitService $unitService)
    {
        $validate = $unitService->validateInput($request);

        if ($validate !== true) {
            handleSession(422, $validate->messages());
            return redirect()->back()->withInput($request->all());
        }

        $status = $unitService->update($request, $id);

        if ($status) {
            handleSession(200, "Berhasil memperbaharui Unit");
            return redirect()->route('admin.units');
        } else {
            handleSession(400, "Gagal memperbaharui Unit");
            return redirect()->back()->withInput($request->all());
        }
    }

    public function updateProgram(Request $request, string $id, UnitProgramService $unitProgramService)
    {
        $validate = $unitProgramService->validateInput($request);

        if ($validate !== true) {
            handleSession(422, $validate->messages());
            return redirect()->back()->withInput($request->all());
        }

        $status = $unitProgramService->update($request, $id);

        if ($status) {
            handleSession(200, "Berhasil memperbaharui Program");
            return redirect()->route('admin.units');
        } else {
            handleSession(400, "Gagal memperbaharui Program");
            return redirect()->back()->withInput($request->all());
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
            handleSession(422, $validate->messages());
            return redirect()->back()->withInput($request->all());
        }

        $status = $unitProgramService->create($request);
        dd('sakjskajs');

        if ($status) {
            handleSession(200, "Berhasil membuat Program");
            return redirect()->route('admin.units');
        } else {
            handleSession(400, "Gagal membuat Program");
            return redirect()->back()->withInput($request->all());
        }
    }

    public function createExtra(Request $request)
    {
        $unitId = $request->unitId;

        return view('admin.dashboard.unit.extra.create', [
            'unitId' => $unitId
        ]);
    }

    public function destroyExtra(Request $request)
    {
        $unitExtra = UnitExtra::findOrFail($request->id);

        $unitExtra->delete();

        return redirect()->back()->with('success', 'Extrakulikuler deleted successfully');
    }

    public function editExtra(string $id)
    {
        $extras = UnitExtra::findOrFail($id);

        return view('admin.dashboard.unit.extra.edit', [
            'extras' => $extras
        ]);
    }

    public function updateExtra(Request $request, string $id, UnitExtraService $extraService)
    {
        $validate = $extraService->validateInput($request);

        if ($validate !== true) {
            handleSession(422, $validate->messages());
            return redirect()->back()->withInput($request->all());
        }

        $status = $extraService->update($request, $id);

        if ($status) {
            handleSession(200, "Berhasil memperbaharui Extrakuliker");
            return redirect()->route('admin.units');
        } else {
            handleSession(400, "Gagal memperbaharui Extrakuliker");
            return redirect()->back()->withInput($request->all());
        }
    }

    public function storeExtra(Request $request, UnitExtraService $extraService)
    {
        $validate = $extraService->validateInput($request);

        if ($validate !== true) {
            handleSession(422, $validate->messages());
            return redirect()->back()->withInput($request->all());
        }

        $status = $extraService->create($request);

        if ($status) {
            handleSession(200, "Berhasil membuat Extrakulikuler");
            return redirect()->route('admin.units');
        } else {
            handleSession(400, "Gagal membuat Extrakulikuler");
            return redirect()->back()->withInput($request->all());
        }
    }
}
