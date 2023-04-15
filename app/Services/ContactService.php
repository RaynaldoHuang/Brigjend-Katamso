<?php

namespace App\Services;

use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ContactService
{
    public function create($request)
    {
        DB::beginTransaction();

        try {
            $checkContact = self::checkAvailable($request->name);

            if ($checkContact) {
                $checkContact->update([
                    'email' => $request->email,
                    'phone' => $request->phone,
                ]);
            } else {
                Contact::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                ]);
            }

            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function checkAvailable($name)
    {
        $contact = Contact::where('name', $name)->first();

        if ($contact) {
            return $contact;
        }

        return false;
    }

    public function update($request, $id)
    {
        $contact = Contact::findOrFail($id);

        DB::beginTransaction();

        try {
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->save();

            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function validateInput($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'nullable|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }
}
