<?php

namespace Database\Seeders;

use App\Models\Ktc;
use Illuminate\Database\Seeder;

class KtcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imgPath = '/image/image3.png';

        foreach (range(1, 8) as $i) {
            Ktc::updateOrCreate(['id' => $i], [
                "image" => $imgPath,
            ]);
        }
    }
}
