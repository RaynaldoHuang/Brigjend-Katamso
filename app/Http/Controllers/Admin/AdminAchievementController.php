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
        $achievement = Achievements::published()->paginate(5);

        return view('admin.dashboard.achievement.view', [
            'achievement' => $achievement,
        ]);
    }

    public function store(Request $request, AchievementService $achievementService)
    {
        $validate = $achievementService->validateInput($request);

        if ($validate !== true) {
            return redirect()->back()->with('validation', $validate->messages());
        }

        $status = $achievementService->create($request);

        if ($status) {
            return redirect()->route('admin.achievement')->with('success', 'Achievement created successfully');
        } else {
            return redirect()->back()->with('error', 'Gagal membuat Carousel Image');
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
            return redirect()->back()->with('validation', $validate->messages());
        }

        $status = $achievementService->update($request, $id);

        if ($status) {
            return redirect()->route('admin.achievement')->with('success', 'Achievement created successfully');
        } else {
            return redirect()->back()->with('error', 'Gagal membuat Carousel Image');
        }
    }

    public function destroy(Request $request)
    {
        $achievement = Achievements::findOrFail($request->id);

        $achievement->delete();

        return redirect()->route('admin.achievement')->with('success', 'Achievement deleted successfully');
    }
}
