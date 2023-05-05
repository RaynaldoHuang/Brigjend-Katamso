<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'name' => 'Brigjend Katamso 1',
            'phone' => '061 - 845 1582',
            'email' => 'contact@ypnbrigjendkatamso.sch.id',
        ]);

        Contact::create([
            'name' => 'Brigjend Katamso 2',
            'phone' => '061 - 685 4666',
            'email' => 'contact@ypnbrigjendkatamso2.sch.id',
        ]);
    }
}
