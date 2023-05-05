<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Services\ContactService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function view()
    {
        $contacts = Contact::all();

        return view('admin.dashboard.contact.view', [
            'contacts' => $contacts
        ]);
    }

    public function edit(string $id)
    {
        $contact = Contact::findOrFail($id);

        return view('admin.dashboard.contact.edit', [
            'contact' => $contact
        ]);
    }

    public function update(Request $request, string $id, ContactService $contactService)
    {
        $validate = $contactService->validateInput($request);

        if ($validate !== true) {
            return redirect()->back()->with('validation', $validate->messages());
        }

        $status = $contactService->update($request, $id);

        if ($status) {
            return redirect()->route('admin.contact')->with('success', 'Contact updated successfully');
        } else {
            return redirect()->back()->with('error', 'Gagal update Contact');
        }
    }

    public function store(Request $request, ContactService $contactService)
    {
        $validate = $contactService->validateInput($request);

        if ($validate !== true) {
            return redirect()->back()->with('validation', $validate->messages());
        }

        $status = $contactService->create($request);

        if ($status) {
            return redirect()->route('admin.contact')->with('success', 'Contact created successfully');
        } else {
            return redirect()->back()->with('error', 'Gagal membuat Contact');
        }
    }

    public function create()
    {
        return view('admin.dashboard.contact.create');
    }

    public function destroy(Request $request)
    {
        $contact = Contact::findOrFail($request->id);

        $contact->delete();

        return redirect()->route('admin.contact')->with('success', 'Contact deleted successfully');
    }
}
