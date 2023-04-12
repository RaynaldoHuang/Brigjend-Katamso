<?php

namespace Database\Seeders;

use App\Models\UnitImage;
use Illuminate\Database\Seeder;

class UnitImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TK dan PG
        UnitImage::create([
            'unit_id' => 1,
            'alt' => 'TK dan PG',
            'type' => 'tkdanpg',
            'image' => 'image/unit tk 1.png',
            'is_main' => true,
            'is_published' => true,
        ]);

        UnitImage::create([
            'unit_id' => 1,
            'alt' => 'TK dan PG',
            'type' => 'tk',
            'image' => 'image/img3.png',
            'is_main' => false,
            'is_published' => true,
        ]);

        UnitImage::create([
            'unit_id' => 1,
            'alt' => 'TK dan PG',
            'type' => 'pg',
            'image' => 'image/img3.png',
            'is_main' => false,
            'is_published' => true,
        ]);

        // SD
        UnitImage::create([
            'unit_id' => 2,
            'alt' => 'Sekolah Dasar',
            'type' => 'sd',
            'image' => 'image/unit tk 1.png',
            'is_main' => true,
            'is_published' => true,
        ]);

        UnitImage::create([
            'unit_id' => 2,
            'alt' => 'Sekolah Dasar',
            'type' => 'sd',
            'image' => 'image/img3.png',
            'is_main' => false,
            'is_published' => true,
        ]);

        // SMP
        UnitImage::create([
            'unit_id' => 3,
            'alt' => 'Sekolah Menengah Pertama',
            'type' => 'smp',
            'image' => 'image/unit tk 1.png',
            'is_main' => true,
            'is_published' => true,
        ]);

        UnitImage::create([
            'unit_id' => 3,
            'alt' => 'Sekolah Menengah Pertama',
            'type' => 'smp',
            'image' => 'image/img3.png',
            'is_main' => false,
            'is_published' => true,
        ]);

        // SMA
        UnitImage::create([
            'unit_id' => 4,
            'alt' => 'Sekolah Menengah Atas',
            'type' => 'sma',
            'image' => 'image/unit tk 1.png',
            'is_main' => true,
            'is_published' => true,
        ]);

        UnitImage::create([
            'unit_id' => 4,
            'alt' => 'Sekolah Menengah Atas',
            'type' => 'sma',
            'image' => 'image/img3.png',
            'is_main' => false,
            'is_published' => true,
        ]);

        // SMK
        UnitImage::create([
            'unit_id' => 5,
            'alt' => 'Sekolah Menengah Kejuruan',
            'type' => 'smk',
            'image' => 'image/unit tk 1.png',
            'is_main' => true,
            'is_published' => true,
        ]);

        UnitImage::create([
            'unit_id' => 5,
            'alt' => 'Sekolah Menengah Kejuruan',
            'type' => 'smk',
            'image' => 'image/img3.png',
            'is_main' => false,
            'is_published' => true,
        ]);
    }
}
