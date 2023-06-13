<?php

namespace App\Http\Controllers\MainApp;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __construct()
    {
        $contacts['telp_bk_1'] = Contact::query()->where('name', 'Telp Brigjend Katamso 1')->first();
        $contacts['telp_bk_2'] = Contact::query()->where('name', 'Telp Brigjend Katamso 2')->first();
        $contacts['email_bk'] = Contact::query()->where('name', 'Email Brigjend Katamso')->first();
        $contacts['telp_tk'] = Contact::query()->where('name', 'Telp TK')->first();
        $contacts['telp_sd'] = Contact::query()->where('name', 'Telp SD')->first();
        $contacts['telp_smp'] = Contact::query()->where('name', 'Telp SMP')->first();
        $contacts['telp_sma'] = Contact::query()->where('name', 'Telp SMA')->first();
        $contacts['telp_smk'] = Contact::query()->where('name', 'Telp SMK')->first();
        $contacts['instagram'] = Contact::query()->where('name', 'Instagram')->first();
        $contacts['facebook'] = Contact::query()->where('name', 'Facebook')->first();
        $contacts['youtube'] = Contact::query()->where('name', 'Youtube')->first();

        $contacts = json_decode(json_encode($contacts));

        // $contect = [
        //     "contacts" => $contacts
        // ];

        view()->share('contacts', $contacts);
    }
}
