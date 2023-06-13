<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $list = [
            [
                'name' => 'Telp Brigjend Katamso 1',
                'description' => '061 - 845 1582'
            ],
            [
                'name' => 'Telp Brigjend Katamso 2',
                'description' => '061 - 685 4666'
            ],
            [
                'name' => 'Email Brigjend Katamso',
                'description' => 'contact@ypnbrigjendkatamso.sch.id'
            ],
            [
                'name' => 'Telp TK',
                'description' => '+62 098 1230'
            ],
            [
                'name' => 'Telp SD',
                'description' => '+62 098 1231'
            ],
            [
                'name' => 'Telp SMP',
                'description' => '+62 098 1232'
            ],
            [
                'name' => 'Telp SMA',
                'description' => '+62 098 1233'
            ],
            [
                'name' => 'Telp SMK',
                'description' => '+62 098 1234'
            ],
            [
                'name' => 'Instagram',
                'description' => 'https://www.instagram.com/'
            ],
            [
                'name' => 'Facebook',
                'description' => 'https://www.facebook.com/'
            ],
            [
                'name' => 'Youtube',
                'description' => 'https://www.youtube.com/'
            ],
        ];

        $list = json_decode(json_encode($list));

        foreach ($list as $item) {
            Contact::updateOrCreate(["name" => $item->name], ['description' => $item->description]);
        }
    }
}
