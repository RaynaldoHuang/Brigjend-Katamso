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
            $checkContact = self::checkAvailable($request->name, $request->type);

            if ($checkContact) {
                $checkContact->update([
                    'value' => $request->value,
                ]);
            } else {
                Contact::create([
                    'name' => $request->name,
                    'value' => $request->value,
                    'type' => $request->type,
                ]);
            }

            DB::commit();

            return true;
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }
    }

    public function checkAvailable($name, $type)
    {
        $contact = Contact::where('name', $name)->where('type', $type)->first();

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
            $contact->update($request->all());

            DB::commit();

            return true;
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }
    }

    public function validateInput($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'value' => 'required|string|max:255',
            'type' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }
}
