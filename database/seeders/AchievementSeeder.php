<?php

namespace Database\Seeders;

use App\Models\Achievements;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Achievements::create([
            'title' => 'Juara 1 Lomba Membaca',
            'student_name' => 'Rizky',
            'description' => 'Juara 1 Lomba Membaca',
            'type' => 'non-akademik',
            'year' => '2023',
            'image' => 'image/prestasi 2.png',
            'is_published' => true,
        ]);

        Achievements::create([
            'title' => 'Juara 2 Lomba Membaca',
            'student_name' => 'Fajar',
            'description' => 'Juara 2 Lomba Membaca',
            'type' => 'non-akademik',
            'year' => '2022',
            'image' => 'image/prestasi 2.png',
            'is_published' => true,
        ]);

        Achievements::create([
            'title' => 'Juara 1 Lomba Melukis',
            'student_name' => 'Faris',
            'description' => 'Juara 1 Lomba Melukis',
            'type' => 'non-akademik',
            'year' => '2023',
            'image' => 'image/prestasi 2.png',
            'is_published' => true,
        ]);

        Achievements::create([
            'title' => 'Juara 1 Lomba Olahraga Berenang',
            'student_name' => 'Siska Rahayu',
            'description' => 'Juara 1 Lomba Olahraga Berenang',
            'type' => 'non-akademik',
            'year' => '2023',
            'image' => 'image/prestasi 2.png',
            'is_published' => true,
        ]);

        Achievements::create([
            'title' => 'Juara 1 Olimpiade Matematika',
            'student_name' => 'Putri',
            'description' => 'Juara 1  Olimpiade Matematika',
            'type' => 'akademik',
            'year' => '2023',
            'image' => 'image/prestasi 2.png',
            'is_published' => true,
        ]);

        Achievements::create([
            'title' => 'Juara 2 Olimpiade Bahasa Inggris',
            'student_name' => 'Yanti',
            'description' => 'Juara 1  Olimpiade Bahasa Inggris',
            'type' => 'akademik',
            'year' => '2023',
            'image' => 'image/prestasi 2.png',
            'is_published' => true,
        ]);

        Achievements::create([
            'title' => 'Juara 2 Olimpiade Matematika',
            'student_name' => 'Putri',
            'description' => 'Juara 2  Olimpiade Matematika',
            'type' => 'akademik',
            'year' => '2022',
            'image' => 'image/prestasi 2.png',
            'is_published' => true,
        ]);

        Achievements::create([
            'title' => 'Juara 1 Olimpiade Matematika',
            'student_name' => 'Siska',
            'description' => 'Juara 1  Olimpiade Matematika',
            'type' => 'akademik',
            'year' => '2023',
            'image' => 'image/prestasi 2.png',
            'is_published' => true,
        ]);

        Achievements::create([
            'title' => 'Universitas Sumatera Utara',
            'student_name' => 'Siska',
            'description' => 'Jurusan Matematika Murni',
            'type' => 'snmptn',
            'year' => '2023',
            'image' => 'image/prestasi 2.png',
            'is_published' => true,
        ]);

        Achievements::create([
            'title' => 'Universitas Mulawarman',
            'student_name' => 'Yuli',
            'description' => 'Jurusan Matematika Murni',
            'type' => 'snmptn',
            'year' => '2023',
            'image' => 'image/prestasi 2.png',
            'is_published' => true,
        ]);

        Achievements::create([
            'title' => 'Univ. Islam Negeri Sumatera Utara',
            'student_name' => 'Yesti',
            'description' => 'Jurusan Matematika Murni',
            'type' => 'snmptn',
            'year' => '2023',
            'image' => 'image/prestasi 2.png',
            'is_published' => true,
        ]);

        Achievements::create([
            'title' => 'Universitas Lampung',
            'student_name' => 'Budi',
            'description' => 'Jurusan Fisika Kuantum',
            'type' => 'snmptn',
            'year' => '2023',
            'image' => 'image/prestasi 2.png',
            'is_published' => true,
        ]);

        Achievements::create([
            'title' => 'Universitas Sumatera Utara',
            'student_name' => 'Siska',
            'description' => 'Jurusan Matematika Murni',
            'type' => 'sbmptn',
            'year' => '2023',
            'image' => 'image/prestasi 2.png',
            'is_published' => true,
        ]);

        Achievements::create([
            'title' => 'Universitas Mulawarman',
            'student_name' => 'Yuli',
            'description' => 'Jurusan Matematika Murni',
            'type' => 'sbmptn',
            'year' => '2023',
            'image' => 'image/prestasi 2.png',
            'is_published' => true,
        ]);

        Achievements::create([
            'title' => 'Univ. Islam Negeri Sumatera Utara',
            'student_name' => 'Yesti',
            'description' => 'Jurusan Matematika Murni',
            'type' => 'sbmptn',
            'year' => '2023',
            'image' => 'image/prestasi 2.png',
            'is_published' => true,
        ]);

        Achievements::create([
            'title' => 'Universitas Lampung',
            'student_name' => 'Budi',
            'description' => 'Jurusan Fisika Kuantum',
            'type' => 'sbmptn',
            'year' => '2023',
            'image' => 'image/prestasi 2.png',
            'is_published' => true,
        ]);
    }
}
