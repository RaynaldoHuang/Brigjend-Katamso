<?php

namespace Database\Seeders;

use App\Models\Units;
use Illuminate\Database\Seeder;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unitNames = [
            'tk-dan-pg',
            'sd',
            'smp',
            'sma',
            'smk',
        ];

        foreach ($unitNames as $unitName) {
            Units::create([
                'name' => $unitName,
            ]);
        }
    }
}
