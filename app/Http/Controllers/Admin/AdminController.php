<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\AdminServices;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.dashboard.access.view', [
            'users' => $users,
        ]);
    }

    public function edit(string $id)
    {
        $users = User::findOrfail($id);

        return view('admin.dashboard.access.edit', [
            'users' => $users,
        ]);
    }

    public function store(Request $request, AdminServices $adminServices)
    {
        $validate = $adminServices->validateInput($request);

        if ($validate !== true) {
            return redirect()->back()->with('validation', $validate->messages());
        }

        $status = $adminServices->create($request);

        if ($status) {
            return redirect()->route('admin.access')->with('success', 'Berhasil menambahkan admin baru');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan admin baru');
        }
    }

    public function create()
    {
        return view('admin.dashboard.access.create');
    }
}
