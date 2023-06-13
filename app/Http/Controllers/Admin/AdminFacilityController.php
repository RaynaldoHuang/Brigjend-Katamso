<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use App\Services\FacilityService;
use Illuminate\Http\Request;

class AdminFacilityController extends Controller
{
    public function view()
    {
        $facility = Facility::orderBy('id', 'desc')->paginate(5);

        return view('admin.dashboard.facility.view', [
            'facility' => $facility,
        ]);
    }

    public function create()
    {
        return view('admin.dashboard.facility.create');
    }

    public function store(Request $request, FacilityService $facilityService)
    {
        $validate = $facilityService->validateInput($request);

        if ($validate !== true) {
            handleSession(422, $validate->messages());
            return redirect()->back()->withInput($request->all());
        }

        $status = $facilityService->create($request);

        if ($status) {
            handleSession(200, "Berhasil menambahkan Fasilitas");
            return redirect()->route('admin.facility');
        } else {
            handleSession(400, "Gagal membuat fasilitas");
            return redirect()->back()->withInput($request->all());
        }
    }

    public function edit(string $id)
    {
        $facility = Facility::findOrFail($id);

        return view('admin.dashboard.facility.edit', [
            'facility' => $facility,
        ]);
    }

    public function update(Request $request, string $id, FacilityService $achievementService)
    {
        $validate = $achievementService->validateInputUpdate($request);

        if ($validate !== true) {
            handleSession(422, $validate->messages());
            return redirect()->back()->withInput($request->all());
        }

        $status = $achievementService->update($request, $id);

        if ($status) {
            handleSession(200, "Berhasil menambahkan Fasilitas");
            return redirect()->route('admin.facility');
        } else {
            handleSession(400, "Gagal membuat fasilitas");
            return redirect()->back()->withInput($request->all());
        }
    }

    public function destroy(Request $request)
    {
        $facility = Facility::findOrFail($request->id);

        $facility->delete();

        handleSession(200, "Berhasil menghapus Facilitas");
        return redirect()->route('admin.facility');
    }

}
