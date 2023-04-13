<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UnitBrosur;
use Illuminate\Http\Request;

class BrosurController extends Controller
{
    public function view()
    {
        $brosurs = UnitBrosur::all();

        // gabung brosur dengan unit yang sama
        $brosurs = $brosurs->groupBy('unit_id');

        return view('admin.dashboard.brosur.view', [
            'brosurs' => $brosurs
        ]);
    }

    public function destroy(Request $request)
    {
        $brosur = UnitBrosur::findOrFail($request->id);

        $brosur->delete();

        return redirect()->back()->with('success', 'Brochure deleted successfully');
    }
}
