<?php

namespace Database\Seeders;

use App\Models\CarouselImage;
use Illuminate\Database\Seeder;

class CarouselImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image = [
            [
                'name' => 'Carousel Image 1',
                'image' => 'image/Artboard 1.png',
                'is_active' => 1,
                'action' => 'Klik Akuu..',
                'url' => 'https://google.com'
            ],
            [
                'name' => 'Carousel Image 2',
                'image' => 'image/Artboard 2.png',
                'is_active' => 1,
            ],
            [
                'name' => 'Carousel Image 3',
                'image' => 'image/Artboard 3.png',
                'is_active' => 1,
            ],
        ];

        foreach ($image as $key => $value) {
            CarouselImage::create($value);
        }
    }
}
