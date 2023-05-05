<?php

namespace Database\Seeders;

use App\Models\UnitDetail;
use Illuminate\Database\Seeder;

class UnitDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TK dan PG
        UnitDetail::create([
            'unit_id' => 1,
            'title' => 'PG dan TK Brigjend Katamso',
            'description' => 'Mendidik anak dengan kasih sayang kepada peserta didik agar mereka memiliki kepercayaan diri, dengan dasar disiplin serta prilaku yang baik, hormat kepada orang tua dan guru serta bertaqwa kepada Tuhan Y.M.E. Membantu anak agar dapat mandiri dan bersosialisasi dengan baik. Memberikan pengetahuan dasar tentang membaca, menulis, berhitung, menggambar, bernyanyi dan belajar sambil bermain.',
            'alt' => 'PG dan TK',
            'image' => 'image/unit tk 1.png',
            'is_published' => true,
        ]);

        // SD
        UnitDetail::create([
            'unit_id' => 2,
            'title' => 'SD Brigjend Katamso',
            'description' => 'Mendidik anak dengan kasih sayang kepada peserta didik agar mereka memiliki kepercayaan diri, dengan dasar disiplin serta prilaku yang baik, hormat kepada orang tua dan guru serta bertaqwa kepada Tuhan Y.M.E. Membantu anak agar dapat mandiri dan bersosialisasi dengan baik. Memberikan pengetahuan dasar tentang membaca, menulis, berhitung, menggambar, bernyanyi dan belajar sambil bermain.',
            'alt' => 'Sekolah Dasar',
            'image' => 'image/unit tk 1.png',
            'is_published' => true,
        ]);

        // SMP
        UnitDetail::create([
            'unit_id' => 3,
            'title' => 'SMP Brigjend Katamso',
            'description' => 'Mendidik anak dengan kasih sayang kepada peserta didik agar mereka memiliki kepercayaan diri, dengan dasar disiplin serta prilaku yang baik, hormat kepada orang tua dan guru serta bertaqwa kepada Tuhan Y.M.E. Membantu anak agar dapat mandiri dan bersosialisasi dengan baik. Memberikan pengetahuan dasar tentang membaca, menulis, berhitung, menggambar, bernyanyi dan belajar sambil bermain.',
            'alt' => 'Sekolah Menengah Pertama',
            'image' => 'image/unit tk 1.png',
            'is_published' => true,
        ]);

        // SMA
        UnitDetail::create([
            'unit_id' => 4,
            'title' => 'SMA Brigjend Katamso',
            'description' => 'Mendidik anak dengan kasih sayang kepada peserta didik agar mereka memiliki kepercayaan diri, dengan dasar disiplin serta prilaku yang baik, hormat kepada orang tua dan guru serta bertaqwa kepada Tuhan Y.M.E. Membantu anak agar dapat mandiri dan bersosialisasi dengan baik. Memberikan pengetahuan dasar tentang membaca, menulis, berhitung, menggambar, bernyanyi dan belajar sambil bermain.',
            'alt' => 'Sekolah Menengah Atas',
            'image' => 'image/unit tk 1.png',
            'is_published' => true,
        ]);

        // SMK
        UnitDetail::create([
            'unit_id' => 5,
            'title' => 'SMK Brigjend Katamso',
            'description' => 'Mendidik anak dengan kasih sayang kepada peserta didik agar mereka memiliki kepercayaan diri, dengan dasar disiplin serta prilaku yang baik, hormat kepada orang tua dan guru serta bertaqwa kepada Tuhan Y.M.E. Membantu anak agar dapat mandiri dan bersosialisasi dengan baik. Memberikan pengetahuan dasar tentang membaca, menulis, berhitung, menggambar, bernyanyi dan belajar sambil bermain.',
            'alt' => 'Sekolah Menengah Kejuruan',
            'image' => 'image/img3.png',
            'is_published' => true,
        ]);
    }
}
