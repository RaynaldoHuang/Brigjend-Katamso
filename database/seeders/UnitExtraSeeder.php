<?php

namespace Database\Seeders;

use App\Models\UnitExtra;
use Illuminate\Database\Seeder;

class UnitExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UnitExtra::create([
            'name' => 'Menari',
            'unit_id' => 1,
            'alt' => 'Extrakulikuler Menari',
            'image' => 'image/image3.png',
            'is_active' => true,
        ]);

        UnitExtra::create([
            'unit_id' => 1,
            'name' => 'Angklung',
            'alt' => 'Extrakulikuler Angklung',
            'image' => 'image/image3.png',
            'is_active' => true,
        ]);

        UnitExtra::create([
            'unit_id' => 1,
            'name' => 'Mewarnai & Menggambar',
            'alt' => 'Extrakulikuler Mewarnai & Menggambar',
            'image' => 'image/image3.png',
            'is_active' => true,
        ]);

        UnitExtra::create([
            'unit_id' => 1,
            'name' => 'Senam',
            'alt' => 'Extrakulikuler Senam',
            'image' => 'image/image3.png',
            'is_active' => true,
        ]);

        UnitExtra::create([
            'unit_id' => 1,
            'name' => 'Bernyanyi',
            'alt' => 'Extrakulikuler Bernyanyi',
            'image' => 'image/image3.png',
            'is_active' => true,
        ]);

        UnitExtra::create([
            'unit_id' => 1,
            'name' => 'Story Telling',
            'alt' => 'Extrakulikuler Story Telling',
            'image' => 'image/image3.png',
            'is_active' => true,
        ]);
    }
}
