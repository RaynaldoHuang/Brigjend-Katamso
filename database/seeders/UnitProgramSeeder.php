<?php

namespace Database\Seeders;

use App\Models\UnitProgram;
use Illuminate\Database\Seeder;

class UnitProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TK dan PG
        UnitProgram::create([
            'unit_id' => 1,
            'title' => 'Bermain dan Belajar',
            'description' => 'Program mendidik anak dengan kasih sayang kepada peserta didik agar mereka memiliki kepercayaan diri, dengan dasar disiplin serta prilaku yang baik, hormat kepada orang tua dan guru serta bertaqwa kepada Tuhan Y.M.E. Membantu anak agar dapat mandiri dan bersosialisasi dengan baik. Memberikan pengetahuan dasar tentang membaca, menulis, berhitung, menggambar, bernyanyi dan belajar sambil bermain.',
            'alt' => 'program bermain dan belajar',
            'image' => 'image/unit tk 1.png',
            'is_published' => true,
        ]);

        UnitProgram::create([
            'unit_id' => 1,
            'title' => 'Bersih dan Rapi',
            'description' => 'Program mendidik anak dengan kasih sayang kepada peserta didik agar mereka memiliki kepercayaan diri, dengan dasar disiplin serta prilaku yang baik, hormat kepada orang tua dan guru serta bertaqwa kepada Tuhan Y.M.E. Membantu anak agar dapat mandiri dan bersosialisasi dengan baik. Memberikan pengetahuan dasar tentang membaca, menulis, berhitung, menggambar, bernyanyi dan belajar sambil bermain.',
            'alt' => 'program bersih dan rapi',
            'image' => 'image/unit tk 1.png',
            'is_published' => true,
        ]);

        // SD
        UnitProgram::create([
            'unit_id' => 2,
            'title' => 'Cerdas dan Kreatif',
            'description' => 'Program mendidik anak dengan kasih sayang kepada peserta didik agar mereka memiliki kepercayaan diri, dengan dasar disiplin serta prilaku yang baik, hormat kepada orang tua dan guru serta bertaqwa kepada Tuhan Y.M.E. Membantu anak agar dapat mandiri dan bersosialisasi dengan baik. Memberikan pengetahuan dasar tentang membaca, menulis, berhitung, menggambar, bernyanyi dan belajar sambil bermain.',
            'alt' => 'program cerdas dan kreatif',
            'image' => 'image/unit tk 1.png',
            'is_published' => true,
        ]);

        // SMP
        UnitProgram::create([
            'unit_id' => 3,
            'title' => 'Cerdas dan Kreatif',
            'description' => 'Program mendidik anak dengan kasih sayang kepada peserta didik agar mereka memiliki kepercayaan diri, dengan dasar disiplin serta prilaku yang baik, hormat kepada orang tua dan guru serta bertaqwa kepada Tuhan Y.M.E. Membantu anak agar dapat mandiri dan bersosialisasi dengan baik. Memberikan pengetahuan dasar tentang membaca, menulis, berhitung, menggambar, bernyanyi dan belajar sambil bermain.',
            'alt' => 'program cerdas dan kreatif',
            'image' => 'image/unit tk 1.png',
            'is_published' => true,
        ]);

        // SMA
        UnitProgram::create([
            'unit_id' => 4,
            'title' => 'Cerdas dan Kreatif',
            'description' => 'Program mendidik anak dengan kasih sayang kepada peserta didik agar mereka memiliki kepercayaan diri, dengan dasar disiplin serta prilaku yang baik, hormat kepada orang tua dan guru serta bertaqwa kepada Tuhan Y.M.E. Membantu anak agar dapat mandiri dan bersosialisasi dengan baik. Memberikan pengetahuan dasar tentang membaca, menulis, berhitung, menggambar, bernyanyi dan belajar sambil bermain.',
            'alt' => 'program cerdas dan kreatif',
            'image' => 'image/unit tk 1.png',
            'is_published' => true,
        ]);

        // SMK
        UnitProgram::create([
            'unit_id' => 5,
            'title' => 'Cerdas dan Kreatif',
            'description' => 'Program mendidik anak dengan kasih sayang kepada peserta didik agar mereka memiliki kepercayaan diri, dengan dasar disiplin serta prilaku yang baik, hormat kepada orang tua dan guru serta bertaqwa kepada Tuhan Y.M.E. Membantu anak agar dapat mandiri dan bersosialisasi dengan baik. Memberikan pengetahuan dasar tentang membaca, menulis, berhitung, menggambar, bernyanyi dan belajar sambil bermain.',
            'alt' => 'program cerdas dan kreatif',
            'image' => 'image/unit tk 1.png',
            'is_published' => true,
        ]);
    }
}
