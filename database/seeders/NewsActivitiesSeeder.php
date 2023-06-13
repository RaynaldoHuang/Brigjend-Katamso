<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\NewsActivities::create([
            'title' => 'Pengumuman Hasil Seleksi PPDB Online Tahun Pelajaran 2021/2022',
            'slug' => 'pengumuman-hasil-seleksi-ppdb-online-tahun-pelajaran-2021-2022',
            'image' => 'image/nw123.jpg',
            'content' => 'Pengumuman Hasil Seleksi PPDB Online Tahun Pelajaran 2021/2022. Selamat kepada siswa/i yang dinyatakan diterima sebagai siswa/i baru di SDIT Kupu-Kupu Transformation Center. Untuk melihat hasil seleksi PPDB Online Tahun Pelajaran 2021/2022.',
            'status' => 1,
        ]);

        \App\Models\NewsActivities::create([
            'title' => 'Presentasi Dan Orientasi Untuk Guru Yang Berjudul "Menuju Sekolah Yang Menjunjung Nilai - Nilai Kemanusiaan"',
            'slug' => 'presentasi-dan-orientasi-untuk-guru-yang-berjudul-menuju-sekolah-yang-menjunjung-nilai-nilai-kemanusiaan',
            'image' => 'image/nw122.jpg',
            'content' => 'Medan, 02 Oktober 2022. Dalam rangka Hari Anti - Kekerasan Internasional dan Peringatan Kelahiran Mahatma Gan...',
            'status' => 1,
        ]);

        \App\Models\NewsActivities::create([
            'title' => 'Pengisian Formulir Pendaftaran PPDB Online Tahun Pelajaran 2021/2022',
            'slug' => 'pengisian-formulir-pendaftaran-ppdb-online-tahun-pelajaran-2021-2022',
            'image' => 'image/unit tk 1.png',
            'content' => 'Pengumuman Hasil Seleksi PPDB Online Tahun Pelajaran 2021/2022. Selamat kepada siswa/i yang dinyatakan diterima sebagai siswa/i baru di SDIT Kupu-Kupu Transformation Center. Untuk melihat hasil seleksi PPDB Online Tahun Pelajaran 2021/2022.',
            'status' => 1,
        ]);


    }
}
