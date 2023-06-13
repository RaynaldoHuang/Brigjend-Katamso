<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\AdminService;
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

    public function store(Request $request, AdminService $adminServices)
    {
        $validate = $adminServices->validateInput($request);

        if ($validate !== true) {
            return redirect()->back()->with('validation', $validate->messages());
        }

        $status = $adminServices->create($request);

        if ($status) {
            handleSession(200, "Berhasil menambahkan Admin");
            return redirect()->route('admin.access');
        } else {
            handleSession(400, "Gagal membuat Admin");
            return redirect()->back()->withInput($request->all());
        }
    }

    public function create()
    {
        return view('admin.dashboard.access.create');
    }

    public function changePassword(Request $request, AdminService $adminServices)
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
            handleSession(200, "Berhasil mengubah password admin");
            return redirect()->route('admin.access');
        } else {
            handleSession(400, "Gagal memperbaharui Admin");
            return redirect()->back()->withInput($request->all());
        }
    }

    public function update(Request $request, string $id, AdminService $adminServices)
    {
        $validate = $adminServices->validateUpdate($request);

        if ($validate !== true) {
            return redirect()->back()->with('validationUpdate', $validate->messages());
        }

        $status = $adminServices->update($request, $id);

        if ($status) {
            handleSession(200, "Berhasil memperbaharui Admin");
            return redirect()->route('admin.access');
        } else {
            handleSession(400, "Gagal memperbaharui Admin");
            return redirect()->back()->withInput($request->all());
        }
    }
}
