<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImageConfig;
use App\Services\ImageConfigService;
use Illuminate\Http\Request;

class AdminImageConfigController extends Controller
{
    public function view()
    {
        $imageConfig = ImageConfig::orderBy('id', 'desc')->paginate(10);

        return view('admin.dashboard.config.image.view', [
            'imageConfig' => $imageConfig,
        ]);
    }

    public function edit(string $id)
    {
        $imageConfig = ImageConfig::findOrFail($id);

        return view('admin.dashboard.config.image.edit', [
            'imageConfig' => $imageConfig,
        ]);
    }

    public function update(Request $request, string $id, ImageConfigService $imageConfigService)
    {
        $imageConfig = ImageConfig::findOrFail($id);

        $validate = $imageConfigService->validateInputUpdate($request);

        if ($validate !== true) {
            handleSession(422, $validate->messages());
            return redirect()->back()->withInput($request->all());
        }

        $status = $imageConfigService->update($request, $id);

        if ($status) {
            handleSession(200, "Berhasil memperbaharui Gambar " . $imageConfig->slug);
            return redirect()->route('admin.config.image');
        } else {
            handleSession(400, "Gagal memperbaharui Gambar" . $imageConfig->slug);
            return redirect()->back()->withInput($request->all());
        }
    }
}
