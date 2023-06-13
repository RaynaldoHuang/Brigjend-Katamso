<?php

namespace Database\Seeders;

use App\Models\ImageConfig;
use Illuminate\Database\Seeder;

class ImageConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
            ["slug" => "Visi", "image" => "image/image1.png"],
            ["slug" => "Misi", "image" => "image/image2.png"],
            ["slug" => "KTC", "image" => "image/Artboard 4.png"],
        ];

        $list = json_decode(json_encode($list));

        foreach ($list as $item) {
            ImageConfig::updateOrCreate(["slug" => $item->slug], ["image" => $item->image]);
        }
    }
}
