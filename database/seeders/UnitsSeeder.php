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
        $units = [
            [
                'name' => 'tk-dan-pg',
                'image' => 'image/unit tk 1.png'
            ],
            [
                'name' => 'sd',
                'image' => 'image/UNIT 1.png'
            ],
            [
                'name' => 'smp',
                'image' => 'image/UNIT 1.png'
            ],
            [
                'name' => 'sma',
                'image' => 'image/UNIT 1.png'
            ],
            [
                'name' => 'smk',
                'image' => 'image/UNIT 1.png'
            ],
        ];

        foreach ($units as $unit) {
            Units::create([
                'name' => $unit['name'],
                'image' => $unit['image']
            ]);
        }
    }
}
