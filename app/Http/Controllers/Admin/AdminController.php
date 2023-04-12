<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
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

        return view('admin.dashboard.access.view', [
            'users' => $users,
        ]);
    }

    public function create()
    {
        return view('admin.dashboard.access.create');
    }
}
