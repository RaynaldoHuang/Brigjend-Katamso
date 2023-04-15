<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UnitDetail;

class AdminUnitController extends Controller
{
    public function view()
    {
        $units = UnitDetail::paginate(5);

        return view('admin.dashboard.unit.view', [
            'units' => $units
        ]);
    }
}
