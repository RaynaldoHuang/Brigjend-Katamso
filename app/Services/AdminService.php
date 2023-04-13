<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminService
{
    public function create($request)
    {
        DB::beginTransaction();

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'is_super' => $request->is_super,
                'email_verified_at' => now(),
            ]);

            if (!$user) {
                DB::rollBack();
                return false;
            }

            DB::commit();

            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }

    }

    public function validateInput($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'is_super' => 'required|boolean',
            'status' => 'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }

    public function validateUpdate($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'is_super' => 'required|boolean',
            'status' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }

    public function validatePassword($request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }

    public function checkPasswordIsSame($request)
    {
        $user = User::findOrFail($request->id);

        if (Hash::check($request->password, $user->password)) {
            return false;
        }

        return true;
    }

    public function changePassword($request)
    {
        DB::beginTransaction();

        try {
            $user = User::findOrFail($request->id);

            $user->update([
                'password' => Hash::make($request->password),
            ]);

            DB::commit();

            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function update($request, $id)
    {
        DB::beginTransaction();

        try {
            $user = User::findOrFail($id);

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'is_super' => $request->is_super,
                'status' => $request->status,
            ]);

            DB::commit();

            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }
}
