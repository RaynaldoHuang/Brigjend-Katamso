<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievements;

class AdminAchievementController extends Controller
{
    public function view()
    {
        $achievement = Achievements::published()->paginate(5);

        return view('admin.dashboard.achievement.view', [
            'achievement' => $achievement,
        ]);
    }
}
