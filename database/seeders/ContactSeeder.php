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
            'type' => 'phone',
            'value' => '061 - 845 1582',
        ]);

        Contact::create([
            'name' => 'Brigjend Katamso 2',
            'type' => 'phone',
            'value' => '061 - 685 4666',
        ]);

        Contact::create([
            'name' => 'Brigjend Katamso 1',
            'type' => 'email',
            'value' => 'contact@ypnbrigjendkatamso.sch.id',
        ]);

        Contact::create([
            'name' => 'Brigjend Katamso 2',
            'type' => 'email',
            'value' => 'contact@ypnbrigjendkatamso2.sch.id',
        ]);
    }
}
