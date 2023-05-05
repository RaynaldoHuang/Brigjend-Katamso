<?php

namespace Database\Seeders;

use App\Models\UnitBrosur;
use Illuminate\Database\Seeder;

class UnitBrosurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // TK dan PG
        UnitBrosur::create([
            'unit_id' => 1,
            'brosur' => 'image/brosur SD front.png',
            'year' => 2023,
            'order' => 1,
            'is_active' => 1,
        ]);

        UnitBrosur::create([
            'unit_id' => 1,
            'brosur' => 'image/brosur SD back.jpg',
            'year' => 2023,
            'order' => 2,
            'is_active' => 1,
        ]);

        // SD
        UnitBrosur::create([
            'unit_id' => 2,
            'brosur' => 'image/brosur SD front.png',
            'year' => 2023,
            'order' => 1,
            'is_active' => 1,
        ]);

        UnitBrosur::create([
            'unit_id' => 2,
            'brosur' => 'image/brosur SD back.jpg',
            'year' => 2023,
            'order' => 2,
            'is_active' => 1,
        ]);

        // SMP
        UnitBrosur::create([
            'unit_id' => 3,
            'brosur' => 'image/brosur SD front.png',
            'year' => 2023,
            'order' => 1,
            'is_active' => 1,
        ]);

        UnitBrosur::create([
            'unit_id' => 3,
            'brosur' => 'image/brosur SD back.jpg',
            'year' => 2023,
            'order' => 2,
            'is_active' => 1,
        ]);

        // SMA
        UnitBrosur::create([
            'unit_id' => 4,
            'brosur' => 'image/brosur SD front.png',
            'year' => 2023,
            'order' => 1,
            'is_active' => 1,
        ]);

        UnitBrosur::create([
            'unit_id' => 4,
            'brosur' => 'image/brosur SD back.jpg',
            'year' => 2023,
            'order' => 2,
            'is_active' => 1,
        ]);

        // SMK
        UnitBrosur::create([
            'unit_id' => 5,
            'brosur' => 'image/brosur SD front.png',
            'year' => 2023,
            'order' => 1,
            'is_active' => 1,
        ]);

        UnitBrosur::create([
            'unit_id' => 5,
            'brosur' => 'image/brosur SD back.jpg',
            'year' => 2023,
            'order' => 2,
            'is_active' => 1,
        ]);
    }
}
