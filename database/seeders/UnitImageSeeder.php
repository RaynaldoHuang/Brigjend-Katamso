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
            'title' => 'PG dan TK Brigjend Katamso',
            'description' => 'Mendidik anak dengan kasih sayang kepada peserta didik agar mereka memiliki kepercayaan diri, dengan dasar disiplin serta prilaku yang baik, hormat kepada orang tua dan guru serta bertaqwa kepada Tuhan Y.M.E. Membantu anak agar dapat mandiri dan bersosialisasi dengan baik. Memberikan pengetahuan dasar tentang membaca, menulis, berhitung, menggambar, bernyanyi dan belajar sambil bermain.',
            'type' => 'pg',
            'alt' => 'PG',
            'main_image' => 'image/unit tk 1.png',
            'image' => 'image/unit tk 1.png',
            'is_published' => true,
        ]);

        UnitImage::create([
            'unit_id' => 1,
            'title' => 'PG dan TK Brigjend Katamso',
            'description' => 'Mendidik anak dengan kasih sayang kepada peserta didik agar mereka memiliki kepercayaan diri, dengan dasar disiplin serta prilaku yang baik, hormat kepada orang tua dan guru serta bertaqwa kepada Tuhan Y.M.E. Membantu anak agar dapat mandiri dan bersosialisasi dengan baik. Memberikan pengetahuan dasar tentang membaca, menulis, berhitung, menggambar, bernyanyi dan belajar sambil bermain.',
            'type' => 'tk',
            'alt' => 'TK',
            'main_image' => 'image/unit tk 1.png',
            'image' => 'image/unit tk 1.png',
            'is_published' => true,
        ]);

        // SD
        UnitImage::create([
            'unit_id' => 2,
            'title' => 'SD Brigjend Katamso',
            'description' => 'Mendidik anak dengan kasih sayang kepada peserta didik agar mereka memiliki kepercayaan diri, dengan dasar disiplin serta prilaku yang baik, hormat kepada orang tua dan guru serta bertaqwa kepada Tuhan Y.M.E. Membantu anak agar dapat mandiri dan bersosialisasi dengan baik. Memberikan pengetahuan dasar tentang membaca, menulis, berhitung, menggambar, bernyanyi dan belajar sambil bermain.',
            'type' => 'smp',
            'alt' => 'Sekolah Dasar',
            'main_image' => 'image/unit tk 1.png',
            'image' => 'image/unit tk 1.png',
            'is_published' => true,
        ]);

        // SMP
        UnitImage::create([
            'unit_id' => 3,
            'title' => 'SMP Brigjend Katamso',
            'description' => 'Mendidik anak dengan kasih sayang kepada peserta didik agar mereka memiliki kepercayaan diri, dengan dasar disiplin serta prilaku yang baik, hormat kepada orang tua dan guru serta bertaqwa kepada Tuhan Y.M.E. Membantu anak agar dapat mandiri dan bersosialisasi dengan baik. Memberikan pengetahuan dasar tentang membaca, menulis, berhitung, menggambar, bernyanyi dan belajar sambil bermain.',
            'type' => 'smp',
            'alt' => 'Sekolah Menengah Pertama',
            'main_image' => 'image/unit tk 1.png',
            'image' => 'image/unit tk 1.png',
            'is_published' => true,
        ]);

        // SMA
        UnitImage::create([
            'unit_id' => 4,
            'title' => 'SMA Brigjend Katamso',
            'description' => 'Mendidik anak dengan kasih sayang kepada peserta didik agar mereka memiliki kepercayaan diri, dengan dasar disiplin serta prilaku yang baik, hormat kepada orang tua dan guru serta bertaqwa kepada Tuhan Y.M.E. Membantu anak agar dapat mandiri dan bersosialisasi dengan baik. Memberikan pengetahuan dasar tentang membaca, menulis, berhitung, menggambar, bernyanyi dan belajar sambil bermain.',
            'type' => 'sma',
            'alt' => 'Sekolah Menengah Atas',
            'main_image' => 'image/unit tk 1.png',
            'image' => 'image/unit tk 1.png',
            'is_published' => true,
        ]);

        // SMK
        UnitImage::create([
            'unit_id' => 5,
            'title' => 'SMK Brigjend Katamso',
            'description' => 'Mendidik anak dengan kasih sayang kepada peserta didik agar mereka memiliki kepercayaan diri, dengan dasar disiplin serta prilaku yang baik, hormat kepada orang tua dan guru serta bertaqwa kepada Tuhan Y.M.E. Membantu anak agar dapat mandiri dan bersosialisasi dengan baik. Memberikan pengetahuan dasar tentang membaca, menulis, berhitung, menggambar, bernyanyi dan belajar sambil bermain.',
            'type' => 'smk',
            'alt' => 'Sekolah Menengah Kejuruan',
            'main_image' => 'image/unit tk 1.png',
            'image' => 'image/img3.png',
            'is_published' => true,
        ]);
    }
}
