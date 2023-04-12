<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievements;
use App\Models\CarouselImage;
use App\Models\NewsActivities;
use App\Models\Units;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function main()
    {
        $totalAdmins = User::count();
        $totalPosts = NewsActivities::count();
        $totalAchievements = Achievements::count();
        $totalUnits = Units::count();

        return view('admin.dashboard.main', [
            'totalAdmins' => $totalAdmins,
            'totalAchievements' => $totalAchievements,
            'totalPosts' => $totalPosts,
            'totalJenjang' => $totalUnits,
        ]);
    }
}
