<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UnitImage;

class AdminUnitController extends Controller
{
    public function view()
    {
        $units = UnitImage::paginate(5);

        return view('admin.dashboard.unit.view', [
            'units' => $units
        ]);
    }
}
