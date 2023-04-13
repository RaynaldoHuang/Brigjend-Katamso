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
            'user' => $users,
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

    public function changePassword(Request $request, AdminServices $adminServices)
    {
        $validate = $adminServices->validatePassword($request);

        if ($validate !== true) {
            return redirect()->back()->with('validationPassword', $validate->messages());
        }

        $checkPassword = $adminServices->checkPasswordIsSame($request);
        
        if ($checkPassword !== true) {
            return redirect()->back()->with('validationPassword', [['Password cannot be the same as old password']]);
        }

        $status = $adminServices->changePassword($request);

        if ($status) {
            return redirect()->route('admin.access')->with('success', 'Berhasil mengubah password admin');
        } else {
            return redirect()->back()->with('validationPassword', $status);
        }
    }

    public function update(Request $request, string $id, AdminServices $adminServices)
    {
        $validate = $adminServices->validateUpdate($request);

        if ($validate !== true) {
            return redirect()->back()->with('validationUpdate', $validate->messages());
        }

        $status = $adminServices->update($request, $id);

        if ($status) {
            return redirect()->route('admin.access')->with('success', 'Berhasil mengubah data admin');
        } else {
            return redirect()->back()->with('error', 'Gagal mengubah data admin');
        }
    }
}
