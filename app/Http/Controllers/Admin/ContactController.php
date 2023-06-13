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
            handleSession(422, $validate->messages());
            return redirect()->back()->withInput($request->all());
        }

        $status = $contactService->update($request, $id);

        if ($status) {
            handleSession(200, "Berhasil memperbaharui Contact");
            return redirect()->route('admin.contact');
        } else {
            handleSession(400, "Gagal memperbaharui Contact");
            return redirect()->back()->withInput($request->all());
        }
    }

    public function store(Request $request, ContactService $contactService)
    {
        $validate = $contactService->validateInput($request);

        if ($validate !== true) {
            handleSession(422, $validate->messages());
            return redirect()->back()->withInput($request->all());
        }

        $status = $contactService->create($request);

        if ($status) {
            handleSession(200, "Berhasil membuat Contact");
            return redirect()->route('admin.contact');
        } else {
            handleSession(400, "Gagal membuat Contact");
            return redirect()->back()->withInput($request->all());
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
