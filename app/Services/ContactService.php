<?php

namespace App\Services;

use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ContactService
{
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
            $contact->description = $request->description;
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
            // 'name' => 'nullable|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }
}
