<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievements;
use App\Services\AchievementService;
use Illuminate\Http\Request;

class AdminAchievementController extends Controller
{
    public function view()
    {
        $achievement = Achievements::published()->orderBy('id', 'desc')->paginate(5);

        return view('admin.dashboard.achievement.view', [
            'achievement' => $achievement,
        ]);
    }

    public function store(Request $request, AchievementService $achievementService)
    {
        $validate = $achievementService->validateInput($request);

        if ($validate !== true) {
            handleSession(422, $validate->messages());
            return redirect()->back()->withInput($request->all());
        }

        $status = $achievementService->create($request);

        if ($status) {
            handleSession(200, "Berhasil menambahkan Achievement");
            return redirect()->route('admin.achievement');
        } else {
            handleSession(400, "Gagal membuat achievement");
            return redirect()->back()->withInput($request->all());
        }
    }

    public function create()
    {
        return view('admin.dashboard.achievement.create');
    }

    public function edit(string $id)
    {
        $achievement = Achievements::findOrFail($id);

        return view('admin.dashboard.achievement.edit', [
            'achievement' => $achievement,
        ]);
    }

    public function update(Request $request, string $id, AchievementService $achievementService)
    {
        $validate = $achievementService->validateInputUpdate($request);

        if ($validate !== true) {
            handleSession(422, $validate->messages());
            return redirect()->back()->withInput($request->all());
        }

        $status = $achievementService->update($request, $id);

        if ($status) {
            handleSession(200, "Berhasil memperbaharui Achievement");
            return redirect()->route('admin.achievement');
        } else {
            handleSession(400, "Gagal memperbaharui Achievement");
            return redirect()->back()->withInput($request->all());
        }
    }

    public function destroy(Request $request)
    {
        $achievement = Achievements::findOrFail($request->id);

        $achievement->delete();

        handleSession(200, "Berhasil menghapus Achievement");
        return redirect()->route('admin.achievement');
    }
}
