<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imgPath = '/image/image3.png';

        foreach (range(1, 10) as $i) {
            Facility::updateOrCreate(['title' => "Fasilitas " . $i], [
                "image" => $imgPath,
            ]);
        }
    }
}
